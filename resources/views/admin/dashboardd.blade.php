<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ورود</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <h4>داشبورد ادمین</h4>
                <table class="table table-hover">
                    <thead>
                        <th>نام</th>
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

                <ul>
                    <li>
                        <a href="{{ route('admin.users.list') }}">لیست کاربران</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</body>
</html>