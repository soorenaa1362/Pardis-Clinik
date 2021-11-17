<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>Admin::where('id', session('LoggedUser'))->first()];
        return view('writer.dashboard', $data);
    }
}
