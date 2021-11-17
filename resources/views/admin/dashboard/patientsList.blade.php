@extends('admin.dashboard.master')

@section('content')

<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="d-flex justify-content-between mb-4">
            <h5 class="font-weight-bold">لیست بیماران</h5>                
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
                        <th>ثبت توسط</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $key => $patient)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $patient->fname }}</td>
                            <td>{{ $patient->lname }}</td>
                            <td>{{ $patient->mobile }}</td>
                            <td>{{ $patient->nationalCode }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->Profile->fname }} {{ $patient->Profile->lname }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-success" 
                                    href="{{ route('admin.patients.details', [$patient->id]) }}">
                                    جزئیات بیشتر
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection