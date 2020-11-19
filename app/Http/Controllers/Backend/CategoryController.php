<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(5);
        return view('backend.categories.index',[
            'categories' => $categories
        ]);
    }
    public function showProducts($id){
        $category = Category::find($id);
        $products = $category->product;
        return view('backend.categories.showProduct',[
            'products' => $products
        ]);
    }
    public function create(){
        $categories = Category::all();
        return view('backend.categories.create',[
            'categories' => $categories
        ]);
    }
    public function  store(StoreCategoryRequest $request){
        $category = new Category();
        $category->name =$request->get('name');
        $category->slug = \Illuminate\Support\Str::slug($request->get('slug'));
        $category->parent_id =$request->get('parent_id');
        $category->depth =$request->get('depth');
        $category->save();
        return redirect()->route('categories.index');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('backend.categories.edit',[
            'category' => $category
        ]);
    }
    public function upload(StoreCategoryRequest $request,$id){
        //lay du lieu tu form
        $name = $request->get('name');
        //upload du lieu
        $category = Category::find($id);
        $category->name =$name;
        $category->save();
        return redirect(route('categories.index'));
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
