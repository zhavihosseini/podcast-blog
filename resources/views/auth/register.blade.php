{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
<html>
<head>
    <meta charset="utf-8">
    <title>ژاوی - ثبت نام</title>
    <meta content="ژاوی - صفحه ی ثبت نام" name="description">
    <meta content="ژاوی , ثبت نام , صفحه ی ثبت نام ژاوی" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/icon/site.webmanifest')}}">
    <link href="{{asset('assets/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
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
                    <h5 class="card-title text-center" id="cardt1">ثبت نام</h5>
                    <div class="alert-danger">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    </div>
                    <form class="form-signin" method="POST" action="{{ route('register')}}">
                        @csrf
                        <div class="form-label-group" id="drf">
                            <input placeholder="نام کاربری خود را انتخاب کنید" id="username" type="text" class="form-control" name="username" required autofocus>
                            <label  for="useranme" :value="__('username')" id="useranme">نام کاربری خود را انتخاب کنید</label>
                        </div>
                        <div class="form-label-group" id="drf">
                            <input placeholder="نام و نام خانوادگی خود را وارد کنید" id="name" type="text" class="form-control" name="name" required autofocus>
                            <label  for="name" :value="__('Name')" id="name">نام و نام خانوادگی خود را وارد کنید</label>
                        </div>
                        <div class="form-label-group" id="drf">
                            <input placeholder="ایمیل خود را وارد کنید" class="form-control" type="email" name="email" id="email" :value="old('email')" required  autofocus>
                            <label for="email" :value="__('Email')" id="email">ایمیل خود را وارد کنید</label>
                        </div>
                        <div class="form-label-group" id="drf">
                            <input id="password" class="form-control"
                                   type="password"
                                   name="password"
                                   autocomplete="new-password" placeholder="رمز عبور" required>
                            <label for="password" :value="__('Password')" id="password">رمز عبور</label>
                        </div>
                        <div class="form-label-group" id="drf">
                            <input id="password_confirmation"
                                   type="password"
                                   name="password_confirmation" class="form-control" placeholder="تایید رمز عبور" required>
                            <label for="password_confirmation" :value="__('Confirm Password')" id="password_confirmation">تایید رمز عبور</label>
                        </div>
                        <button class="btn btn-lg btn-block text-uppercase" type="submit" id="subid" style="font-weight: normal;border-radius: 5px">ثبت نام</button>
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
</body>
</html>
