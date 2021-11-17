<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ورود به سیستم</title>
</head>
<body>
    <div class="container">
    <section class="mx-auto my-5" style="max-width: 23rem;">
        
        <div class="card testimonial-card mt-2 mb-3">
            <div class="card-up aqua-gradient"></div>
            <div class="avatar mx-auto white">
                <!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle img-fluid"            
                alt="woman avatar"> -->
                <img src="{{ asset('img/clinik avatar.png') }}" class="rounded-circle img-fluid"            
                alt="woman avatar">
            </div>
            <div class="card-body text-center">
                <form action="{{ route('auth.login') }}" method="post" class="form-group">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf

                    <label for="email">ایمیل</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email ?? '' }}">
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    <br>

                    <label for="password">رمز عبور</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    <br>

                    <input class="btn btn-success" type="submit" name="register" id="register" value="ورود">                    
                    <br> <br>
                    <a href="{{ route('auth.register.form') }}">ثبت نام نکرده ام</a>                    
                </form> 
            </div>
        </div>
        
    </section>
    </div>

    <?php if(session()->has('LoggedUser') || session('userId')) { ?>
        <script>
            // Swal.fire(
            //     'درخواست انجام شد!',
            //     'ثبت نام کاربر موفقیت آمیز بود!',
            //     'success'
            // )
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'ثبت نام با موفقیت انجام شد!'
            })
        </script>
    <?php } ?> 

</body>
</html>