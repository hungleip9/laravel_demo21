<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.auth.login');
});


//Route::resource( 'frontend/task', \Frontend\TaskController::class);


//Route::group(["prefix" => "task", "as" => "task.", "namespace" => "Frontend"], function(){
//    Route::get("/", "TaskController@index")->name('index');
//    Route::get("create", "TaskController@create");
//    Route::get("destroy/{id?}", "TaskController@destroy");
//    Route::get("edit/{id?}", "TaskController@edit");
//    Route::get("show/{id?}", "TaskController@show");
//    Route::get("store", "TaskController@store")->name("store");
//    Route::get("update/{id?}", "TaskController@update");
//    Route::get("complete/{id?}", "TaskController@complete");
//    Route::get("reComplete/{id?}", "TaskController@reComplete");
//});
Route::prefix('user')->group(function () {
    Route::get('/',
        [\App\Http\Controllers\Backend\UserController::class,'index'])->name('user.index')->middleware(['can:admin-user']);
    Route::get('info',
        [\App\Http\Controllers\Backend\UserController::class,'test'])->name('user.info');
    Route::get('create',
        [\App\Http\Controllers\Backend\UserController::class,'create'])->name('user.create');
    Route::post('store',
        [\App\Http\Controllers\Backend\UserController::class,'store'])->name('user.store');
    Route::get('{id}/showProducts',
        [\App\Http\Controllers\Backend\UserController::class,'showProduct'])->name('user.showProducts');
    Route::get('{id}/edit',
        [\App\Http\Controllers\Backend\UserController::class,'edit'])->name('user.edit');
    Route::put('{id}/upload',
        [\App\Http\Controllers\Backend\UserController::class,'upload'])->name('user.upload');
    Route::delete('destroy/{id}',
        [\App\Http\Controllers\Backend\UserController::class,'destroy'])->name('user.destroy');
});
Route::prefix('products')->group(function (){
    Route::get('/',
        [\App\Http\Controllers\Backend\ProductsController::class,'index'])->name('products.index');
    Route::get('/create',
        [\App\Http\Controllers\Backend\ProductsController::class,'create'])->name('products.create');
    Route::get('{id}/show',
        [\App\Http\Controllers\Backend\ProductsController::class,'showImages'])->name('products.show');
    Route::get('{product}/edit',
        [\App\Http\Controllers\Backend\ProductsController::class,'edit'])->name('products.edit')->middleware('can:update,product');
    Route::put('{id}/upload',
        [\App\Http\Controllers\Backend\ProductsController::class,'upload'])->name('products.upload');
    Route::post('store',
        [\App\Http\Controllers\Backend\ProductsController::class,'store'])->name('products.store');
    Route::delete('destroy/{id}',
        [\App\Http\Controllers\Backend\ProductsController::class,'destroy'])->name('products.destroy');
});
Route::prefix('categories')->group(function (){
    Route::get('/',
        [\App\Http\Controllers\Backend\CategoryController::class,'index'])->name('categories.index');
    Route::get('/create',
        [\App\Http\Controllers\Backend\CategoryController::class,'create'])->name('categories.create');
    Route::post('/store',
        [\App\Http\Controllers\Backend\CategoryController::class,'store'])->name('categories.store');
    Route::get('{id}/show',
        [\App\Http\Controllers\Backend\CategoryController::class,'showProducts'])->name('categories.show');
    Route::get('{id}/edit',
        [\App\Http\Controllers\Backend\CategoryController::class,'edit'])->name('categories.edit');
    Route::put('{id}/upload',
        [\App\Http\Controllers\Backend\CategoryController::class,'upload'])->name('categories.upload');
    Route::delete('destroy/{id}',
        [\App\Http\Controllers\Backend\CategoryController::class,'destroy'])->name('categories.destroy');
});
Route::prefix('order')->group(function (){
    Route::get('{id}/showProducts',
        [\App\Http\Controllers\Backend\OrderController::class,'showProducts'])->name('order.showProducts');
    Route::get('/',
        [\App\Http\Controllers\Backend\OrderController::class,'index'])->name('order.index');
});
Route::get('task',
    [\App\Http\Controllers\Task\TaskController::class,'index'])
    ->name('task.index');
Route::get('task/create',
    [\App\Http\Controllers\Task\TaskController::class,'create'])
    ->name('task.create');

Route::post('task',
    [\App\Http\Controllers\Task\TaskController::class,'store'])->name('task.store');
Route::get('task/{id}/edit',
    [\App\Http\Controllers\Task\TaskController::class,'edit'])->name('task.edit');
Route::put('task/update/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'update'])->name('task.update');
Route::delete('task/destroy/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'destroy'])->name('task.destroy');
Route::get('task/complete/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'complete'])->name('task.complete');
Route::get('task/reComplete/{id}',
    [\App\Http\Controllers\Task\TaskController::class,'reComplete'])->name('task.reComplete');
Route::get('task/dashboard',
    [\App\Http\Controllers\Task\TaskController::class,'dashboard'])->name('task.dashboard');
Route::get('task/products',
    [\App\Http\Controllers\Task\TaskController::class,'products'])->name('task.products');
Route::get('oniichan',function (){
    return view('frontend.index');
})->name('oniichan.index');
Route::get('/home/test',"HomeController@index");
Route::get("test", "HomeController@index");







Auth::routes();

