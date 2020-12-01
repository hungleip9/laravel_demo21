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

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::all();
        $danhmucchas = Danhmuccha::all();
        $products = Product::orderBy('updated_at','desc')->paginate(8);
        $prs = Product::orderBy('like','desc')->paginate(3);
        $images = Image::all();

        // Cache user number
        $cart_number = Cache::remember('cart_number',5,function (){
            $cart_number = Cart::count();
            return $cart_number;
        });
        // end Cache user number

        return view('frontend.index',[
            'categories' => $categories,
            'products' => $products,
            'images' => $images,
            'prs' => $prs,
            'cart_number' => $cart_number,
            'danhmucchas' => $danhmucchas,

        ]);
    }

}
