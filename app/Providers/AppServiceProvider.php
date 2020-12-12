<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhmucs = Category::where('parent_id','-1')->get();
        $categories = Category::all();
        $products = Product::orderBy('updated_at','desc')->paginate(8);
        $prs = Product::orderBy('like','desc')->paginate(3);
        $images = Image::all();

        View::share([
            'danhmucs' => $danhmucs,
            'products' => $products,
            'prs' => $prs,
            'images' => $images,
            'categories'=> $categories,

        ]);
    }
}
