@extends('user.dashboard.master')

@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="d-flex justify-content-between mb-4">
            <h5 class="font-weight-bold">لیست بیماران ثبت شده توسط : {{ $profile->fname }} {{ $profile->lname }}</h5>                
        </div>
        <div>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>                            
                        <th>نام خانوادگی</th>
                        <th>موبایل</th>
                        <th>کد ملی</th>
                        <th>سن</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $key => $patient)
                        <tr>
                            <th>{{ $key+1 }}</th>                                
                            <th>{{ $patient->fname }}</th>
                            <th>{{ $patient->lname }}</th>
                            <th>{{ $patient->mobile }}</th>
                            <th>{{ $patient->nationalCode }}</th>
                            <th>{{ $patient->age }}</th>                            
                            <th>
                                <a class="btn btn-sm btn-outline-success" 
                                href="">
                                    جزئیات بیشتر
                                </a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection