<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>صفحه اصلی</title>
</head>
<body>
<div class="container">
    <br>
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-3"></div>
        <div class="col-md-6 card p-3">
            <h5 class="text-center">ثبت نام و ورود به سیستم</h5> <hr>
            <a href="{{ route('auth.login.form') }}" class="btn btn-success m-3 p-2">ورود</a>
            <a href="{{ route('auth.register.form') }}" class="btn btn-primary m-3 p-2">ثبت نام</a>
        </div>
        <div class="col-md-3"></div>
    </div>        
</div>
</body>
</html>