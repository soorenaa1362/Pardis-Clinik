<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $user_id = session()->get('userId');
        $user = User::where('id', $user_id)->first();
        return view('auth.login', compact('user'));
    }


    function login(Request $request)
    {
        // Validate requests
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:10',
        ]);

        $userInfo = User::where('email', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'شما نمیتوانید با این ایمیل وارد شوید.');
        }else{
            // ckeck password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                if($userInfo->access == 1){
                    return redirect()->route('user.dashboard');
                }
                if($userInfo->access == 2){
                    return redirect()->route('writer.dashboard');
                }
                if($userInfo->access == 3){
                    return redirect()->route('admin.dashboard');
                }
                
                return redirect()->route('user.dashboard');
            }else{
                return back()->with('fail', 'رمز عبور اشتباه است.');
            }
        }
    }






}
