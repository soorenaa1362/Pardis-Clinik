<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index()
    {
        return view('auth.register');
    }


    function register(Request $request)
    {
        // Validate requests
        $request->validate([
            'username' => 'required|',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:10',
        ]);

        // Insert data into database
        // $user = User::create([
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        // session()->put('userId' , $user->id);        
        // return redirect()->route('auth.login')->with('success' , 'ثبت کاربر با موفقیت انجام شد.');

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        session()->put('userId' , $user->id); 

        if($save){            
            return redirect()->route('auth.login.form')->with('success' , 'ثبت کاربر با موفقیت انجام شد.');
        }else{
            return back()->with('fail' , 'ثبت در سیستم انجام نشد.');
        }
    }
}
