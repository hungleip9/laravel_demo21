<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Danhmuccha;
use App\Models\Image;
use App\Models\Product;

use App\Task;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    public function detail($id){
        $products = Product::all();
        $product = Product::find($id);
        $images = $product->image;
        $categories = Category::all();
        $danhmucchas = Danhmuccha::all();
        // Cache user number
        $cart_number = Cache::remember('cart_number',5,function (){
            $cart_number = Cart::count();
            return $cart_number;
        });
        // end Cache user number
        return view('frontend.shop-detail',[
            'products' => $products,
            'product' => $product,
            'categories' => $categories,
            'images' => $images,
            'cart_number' => $cart_number,
            'danhmucchas' => $danhmucchas
        ]);

    }
    public function like($id){
        $product = Product::find($id);
        $product->like =$product->like + 1;
        $product->save();
        return redirect()->route('frontend.dashboard');
    }

}
