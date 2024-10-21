<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">

    <title>Selamat Datang</title>
</head>

<body>

    @include('template.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-flex bg-login-image">
                                <img src="{{ asset('img/favicon.jpg') }}" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 mt-4 fs-2">LOGIN</h1>
                                    </div>
                                    <form action="{{ route('postlog') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_token" value="3kZXorcr2c8pag5Myzn9TkGBZAaSVjbES2qB4QCf">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user mt-3" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-user w-100 mt-3">
                                                Login
                                            </button>
                                            @if (Session::has('status'))
                                            <div class="text-danger text-center">{{ Session::get('status') }}</div>
                                            @endif
                                        </div>
                                        <hr>
                                    </form>
                                    <a href="{{ route('reg') }}" class="btn btn-primary mt-3 d-block">Register</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
