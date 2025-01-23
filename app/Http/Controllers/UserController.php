<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\UploadBook;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function insertuser(Request $abc)
    {
        $mtn = new User();
    
        $n = $abc->name;
        $e = $abc->email;
        $p = $abc->password;
    
        // Check if password is not empty
        if (!empty($p)) {
            $mtn->name = $n;
            $mtn->email = $e;
            $mtn->password = $p;
    
            if ($abc->hasFile('Profile_Pic')) {
                $image = $abc->file('Profile_Pic');
                $ext = rand() . "." . $image->getClientOriginalName();
                $image->move("User-img/", $ext);
                $mtn->Profile_Pic = $ext;
            }
    
            $mtn->save();
            return redirect('/login')->with('uccess', 'Data Inserted Successfully');
        } else {
            // Handle case where password is empty
            return redirect()->back()->with('error', 'Password cannot be empty');
        }
    }
    
    public function loginuser(Request $req)
    {
        $useremail = DB::table('users')->where('email', $req->email)->first();
        $userpass = DB::table('users')->where('password', $req->password)->first();
        if($useremail && $userpass)
        {
            return redirect('/');
        }
        else{
            return redirect('/contact');
        }

    }

}
