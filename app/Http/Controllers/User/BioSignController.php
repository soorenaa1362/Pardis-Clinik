<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\BioSign;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BioSignController extends Controller
{
    public function create(Request $request)
    {
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $profile = Profile::where('user_id', $userId)->first();
        $profileId = $profile->id;
        
        $bioSign = BioSign::where('profile_id', $profileId)->first();

        if($bioSign == null){
            return view('user.dashboard.bioSign', compact('authUser'));
        }else{
            return view('user.dashboard.bioSign', compact('authUser', 'bioSign'));
        }
    }



    public function store(Request $request)
    {
        $userId = session()->get('LoggedUser');        
        $profile = Profile::where('user_id', $userId)->first();        
        $profileId = $profile->id;        

        BioSign::create([
            'profile_id' => $profileId,
            'bio' => $request->bio,
            'heartdisease' => $request->heartdisease,
            'geneticdisease' => $request->geneticdisease,
            'headache' => $request->headache,
            'diabete' => $request->diabete,
        ]);
        
        return redirect()->route('user.create.bioSign')->with('success', 'شرح حال تکمیل شد.');

    }


}
