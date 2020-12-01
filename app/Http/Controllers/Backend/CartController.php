<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CartController extends Controller
{
    public function checkout(){
        $items = Cart::content();
        $categories = Category::all();
        $images = Image::all();
        $user_info = Auth::user();
        // Cache user number
        $cart_number = Cache::remember('cart_number',5,function (){
            $cart_number = Cart::count();
            return $cart_number;
        });
        // end Cache user number
        return view('frontend.checkout',[
            'categories' => $categories,
            'cart_number' => $cart_number,
            'images' => $images,
            'items' => $items,
            'user_info' => $user_info,
        ]);
    }
    public function store($id){

    }
}
