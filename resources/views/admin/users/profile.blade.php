<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>داشبورد ادمین</title>
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-success mb-2">داشبورد</a>
                <a href="{{ route('admin.users.list') }}" class="btn btn-info mb-2">لیست کاربران</a>
                <div class="card">
                    <div class="card-header p-3">
                        <h6>پروفایل : {{ $userInfo->username }}</h6>
                        <h6>نقش کاربری : <a href="" class="btn btn-sm btn-warning">{{ $userInfo->getAccessTitle() }}</a></h6>
                    </div>
                    <div class="card-body">
                        <div class="row px-3">
                            <div class="col-md-5">
                                <label for="fname" class="mb-1">نام کاربری :</label>
                                <input type="text" class="form-control" value="{{ $userInfo->username ?? '' }}" disabled>
                            </div>
                            <div class="col-md-7">
                                <label for="fname" class="mb-1">ایمیل :</label>
                                <input type="text" class="form-control" value="{{ $userInfo->email ?? '' }}" disabled>
                            </div>                                                                                    
                        </div>
                        <br>
                        <div class="row px-3">
                            <div class="col-md-6">
                                <label for="fname" class="mb-1">نام :</label>
                                <input type="text" class="form-control" value="{{ $profile->fname ?? '' }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="fname" class="mb-1">نام خانوادگی :</label>
                                <input type="text" class="form-control" value="{{ $profile->lname ?? '' }}" disabled>
                            </div>                                                                                    
                        </div>
                        <br>
                        <div class="row px-3">
                            <div class="col-md-7">
                                <label for="fname" class="mb-1">کد ملی :</label>
                                <input type="text" class="form-control" value="{{ $profile->nationalCode ?? '' }}" disabled>
                            </div>
                            <div class="col-md-5">
                                <label for="fname" class="mb-1">موبایل :</label>
                                <input type="text" class="form-control" value="{{ $profile->mobile ?? '' }}" disabled>
                            </div>
                        </div>
                    </div> <!-- card body -->
                </div> <!-- card -->
                
            </div> <!-- col-md-12 -->  
            <div class="col-md-1"></div>          
        </div> <!-- row -->
    </div> <!-- container -->

</body>
</html>