<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    function logout()
    {
        if(session()->has('LoggedUser')){            
            // session()->pull('LoggedUser');
            Session::flush();
            return redirect()->route('auth.login.form');
        }
    }
}
