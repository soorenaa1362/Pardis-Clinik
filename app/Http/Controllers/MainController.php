<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Middleware\Access;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class MainController extends Controller
{
    // function register()
    // {
    //     return view('auth.register');
    // }


    // function save(Request $request)
    // {
    //     // Validate requests
    //     $request->validate([
    //         'name' => 'required|',
    //         'email' => 'required|email|unique:admins',
    //         'password' => 'required|min:5|max:10',
    //     ]);

    //     // Insert data into database
    //     // $admin = Admin::create([
    //     //     'name' => $request->name,
    //     //     'email' => $request->email,
    //     //     'password' => Hash::make($request->password),
    //     // ]);
    //     // session()->put('adminId' , $admin->id);        
    //     // return redirect()->route('auth.login')->with('success' , 'ثبت کاربر با موفقیت انجام شد.');

    //     $admin = new Admin;
    //     $admin->name = $request->name;
    //     $admin->email = $request->email;
    //     $admin->password = Hash::make($request->password);
    //     $save = $admin->save();
    //     session()->put('adminId' , $admin->id);        

    //     if($save){            
    //         return redirect()->route('auth.login')->with('success' , 'ثبت کاربر با موفقیت انجام شد.');
    //     }else{
    //         return back()->with('fail' , 'ثبت در سیستم انجام نشد.');
    //     }
    // }

    // function login() 
    // {
    //     $admin_id = session()->get('adminId');
    //     $admin = Admin::where('id', $admin_id)->first();
    //     // dd($admin->name);
    //     return view('auth.login', compact('admin'));
    // }


    // function check(Request $request)
    // {
    //     // Validate requests
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required|min:5|max:10',
    //     ]);

    //     $userInfo = Admin::where('email', $request->email)->first();

    //     if(!$userInfo){
    //         return back()->with('fail', 'شما نمیتوانید با این ایمیل وارد شوید.');
    //     }else{
    //         // ckeck password
    //         if(Hash::check($request->password, $userInfo->password)){
    //             $request->session()->put('LoggedUser', $userInfo->id);
    //             if($userInfo->access == 1){
    //                 return redirect()->route('user.dashboard');
    //             }
    //             if($userInfo->access == 2){
    //                 return redirect()->route('writer.dashboard');
    //             }
    //             if($userInfo->access == 3){
    //                 return redirect()->route('admin.dashboard');
    //             }
    //             // return redirect()->route('admin.dashboard');
    //         }else{
    //             return back()->with('fail', 'رمز عبور اشتباه است.');
    //         }
    //     }
    // }


    // function logout()
    // {
    //     if(session()->has('LoggedUser')){            
    //         // session()->pull('LoggedUser');
    //         Session::flush();
    //         return redirect()->route('auth.login');
    //     }
    // }


    // function dashboard()
    // {
    //     // $admin_id = session()->get('LoggedUser');
    //     // $admin = Admin::where('id', $admin_id)->first();
    //     // return view('admin.dashboard', compact('admin'));
        
    //     $data = ['LoggedUserInfo'=>Admin::where('id', session('LoggedUser'))->first()];
    //     return view('admin.dashboard', $data);
    // }


    // function settings()
    // {
    //     $data = ['LoggedUserInfo'=>Admin::where('id', session('LoggedUser'))->first()];
    //     return view('admin.settings', $data);   
    // }


    // function profile()
    // {
    //     $data = ['LoggedUserInfo'=>Admin::where('id', session('LoggedUser'))->first()];
    //     return view('admin.profile', $data);   
    // }

    // function staff()
    // {
    //     $data = ['LoggedUserInfo'=>Admin::where('id', session('LoggedUser'))->first()];
    //     return view('admin.staff', $data);   
    // }



}
