<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\ListController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\BioSignController;
use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Dashboard\DashboardController;
// use App\Http\Controllers\Dashboard\DashboardController;
// use App\Http\Controllers\Writer\WriterController;
use App\Http\Controllers\User\ProfileController;

Route::get('/', function () {
    return view('index');
});


// عملیات ثبت نام و ورود و خروج
Route::post('register', [RegisterController::class, 'register'])->name('auth.register');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');
Route::get('auth/logout', [LogoutController::class, 'logout'])->name('auth.logout');


Route::group(['middleware'=>['AuthCheck']], function(){
    // نمایش فرم ثبت نام و ورود
    Route::get('register/form', [RegisterController::class, 'index'])->name('auth.register.form');
    Route::get('login/form', [LoginController::class, 'index'])->name('auth.login.form');

    // User :
    Route::prefix('user')->group(function(){
        // Dashboard
        Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard'); // نمایش داشبورد کاربر
        
        // Patient
        Route::get('/dashboard/patient', [UserController::class, 'patientForm'])->name('user.patient.form'); // نمایش فرم ثبت بیمار
        Route::post('patient', [UserController::class, 'patientStore'])->name('user.patient.store'); // ذخیره ی پروفایل بیمار
        Route::get('patient/list', [UserController::class, 'patientList'])->name('user.patient.list'); // نمایش لیست بیماران

        // BioSign
        Route::get('patient/bioSign/form', [UserController::class, 'patientBioSignForm'])->name('user.patientBioSign.form'); // نمایش فرم شرح حال بیمارs
        Route::post('{patient_id}/patient/bioSign', [UserController::class, 'patientBioSignStore'])->name('user.patientBioSign.store'); // ذخیره شرح حال بیمار

        // Profile
        Route::get('dashboard/profile', [ProfileController::class, 'create'])->name('user.create.profile'); // نمایش فرم پروفایل
        Route::post('profile', [ProfileController::class, 'store'])->name('user.profile.store'); // ذخیره ی پروفایل کاربر

        //BioSign
        Route::get('dashboard/bioSign', [BioSignController::class, 'create'])->name('user.create.bioSign'); // نمایش فرم شرح حال و علائم
        Route::post('bioSign', [BioSignController::class, 'store'])->name('user.bioSign.store'); // ذخیره ی شرح حال و علائم
    });


    // Admin :
    Route::prefix('admin')->group(function(){
        // Dashboard
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); // نمایش داشبورد ادمین
        
        // Users List
        Route::get('users/list', [ListController::class, 'usersList'])->name('admin.users.list'); // نمایش لیست کاربران
        Route::get('{profile_id}/user/details', [ListController::class, 'userDetails'])->name('admin.user.details'); // نمایش جزئیات هر کاربر

        // Patients List
        Route::get('patients/list', [ListController::class, 'patientsList'])->name('admin.patients.list');
        Route::get('{patient_id}/patients/details', [ListController::class, 'patientsDetails'])->name('admin.patients.details');
    });

});

















// Route::group(['middleware'=>['AuthCheck']], function(){
    // // نمایش فرم ثبت نام و ورود
    // Route::get('register/form', [RegisterController::class, 'index'])->name('auth.register.form');
    // Route::get('login/form', [LoginController::class, 'index'])->name('auth.login.form');
    
    // نمایش داشبورد کاربر
    // Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    
    // تکمیل و نمایش پروفایل کاربر
    // Route::get('user/dashboard/profile', [ProfileController::class, 'index'])->name('user.dashboard.profile');
    // Route::post('user/profile', [ProfileController::class, 'store'])->name('user.profile');
    // Route::get('{user_id}/user/profile/edit', [ProfileController::class, 'edit'])->name('user.profile.edit');

    // تکمیل و نمایش شرح حال و علائم کاربر
    // Route::get('user/dashboard/bioSigns', [ProfileController::class, 'bioSigns'])->name('user.dashboard.bioSigns');
    // Route::post('user/bioSigns', [ProfileController::class, 'bioSignsStore'])->name('user.bioSigns');


    // نمایش داشبورد ادمین
    // Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Route::get('admin/users/list', [AdminController::class, 'usersList'])->name('admin.users.list');   
    // Route::get('{profile_id}/admin/user/details', [AdminController::class, 'details'])->name('admin.user.details');   


    // مشاهده پروفایل
    // Route::get('{user_id}/admin/users/profile', [AdminController::class, 'profile'])->name('admin.users.profile');


    // نمایش داشبورد نویسنده
    // Route::get('writer/dashboard', [WriterController::class, 'dashboard'])->name('writer.dashboard');

// });
