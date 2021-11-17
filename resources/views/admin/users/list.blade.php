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
            <div class="col-md-12">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-success mb-2">داشبورد</a>
                <div class="card">
                    <div class="card-header">
                        <h5>لیست کاربران</h5>
                    </div>
                    <div class="card-body">
                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">ردیف</th>
                                    <th class="text-center">نام کاربری</th>
                                    <th class="text-center">ایمیل</th>                                   
                                    <th class="text-center">نقش کاربری</th>                                   
                                    <th class="text-center">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach($users as $key => $user)
                                    <tr>
                                        <th class="text-center"> {{ $key+1 }} </th>
                                        <td class="text-center"> {{ $user->username }} </td>
                                        <th class="text-center"> {{ $user->email }} </td>
                                        <th class="text-center"> 
                                            @if ($user->access == 1)
                                                کاربر عادی
                                            @endif
                                            @if ($user->access == 2)
                                                نویسنده
                                            @endif
                                        </td>
                                        <th class="text-center">
                                            <a href="{{ route('admin.users.profile', [$user->id]) }}" 
                                                class="btn btn-sm btn-success" id="profile">مشاهده پروفایل</a>
                                        </td>
                                    </tr>
                                @endforeach                                                                    
                            </tbody>
                        </table>

                    </div> <!-- card body -->
                </div> <!-- card -->
                
            </div> <!-- col-md-12 -->            
        </div> <!-- row -->
    </div> <!-- container -->

</body>
</html>