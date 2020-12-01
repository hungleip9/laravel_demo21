<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Danhmuccha;
use App\Models\Image;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DanhmucchaController extends Controller
{
    public function detail($id){
        $danhmucchas = Danhmuccha::all();
        $danhmuccha = Danhmuccha::find($id);
        $products = Product::all();
        $categories = Category::where('danhmuccha_id',$id)->get();
        $images = Image::all();
        // Cache user number
        $cart_number = Cache::remember('cart_number',5,function (){
            $cart_number = Cart::count();
            return $cart_number;
        });
        // end Cache user number
        return view('frontend.detail',[
           'danhmuccha' => $danhmuccha,
            'products' => $products,
            'danhmucchas' => $danhmucchas,
            'cart_number' => $cart_number,
            'images' => $images,
            '$categories' => $categories,
        ]);
    }
}
