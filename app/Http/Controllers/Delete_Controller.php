<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\UploadBook;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Delete_Controller extends Controller
{
    //

    public function deletebook($bookid)
    {
        $specificbook = UploadBook::find($bookid);
        $specificbook->delete();
        return redirect('/books')->with('DeleteAlert','Book Deleted Successfully');
    }

    public function removecart($bookid)
    {
        $specificbook = Cart::find($bookid);
        $specificbook->delete();
        return redirect('/cart')->with('DeleteAlert','Book Deleted Successfully');
    }
}
