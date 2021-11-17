<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // $data = ['LoggedUserInfo'=>User::where('id', session('LoggedUser'))->first()];
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        
        return view('admin.dashboard.index', compact('authUser'));
    }


    


    

    // public function profile($user)
    // {
    //     $userInfo = User::where('id', $user)->first();
    //     $userId = $userInfo->id;
    //     $profile = Profile::where('user_id', $userId)->first();

    //     return view('admin.users.profile', compact(['userInfo','profile']));
        
    // }




    
}
