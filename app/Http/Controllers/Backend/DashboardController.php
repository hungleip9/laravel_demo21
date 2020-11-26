<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::orderBy('updated_at','desc')->paginate(8);
        $prs = Product::orderBy('like','desc')->paginate(3);
        $com = Product::where('category_id',1);
        $images = Image::all();
        return view('frontend.index',[
            'categories' => $categories,
            'products' => $products,
            'com' => $com,
            'images' => $images,
            'prs' => $prs
        ]);
    }
}
