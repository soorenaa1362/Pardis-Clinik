<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ورود</title>
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4">
                <button type="button" class="btn btn-primary">
                    پروفایل
                </button>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>پروفایل</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="username">نام کاربری : </label>
                            <span>{{ $user->username ?? '' }}</span>                            
                        </div>
                        <br>
                        <div>
                            <label for="email">ایمیل : </label>
                            <span>{{ $user->email ?? '' }}</span>                            
                        </div>
                        <hr>
                        <div>
                            <label for="fname">نام : </label>
                            <span>{{ $profile->fname ?? '' }}</span>                            
                        </div>
                        <br>
                        <div>
                            <label for="lname">نام خانوادگی: </label>
                            <span>{{ $profile->lname ?? '' }}</span>                             
                        </div>
                        <br>
                        <div>
                            <label for="mobile">موبایل : </label>
                            <span>{{ $profile->mobile ?? '' }}</span>                                                   
                        </div>
                        <br>
                        <div>
                            <label for="nationalCode">کدملی : </label>
                            <span>{{ $profile->nationalCode ?? '' }}</span>                                                                      
                        </div>
                        <br>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col-md-8 -->
        </div>
    </div> <!-- container -->

</body>
</html>