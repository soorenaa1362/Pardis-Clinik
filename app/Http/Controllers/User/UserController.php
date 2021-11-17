<?php

namespace App\Http\Controllers\User;

use App\Models\User;
// use App\Models\BioSign;
use App\Models\Profile;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;
use App\Models\BioSign;
use App\Models\Patient;

class UserController extends Controller
{
    public function index()
    {
        // $data = ['LoggedUserInfo'=>User::where('id', session('LoggedUser'))->first()];
        $userId = session()->get('LoggedUser');
        $authUser = User::where('id', $userId)->first();
        $date = new Verta($authUser->created_at);
        $profile = Profile::where('user_id', $userId)->first();        
        
        return view('user.dashboard.index', compact('authUser', 'profile', 'date'));
    }



    // public function profile(Request $request)
    // {
    //     $userId = session()->get('LoggedUser');

    //     $profile = Profile::where('user_id', $userId)->first();
    //     if($profile == null){
    //         Profile::create([
    //             'user_id' => $userId,
    //             'fname' => $request->fname,
    //             'lname' => $request->lname,
    //             'age' => $request->age,
    //             'mobile' => $request->mobile,
    //             'nationalCode' => $request->nationalCode,
    //             'married' => $request->married,
    //             'mainId' => $request->mainId,
    //         ]);
    //     }else{
    //         $profile->update([
    //             $profile->user_id = $userId,
    //             $profile->fname = $request->fname,
    //             $profile->lname = $request->lname,
    //             $profile->age = $request->age,
    //             $profile->mobile = $request->mobile,
    //             $profile->nationalCode = $request->nationalCode,
    //             $profile->married = $request->married,
    //             $profile->mainId = $request->mainId,
    //         ]);
    //     }

    //     return redirect()->route('user.dashboard')->with('success', 'پروفایل تکمیل شد.');
        
    // }



        public function patientForm()
        {
            $userId = session()->get('LoggedUser');
            $authUser = User::where('id', $userId)->first();
            
            return view('user.dashboard.patient', compact('authUser'));
        }


        public function patientStore(Request $request)
        {
            $userId = session()->get('LoggedUser');
            $profile = Profile::where('user_id', $userId)->first();
            
            $patient = Patient::create([
                'profile_id' => $profile->id,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'nationalCode' => $request->nationalCode,
                'mobile' => $request->mobile,
                'age' => $request->age,
                'sex' => $request->sex,
            ]);
            
            return redirect()->route('user.patientBioSign.form' , compact('patient'));

            // $bioSign = BioSign::create([
            //     'profile_id' => $profile->id,
            //     'bio' => $request->bio,
            //     'heartdisease' => $request->heartdisease,
            //     'geneticdisease' => $request->geneticdisease,
            //     'headache' => $request->headache,
            //     'diabete' => $request->diabete,
            // ]);

            // dd($bioSign);
            
        }


        public function patientBioSignForm()
        {
            $userId = session()->get('LoggedUser');
            $authUser = User::where('id', $userId)->first();
            $profile = Profile::where('user_id', $userId)->first();
            $patient = Patient::all()->last();            
            
            return view('user.dashboard.patientBioSign', compact('authUser', 'patient'));
        }


        public function patientBioSignStore(Request $request, $patient_id)
        {
            $bioSign = BioSign::create([
                'patient_id' => $patient_id,
                'bio' => $request->bio,
                'heartdisease' => $request->heartdisease,
                'geneticdisease' => $request->geneticdisease,
                'headache' => $request->headache,
                'diabete' => $request->diabete,
            ]);

            return redirect()->route('user.dashboard');
        }


        public function patientList()
        {
            $userId = session()->get('LoggedUser');
            $authUser = User::where('id', $userId)->first();
            $profile = Profile::where('user_id', $userId)->first();
            $patients = Patient::all();
            return view('user.dashboard.patientList', compact('profile', 'authUser', 'patients'));
        }


}
