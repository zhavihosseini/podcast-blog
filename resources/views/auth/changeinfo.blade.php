<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>تغییر حساب کاربری</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/demo_2/style.css" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="../assets/images/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false" style="float: right">
                                <div class="nav-profile-img">
                                    @php
                                        $user = \Illuminate\Support\Facades\Auth::user()->profile;
if ($user == null){
$prof = asset('prof.jpg');
}else{
                                        $prof = explode('public',$user)[1] ?? null;
                                        }
                                    @endphp
                                    <img src="{{asset($prof)}}" alt="image" width="100%" />
                                </div>
                                <div class="nav-profile-text">
                                    <p class="text-black font-weight-semibold m-0"> {{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                                    <span class="font-13 online-color">آنلاین <i class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                {{-- <div class="dropdown-divider"></div>--}}
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> خروج از حساب کاربری </a>
                                <a class="dropdown-item" href="{{route('changeinformation')}}">
                                    <i class="mdi mdi-account-edit mr-2 text-primary"></i> تغییر حساب کاربری </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    {{--<li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">
                            <i class="mdi mdi-content-duplicate menu-icon"></i>
                            <span class="menu-title">دسته بندی ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">
                            <i class="mdi mdi-fuse menu-icon"></i>
                            <span class="menu-title">درخواست ثبت کانال</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                            <i class="mdi mdi-content-save-outline menu-icon"></i>
                            <span class="menu-title">مطالب</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <i class="mdi mdi-podcast menu-icon"></i>
                            <span class="menu-title">پادکست ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.bootstrapdash.com/demo/plus-free/documentation/documentation.html" class="nav-link" target="_blank">
                            <i class="mdi mdi-phone-classic menu-icon"></i>
                            <span class="menu-title">تماس با ما</span></a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link d-flex">
                            <button class="btn btn-sm bg-danger text-white"> Trailing </button>
                            <a class="text-white" href="{{route('index')}}" style="margin-left: 12px"><i class="mdi mdi-home-circle"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="row">
                    <div class="col-md-12 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->has('file'))
                                    <div class="alert alert-danger" style="border-radius: 0px;border: 0px;color: white;background-color: #fd6f7b">
                                        Error : {{ $errors->first('file') }}
                                    </div>
                                @endif
                                @if (session('complete'))
                                    <div class="alert alert-danger" style="border-radius: 0px;border: 0px;color: #353435;background-color: #a4fd87;text-align: center">
                                        {{session('complete')}}
                                    </div>
                                @endif
                                <div class="card-title" style="text-align: right">
                                    اطلاعات حساب شما
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 8px">
                                        <div class="row">
                                            <div class="col-md-6" style="margin: 0px auto">
                                                @php
                                                    $user = \Illuminate\Support\Facades\Auth::user()->profile;
        if ($user == null){
            $prof = asset('prof.jpg');
        }else{
                                                    $prof = explode('public',$user)[1] ?? null;
                                                    }
                                                @endphp
                                                <img src="{{$prof}}" width="100%">
                                            </div>
                                        </div>
                                        <br>
                                        <form method="post" action="<?php echo route('savepictures')?>" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12" style="text-align: center">
                                                <input type="file" name="file" style="font-size: 12px" required>
                                                    <input type="submit" class="btn btn-success" name="up" style="border-radius: 0px" value="ذخیره عکس پروفایل">
                                            </div>
                                        </form>
                                        <form method="post" action="<?php echo route('saveinfouser')?>">
                                            @csrf
                                    </div>
                                    <div class="col-md-6" style="direction: rtl;margin-top: 10px">
                                        <div class="form-group" style="text-align: right">
                                            <label for="name">نام و نام خانوادگی : </label>
                                            <input type="text" class="form-control" title="نام و نام خانوادگی شما" id="name" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="نام و نام خانوادگی خود را وارد کنید" maxlength="100" required>
                                        </div>
                                        <div class="form-group" style="text-align: right">
                                            <label for="email">ایمیل : </label>
                                            <input type="email" class="form-control" title="ایمیل شما" name="email" id="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="ایمیل خود را وارد کنید" disabled>
                                        </div>
                                        <br>
                                        <div style="text-align: right">
                                            <button type="submit" class="btn btn-primary" style="border-radius: 0px">ثبت اطلاعات</button>
                                        </div>
                                        </form>
                                        <br>
                                        @if(!empty($user))
                                            <div style="text-align: right">
                                                <form method="post" action="<?php echo route('deleteprofilephoto')?>">
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger" name="up" style="border-radius: 0px" value="حذف عکس پروفایل">
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
