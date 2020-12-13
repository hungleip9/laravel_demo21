<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::paginate(5);
        return view('backend.orders.index',[
            'orders' => $orders,
        ]);
    }
//    public function store($user_id,$product_id){
//        $user_id =  $user_id;
//        $product_id = $product_id;
//    }
    public function showProducts($id)
    {
        $order = Order::find($id);
        $products = $order->products;
        return view('backend.orders.showProduct',[
            'products' => $products
        ]);
    }
    public function acOrder($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return back();
    }
    public function NotAcOrder($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        return back();
    }

    public function destroy(Request $request,$id){
        $order = Order::find($id);
        $order->delete();
        if (!$order->delete()){
            $request->session()->flash('error','Xóa thành công');
        }else{
            $request->session()->flash('success','Xóa không thành công');
        }
        return back();
    }
}
