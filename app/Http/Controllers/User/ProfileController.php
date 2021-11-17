<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BioSign;
use PhpParser\Node\Expr\FuncCall;

class ProfileController extends Controller
{
    public function create()
    {
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $profile = Profile::where('user_id', $userId)->first();
        
        if($profile == null){
            return view('user.dashboard.profile', compact('authUser'));
        }else{
            return view('user.dashboard.profile', compact('authUser', 'profile'));
        }
        
    }


    public function store(Request $request)
    {
        $userId = session()->get('LoggedUser');

        $profile = Profile::where('user_id', $userId)->first();
        if($profile == null){
            Profile::create([
                'user_id' => $userId,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'age' => $request->age,
                'mobile' => $request->mobile,
                'nationalCode' => $request->nationalCode,
                'married' => $request->married,
                'mainId' => $request->mainId,
            ]);
        }else{
            $profile->update([
                $profile->user_id = $userId,
                $profile->fname = $request->fname,
                $profile->lname = $request->lname,
                $profile->age = $request->age,
                $profile->mobile = $request->mobile,
                $profile->nationalCode = $request->nationalCode,
                $profile->married = $request->married,
                $profile->mainId = $request->mainId,
            ]);
        }

        return redirect()->route('user.create.profile')->with('success', 'پروفایل تکمیل شد.');
    }

}
