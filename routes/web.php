<?php

use Illuminate\Support\Facades\Route;
use App\Models\UploadBook;
use App\Models\Category;
use App\Models\users;
use App\Models\cart;
use App\Http\Controllers\Upload_Book_Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Fetch_Book_Controller;
use App\Http\Controllers\AddToCart_Controller;
use App\Http\Controllers\Delete_Controller;
use App\Http\Controllers\Update_Book_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/errors', function () {
    return view('errors');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product/{id}', [Fetch_Book_Controller::class, 'prodfetch']);
Route::get('/cart', [Fetch_Book_Controller::class, 'viewcart']);
Route::post('/addToCart', [AddToCart_Controller::class,'addToCart']);
Route::post('/checkout', [AddToCart_Controller::class,'checkout']);
Route::post('/apply_coupon', [AddToCart_Controller::class, 'applyCoupon'])->name('apply_coupon');

Route::get('/tracking', function () {
    return view('tracking');
});


// admin routes

Route::get('/books', function () {
    return view('admin.books');
});

Route::post('/books', [Upload_Book_Controller::class, ('uploadbook')]);
Route::get('/books', [Fetch_Book_Controller::class, ('getdata')]);
Route::post('/deletepage/{id}',[Delete_Controller::class,('deletebook')]);
Route::post('/deletepg/{id}', [Delete_Controller::class, 'removecart']);
Route::post('/upload/{id}',[Update_Book_Controller::class,('editdetail')]);
Route::post('/editrec',[Update_Book_Controller::class,('update')]);



Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/dashboard',[Upload_Book_Controller::class, 'countRecords']);

Route::get('/update', function () {
    return view('admin.update');
});

Route::get('/upload', function () {
    return view('admin.upload');
});

Route::get('/upload', [Upload_Book_Controller::class, 'getcategories']);
Route::get('/errors', [Fetch_Book_Controller::class, 'getprod'])->name('errors');
Route::get('/', [Fetch_Book_Controller::class, 'getprod']);


Route::get('/user', function () {
    return view('user');
});
