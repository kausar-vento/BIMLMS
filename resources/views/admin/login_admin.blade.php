<!doctype html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet"
        href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/loginAdmin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/loginAdmin/css/style.css')}}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SELAMAT DATANG ADMIN</h2>
                </div>
            </div>

            <div class="col-md-6 text-center mb-5">
                @if (session()->has('gagalLogin'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagalLogin') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Silahkan Mengisi Email dan Password</h3>
                        <form action="{{route('admin.loginAdmin')}}" class="login-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email"
                                    class="form-control rounded-left @error('email') is-invalid @enderror"
                                    placeholder="Username" required value="{{old('email')}}" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password"
                                    class="form-control rounded-left @error('password') is-invalid @enderror"
                                    placeholder="Password" required value="{{old('password')}}" autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get
                                    Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('admin/loginAdmin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/loginAdmin/js/popper.js')}}"></script>
    <script src="{{asset('admin/loginAdmin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/loginAdmin/js/main.js')}}"></script>

</body>

</html>
