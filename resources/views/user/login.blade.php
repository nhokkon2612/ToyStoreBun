<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link href="{{asset('Template-user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('Template-user/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('public/Template-user/')}}js/html5shiv.js"></script>
    <script src="{{asset('public/Template-user/')}}js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
@include('user.layout.nav')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng Nhập Tài Khoản Có Sẵn</h2>
                    <form action="{{route('user.login')}}" method="post">
                        @csrf
                        <input type="email" placeholder="Email" name="email"/>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" placeholder="Mật khẩu" name="password"/>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <span>
								<input type="checkbox" class="checkbox">
								Duy trì đăng nhập
							</span>
                        <button type="submit" class="btn btn-default">Đăng Nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or" {{--style="background: #1cc88a"--}}>&</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Đăng Ký Thành Viên Mới !</h2>
                    <form action="{{route('user.register')}}" method="post">
                        @csrf
                        <input type="text" placeholder="Tên người dùng" name="name" value="{{old('name')}}"/>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input type="email" placeholder="Email" name="email" value="{{old('email')}}" />
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input type="password" placeholder="Mật khẩu" name="password" value="{{old('password')}}" />
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input type="password" placeholder="Xác thực mật khẩu" name="password_confirmation" value="{{old('password_confirmation')}}" />
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-default">Đăng Ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

@include('user.layout.footer')
</body>
</html>
