@extends('admin.dashboard.master')

@section('content')

<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="d-flex justify-content-between mb-4">
            <h5 class="font-weight-bold">لیست کاربران</h5>                
        </div>
        <div>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام کاربری</th>
                        <th>نام</th>                            
                        <th>نام خانوادگی</th>
                        <th>موبایل</th>
                        <th>کد ملی</th>
                        <th>سن</th>
                        <th>تاهل</th>
                        <th>شخص</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $key => $profile)
                        <tr>
                            <th>{{ $key+1 }}</th>                                
                            <th>{{ $profile->User->username }}</th>
                            <th>{{ $profile->fname }}</th>
                            <th>{{ $profile->lname }}</th>
                            <th>{{ $profile->mobile }}</th>
                            <th>{{ $profile->nationalCode }}</th>
                            <th>{{ $profile->age }}</th>
                            <th>{{ $profile->getMarriedTitle() }}</th>
                            <th>{{ $profile->getMainIdTitle() }}</th>                            
                            <th>
                                <a class="btn btn-sm btn-outline-success" 
                                href="{{ route('admin.user.details', [$profile->id]) }}">
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