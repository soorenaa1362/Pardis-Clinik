<?php

namespace App\Http\Controllers\Writer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WriterController extends Controller
{
    public function dashboard()
    {
        // $admin_id = session()->get('LoggedUser');
        // $admin = Admin::where('id', $admin_id)->first();
        // return view('admin.dashboard', compact('admin'));
        
        $data = ['LoggedUserInfo'=>User::where('id', session('LoggedUser'))->first()];
        
        return view('writer.dashboard', $data);
    }
}
