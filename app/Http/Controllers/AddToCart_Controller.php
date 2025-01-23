<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Category;
use App\Models\UploadBook;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddToCart_Controller extends Controller
{
    //
    public function addToCart(Request $data)
{
    $book = new Cart();
    $book->BookId = $data->input('bookId');
    $book->Book_Title = $data->input('Book_Title');
    $book->Price = $data->input('Price');
    $filename = pathinfo($data->input('Thumbnail'), PATHINFO_BASENAME);
    $book->Thumbnail = $filename;

    $book->save();
    return redirect()->back()->with('success', 'Congratulations!');
}

public function checkout(Request $request)
    {
        $cartItems = Cart::all();
        $recordCount = Cart::count();
        $total = $cartItems->sum('Price');
        $cart = Cart::first();
        $cart->Total = $total;
        $cart->save();
        $bookId = $request->input('BookId');
        $records = Cart::all();
        return view('checkout', compact('cartItems', 'total', 'bookId', 'records', 'recordCount'));
    }

    public function applyCoupon(Request $request)
    {
        $cartItems = Cart::all();
        $total = $cartItems->sum('Price');
        $coupon = $request->input('coupon');
        
        if ($coupon === 'elisha') {
            foreach ($cartItems as $cartItem) {
                $cartItem->Total = $total;
                $discount = $total * 0.4; 
                $finalTotal = $total - $discount;
                $cartItem->save();
    
                return response()->json([
                    'success' => true,
                    'discount' => $discount,
                    'final_total' => $finalTotal,
                ]);
            }
        }
    
        return response()->json([
            'success' => false,
        ]);
    }
    
}
