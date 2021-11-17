@extends('user.dashboard.master')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4"> 
                <h5 class="font-weight-bold">پروفایل بیمار</h5>
            </div>
            <hr>
            
            <form action="{{ route('user.patient.store') }}" method="post">
                @csrf
                <div class="form-row">        
                    <div class="form-group col-md-4">
                        <label for="fname">نام</label>
                        <input class="form-control" id="fname" name="fname" 
                        type="text" value="{{ $profile->fname ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lname">نام خانوادگی</label>
                        <input class="form-control" id="lname" name="lname" 
                        type="text" value="{{ $profile->lname ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nationalCode">کد ملی</label>
                        <input class="form-control" id="nationalCode" name="nationalCode" 
                        type="text" value="{{ $profile->nationalCode ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mobile">موبایل</label>
                        <input class="form-control" id="mobile" name="mobile" 
                        type="text" value="{{ $profile->mobile ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="age">سن</label>
                        <input class="form-control" id="age" name="age" 
                        type="text" value="{{ $profile->age ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sex">جنسیت</label>
                        <select class="form-control" id="sex" name="sex">
                            <option value="0" selected> زن </option>
                            <option value="1"> مرد </option>
                        </select>
                    </div>                  
                </div>
                <button class="btn btn-outline-primary mt-5" id="submit" type="submit">ثبت</button>                
                <a href="" 
                class="btn btn-dark mt-5 mr-3">
                    بازگشت
                </a>
            </form>
        </div>
    </div>  
      
@endsection
