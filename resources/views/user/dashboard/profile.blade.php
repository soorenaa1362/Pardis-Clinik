@extends('user.dashboard.master')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4"> 
                <h5 class="font-weight-bold">پروفایل کاربر</h5>
            </div>
            <hr>
            
            <form action="{{ route('user.profile.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">نام کاربری</label>
                        <input class="form-control" id="username" name="username" 
                        value="{{ $authUser->username ?? '' }}" type="text" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">ایمیل</label>
                        <input class="form-control" id="email" name="email" 
                        value="{{ $authUser->email ?? '' }}" type="text" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fname">نام</label>
                        <input class="form-control" id="fname" name="fname" 
                        type="text" value="{{ $profile->fname ?? '' }}">
                    </div>
                    <div class="form-group col-md-6">
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
                        <label for="mobile">شماره موبایل</label>
                        <input class="form-control" id="mobile" name="mobile" 
                        type="text" value="{{ $profile->mobile ?? '' }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="age">سن</label>
                        <input class="form-control" id="age" name="age" 
                        type="text" value="{{ $profile->age ?? '' }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="married">وضعیت تاهل</label>
                        <select class="form-control" id="married" name="married">
                            <option value="1" selected> متاهل </option>
                            <option value="0"> مجرد </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mainId">شخص مورد نظر</label>
                        <select class="form-control" id="mainId" name="mainId">
                            <!-- <option value="0" selected> --- </option> -->
                            <option value="1" selected> خودم </option>
                            <option value="2"> همسر </option>
                            <option value="3"> فرزند </option>
                            <option value="4"> پدر </option>
                            <option value="5"> مادر </option>
                            <option value="6"> خواهر </option>
                            <option value="7"> برادر </option>
                            <option value="8"> غیره </option>
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
