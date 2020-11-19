<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class ProductsController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
//        dd($products);
        return view('backend.products.index',[
            'products' => $products
        ]);

    }
    public function showImages($id){
        $product = Product::find($id);
        $images = $product->image;
        return view('backend.products.showImage',[
            'images' => $images
        ]);

    }
    public function create(){
        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(StoreProductRequest $request)
    {

        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;

        $product->save();
        if ($request->hasFile('images')){
            $files = $request->file('images');
            foreach ($files as $file){
                //cach 2 khong khuyen dung
//            $name = $file->getClientOriginalName();
//            $file->move('avatars',$name);
//            $path = 'avatars'.$name;
                //cach 1 khuyen dung

                $path = Storage::disk('public')
                    ->putFileAs('image', $file,$file->getClientOriginalName());

                $image = new Image();
                $image->name = $file->getClientOriginalName();
                $image->path =$path;
                $image->product_id = $product->id;
                $image->save();
            }


        }else{
            return redirect(route('products.create'));
        }

        return redirect()->route('products.index');
    }
    public function edit(Product $product){

//        $product = Product::find($id);
//        $user = Auth::user();
//        if ($user->can('update', $product)) {
//            dd('co');
//        }else{
//            dd('ko');
//        }


        $categories = Category::get();
        $user = Auth::user();
        if (Gate::allows('update-product', $product)){
            return view('backend.products.edit',[
                'product' => $product,
                'categories' => $categories
            ]);
        }else{
            dd('khong');
        }



    }
    public function update(StoreProductRequest $request,$id){
        //lay du lieu tu form
        $name = $request->get('name');
        $slug = \Illuminate\Support\Str::slug($request->get('name'));
        $category_id = $request->get('category_id');
        $origin_price = $request->get('origin_price');
        $sale_price = $request->get('sale_price');
        $content = $request->get('content');
        $status = $request->get('status');
        //upload du lieu
        $product = Product::find($id);
        $product->name = $name;
        $product->slug = $slug;
        $product->category_id = $category_id;
        $product->origin_price = $origin_price;
        $product->sale_price = $sale_price;
        $product->content = $content;
        $product->status = $status;
        $product->save();
        return redirect(route('products.index'));
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
