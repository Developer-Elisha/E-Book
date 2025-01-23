<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\UploadBook;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class Update_Book_Controller extends Controller
{
    //

    public function editdetail($id)
{
    $specificbook = UploadBook::find($id);
    return view('admin.update', compact('specificbook'));
}

    public function update(Request $req)
{
    $specificbook = UploadBook::find($req->input('bookid'));

    if (!$specificbook) {
        return redirect()->back()->with('error', 'Book not found.');
    }
    $specificbook->Book_Title = $req->input('booktitle');
    if ($req->hasFile('thumbnail')) {
        $image = $req->file('thumbnail');
        $ext = rand() . '.' . $image->getClientOriginalExtension();
        $image->move("Files/", $ext);
        $specificbook->thumbnail = $ext;
    }

    // Handle the PDF file upload
    if ($req->hasFile('pdf')) {
        $pdf = $req->file('pdf');
        $pdfFileName = rand() . '.' . $pdf->getClientOriginalExtension();
        $pdf->move("pdf/", $pdfFileName);
        $specificbook->PDF = $pdfFileName;
    }

    $specificbook->Description = $req->input('description');
    $specificbook->Author = $req->input('Author');
    $specificbook->Category = $req->input('Category');
    $specificbook->Price = $req->input('Price');

    $specificbook->save();

    return redirect('/books')->with('success', 'Book updated successfully.');
}
}
