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
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h4>داشبورد کاربر</h4>
                <table class="table table-hover">
                    <thead>
                        <th>نام کاربری</th>
                        <th>ایمیل</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $user->username }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                <a href="{{ route('auth.logout') }}">خروج</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    
                    <div class="col-md-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            پروفایل
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">پروفایل</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user.profile') }}" method="post" class="form-group" id="profileForm">
                                            @csrf
                                            <div>
                                                <label for="fname">نام</label>
                                                <input type="text" class="form-control" name="fname" id="fname" 
                                                    value="{{ $profile->fname ?? '' }}">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="lname">نام خانوادگی</label>
                                                <input type="text" class="form-control" name="lname" id="lname"
                                                    value="{{ $profile->lname ?? '' }}">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="age">سن</label>
                                                <input type="text" class="form-control" name="age" id="age"
                                                    value="{{ $profile->age ?? '' }}">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="mobile">موبایل</label>
                                                <input type="text" class="form-control" name="mobile" id="mobile"
                                                    value="{{ $profile->mobile ?? '' }}">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="nationalCode">کد ملی</label>
                                                <input type="text" class="form-control" name="nationalCode" id="nationalCode"
                                                    value="{{ $profile->nationalCode ?? '' }}">
                                                <br>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="married">وضعیت تاهل</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="married" 
                                                            id="married" value="0">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            مجرد
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="married" 
                                                            id="married" value="1" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            متاهل
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="mainId">شخص</label>
                                                    <select class="form-select" name="mainId" aria-label="Default select example">
                                                        <option value="1">خودم</option>
                                                        <option value="2">همسر</option>
                                                        <option value="3">فرزند</option>
                                                        <option value="4">پدر</option>
                                                        <option value="5">مادر</option>
                                                        <option value="6">برادر</option>
                                                        <option value="7">خواهر</option>
                                                        <option value="8">غیره</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                                <button type="submit" class="btn btn-primary">ذخیره</button>
                                            </div>
                                        </form>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div> <!-- col-md-3 -->

                </div> <!-- row -->

            </div> <!-- col-md-6 -->  
            
            <div class="col-md-6 py-5 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>پروفایل</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label for="username">نام کاربری : </label>
                                    <span>{{ $user->username }}</span>                            
                                </div>
                                <br>
                                <div>
                                    <label for="email">ایمیل : </label>
                                    <span>{{ $user->email }}</span>                            
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="access">نقش : </label>
                                    <span>
                                        @if ($user->access == 1)
                                            کاربر عادی
                                        @endif
                                        @if ($user->access == 2)
                                            نویسنده
                                        @endif
                                    </span>
                                </div>
                                <br>
                                <div>
                                    <label for="email">زمان ثبت نام : </label>
                                    <span>{{ $date }}</span>                            
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fname">نام : </label>
                                <span>{{ $profile->fname ?? '' }}</span>                                  
                            </div>
                            <div class="col-md-6">
                                <label for="lname">نام خانوادگی : </label>
                                <span>{{ $profile->lname ?? '' }}</span>                                  
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="lname">سن : </label>
                                <span>{{ $profile->age ?? '' }} سال</span> 
                            </div>
                            <div class="col-md-6">
                                <label for="mobile">موبایل : </label>
                                <span>{{ $profile->mobile ?? '' }}</span>  
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nationalCode">کدملی : </label>
                                <span>{{ $profile->nationalCode ?? '' }}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="married">وضعیت تاهل : </label>
                                @if ($profile != null)
                                    <span>
                                        {{ $profile->getMarriedTitle() }}
                                    </span>
                                @else
                                    <span>
                                        
                                    </span>
                                @endif  
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mainId">شخص : </label>
                                @if ($profile != null)
                                    <span>
                                        {{ $profile->getMainIdTitle() }}
                                    </span>
                                @else
                                    <span>
                                        
                                    </span>
                                @endif  
                            </div>
                        </div>
                        <br>
                    </div> <!-- card-body -->
                </div> <!-- card -->                
            </div> <!-- col-md-6 -->
            
        </div>
    </div>

    @if ($profile == null)
        <script>
            Swal.fire(
                'توجه !',
                'لطفا پروفایل خود را تکمیل کنید!',
                'success'
            )
            // const Toast = Swal.mixin({
            //     toast: true,
            //     position: 'top-end',
            //     showConfirmButton: false,
            //     timer: 3000,
            //     timerProgressBar: true,
            //     didOpen: (toast) => {
            //         toast.addEventListener('mouseenter', Swal.stopTimer)
            //         toast.addEventListener('mouseleave', Swal.resumeTimer)
            //     }
            // })
            // Toast.fire({
            //     icon: 'success',
            //     title: 'پروفایل با موفقیت تکمیل شد!'
            // })
        </script>
    @endif

</body>
</html>