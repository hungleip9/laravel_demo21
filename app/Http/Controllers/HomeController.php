<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $url = Storage::url('file2.txt');//lay link file
//        $contents = Storage::get('file2.txt');//lay noi dung file
//        $exists = Storage::disk('local')->exists('file2.txt');//kiem tra xem co ton tai file khong
//        Storage::copy('file4.txt','public/file4.txt');//copy file
//        Storage::move('file.txt','public/file.txt');//di chuyen file
//        Storage::delete('public/file.txt');//xoa file
//        $files = Storage::files('public');//lay danh sach files
//            $files = Storage::allFiles('public');//Lấy tất cả các file con trong thư mục cùng với tất cả các file trong các thư mục con
//        Storage::disk('public')->makeDirectory('hung');//tao thu muc
//        Storage::disk('public')->deleteDirectory('hung');//xoa thu muc

//        return Storage::download('file2.txt');//download file


        Storage::put('file4.txt', 'Contents');//mac dinh luu vao disk local
//        Storage::disk('local')->put('file.txt','Contents');
//        Storage::disk('local2')->put('file2.txt','Contents');
        return view('home');


    }
}
