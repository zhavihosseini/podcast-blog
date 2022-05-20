{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
<html>
<head>
    <meta charset="utf-8">
    <title>ژاوی - ورود</title>
    <meta content="ژاوی - صفحه ی ورود کاربر" name="description">
    <meta content="ژاوی , ورود , صفحه ی ورود ژاوی" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/icon/site.webmanifest')}}">
    <link href="{{asset('assets/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link href="{{asset('css/sort.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
@include('header')
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h5 class="text-center" id="h5g"><img src="{{asset('assets/icon/lls.png')}}" style="width: 100px;" height="100px"></h5>
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center" id="cardt1">ورود به حساب کاربری</h5>
                    <div class="alert-danger">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @if (session('error'))
                            <div class="alert alert-danger" style="direction: rtl;border-radius: 0px;background-color: red;color: white">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <form class="form-signin" method="POST" action="{{ route('login')}}">
                        @csrf
                        <div class="form-label-group" id="drf">
                            <input placeholder="ایمیل خود را وارد کنید" id="email" type="text" class="form-control" name="email" :value="old('email')" required autofocus>
                            <label  for="email" :value="__('Email')" id="email">ایمیل خود را وارد کنید</label>
                        </div>

                        <div class="form-label-group" id="drf">
                            <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور" required
                                   required autocomplete="current-password">
                            <label for="password" id="usernamelabel" :value="__('Password')">رمز عبور</label>
                        </div>
                        <div class="row">
                            {{--<div id="drf">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        فراموشی رمز عبور
                                    </a>
                                @endif
                            </div>--}}
                            <div class="custom-control custom-checkbox mb-3" id="mb31">
                                <input id="remember_me" type="checkbox" name="remember">
                                <span class="ml-2 text-sm text-gray-600" style="padding: 5px">من را به خاطر بسپار</span>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-block" type="submit" id="subid" style="font-weight: normal">ورود</button>
                        <br><br>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"><p style="text-align: center;font-size: 14px" id="uyti">فراموشی رمز عبور</p></a>
                        @endif
                       <a href="{{route('register')}}"><p style="text-align: center;font-size: 14px" id="uyti">حساب کاربری ندارید ؟؟ ساخت حساب کاربری</p></a>
{{--
                        <a href="{{ url('auth/google') }}" class="btn btn-lg btn-google btn-block text-uppercase" type="submit" id="subm"><i class="fab fa-google-plus-g"></i>{{__('login.goog')}}</a>
                        <br>
--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
