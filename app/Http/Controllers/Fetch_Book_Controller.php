<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\UploadBook;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class Fetch_Book_Controller extends Controller
{
    //
    public function getdata()
{
    $records = UploadBook::get();
    return view('admin.books', compact('records'));
}

public function getprod()
{
    
    $records = UploadBook::get();
    return view('index',compact('records'));
}

public function viewcart()
{
    $records = Cart::get();
    return view('/cart',compact('records'));
}

public function prodfetch($id)
{
    $records = DB::table('upload_books')->where('id', $id)->get();
    return view('product', compact('records'));
}

    }
    


