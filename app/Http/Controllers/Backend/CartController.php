<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $items = Cart::content();
        $categories = Category::get();
        $images = Image::all();
        $products = Product::orderBy('updated_at','desc')->paginate(8);
        return view('frontend.cart',[
            'categories' => $categories,
            'images' => $images,
            'products' => $products,
            'items' => $items
        ]);
    }
    public function add($id){
        $product = Product::find($id);
        Cart::add($product->id, $product->name,1,$product->sale_price,0,
        [
            'image' => $product->avatar
        ]
        );
        return redirect(route('backend.cart.index'));
    }
    public function remove($cart_id){
        Cart::remove($cart_id);
        return redirect(route('backend.cart.index'));
    }
}
