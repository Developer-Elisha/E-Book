<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\UploadBook;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Upload_Book_Controller extends Controller
{
    //
    public function uploadbook(Request $req)
    {
        $upload = new UploadBook();
        
        $bt = $req->title;
        $p = $req->pdf;
        $d = $req->description;
        $a = $req->Author;
        $c = $req->Category;
        $pr = $req->Price;

        $upload->Book_Title = $bt;
        $image=$req->file('thumbnail');
        $ext= rand().".".$image->getClientOriginalName();
        $image->move("Files/",$ext);
        $upload->thumbnail=$ext;
       
        $pdf=$req->file('pdf');
        $ext= rand().".".$pdf->getClientOriginalName();
        $pdf->move("pdf/",$ext);
        $upload->pdf=$ext;

        $upload->Description = $d;
        $upload->Author = $a;
        $upload->Category = $c;
        $upload->Price = $pr;
        
        $upload->save();

        return redirect('/books');
    }

    

    public function getcategories() {
        $cat = category::get();
        return view('admin.upload', compact('cat'));
    }

    public function countRecords()
    {
        $recordCount = UploadBook::count();

        return view('admin.index', compact('recordCount'));
    }

}
