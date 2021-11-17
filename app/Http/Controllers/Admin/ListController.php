<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BioSign;
use App\Models\Patient;

class ListController extends Controller
{
    public function usersList()
    {
        // $users = User::where('access', '!=', '3')->get();
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $profiles = Profile::all();             

        return view('admin.dashboard.usersList', compact('authUser', 'profiles'));        
    }


    public function userDetails($profile_id)
    {
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $profile = Profile::where('id', $profile_id)->first();
        
        
        return view('admin.dashboard.userDetails', compact('profile', 'authUser'));
    }


    public function patientsList()
    {
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $patients = Patient::all();
        
        return view('admin.dashboard.patientsList', compact('authUser', 'patients'));
    }


    public function patientsDetails($patient_id)
    {
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $patient = Patient::find($patient_id);        
        
        return view('admin.dashboard.patientDetails', compact('authUser', 'patient'));
    }

}
