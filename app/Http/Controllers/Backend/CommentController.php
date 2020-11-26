<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(){
    }
    public function postcomment(Request $request,$id){
        $product_id = $id;
        $comments = new Comment;
        $comments->product_id = $product_id;
        $comments->user_id = Auth::user()->id;
        $comments->comment = $request->comment;
        $comments->save();
        return redirect(route('backend.product.detail',$product_id));
    }
    public function showComment($id){
        $commnets = Comment::find($id);
        return view('backend.users.showComment',[
            'commnets' => $commnets
        ]);
    }
}
