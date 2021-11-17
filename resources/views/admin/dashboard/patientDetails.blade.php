@extends('admin.dashboard.master')

@section('content')

    <div class="row">
        <!-- پروفایل -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4"> 
                <h5 class="font-weight-bold">
                    ثبت شده توسط : {{ $patient->Profile->fname }} {{ $patient->Profile->lname }}
                </h5>
            </div>
            <hr>
            
            <form action="" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fname">نام</label>
                        <input class="form-control" id="fname" name="fname" 
                        type="text" value="{{ $patient->fname ?? '' }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lname">نام خانوادگی</label>
                        <input class="form-control" id="lname" name="lname" 
                        type="text" value="{{ $patient->lname ?? '' }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nationalCode">کد ملی</label>
                        <input class="form-control" id="nationalCode" name="nationalCode" 
                        type="text" value="{{ $patient->nationalCode ?? '' }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mobile">شماره موبایل</label>
                        <input class="form-control" id="mobile" name="mobile" 
                        type="text" value="{{ $patient->mobile ?? '' }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="age">سن</label>
                        <input class="form-control" id="age" name="age" 
                        type="text" value="{{ $patient->age ?? '' }}" disabled>
                    </div>
                </div>
                <a href="{{ route('admin.patients.list') }}" 
                class="btn btn-dark mt-5 mr-3">
                    بازگشت
                </a>
            </form>
        </div>
    </div> 
      
@endsection