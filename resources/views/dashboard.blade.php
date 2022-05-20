<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>ژاوی هاب - داشبورد</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('new/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<style>
    @font-face {
        font-family: Yekan;
        src: url('public/webfonts/Yekan.eot');
        src: url('public/webfonts/Yekan.eot?#iefix') format('public/webfonts/Yekan-opentype'),
        url('/webfonts/Yekan.woff') format('woff'),
        url('public/webfonts/Yekan.ttf') format('truetype');
        font-style: normal;
    }
    @font-face {
        font-family: BNazanin;
        src: url('public/webfonts/BNazanin.eot');
        src: url('public/webfonts/BNazanin.eot?#iefix') format('public/webfonts/BNazanin-opentype'),
        url('/webfonts/BNazanin.woff') format('woff'),
        url('public/webfonts/BNazanin.ttf') format('truetype');
        font-style: normal;
    }
</style>
<body style="font-family: Yekan">
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><h1 style="font-family: Yekan">ژاوی هاب</h1></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            شکیبا باشید ...
        </div>
    </div>
</div>

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="جست و جو کنید" style="font-family: Yekan;direction: rtl;padding-right: 10px;">
                    {{--<div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="direction: rtl">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#" style="direction: rtl;text-align: right">
                                    <img src="vendors/images/img.jpg" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" style="direction: rtl">
						<span class="user-icon" style="box-shadow: none;border: 1px solid lightgrey;margin-left: 5px;">
                               @php
                                   $profile = \Illuminate\Support\Facades\Auth::user()->profile ?? null;
       $pic = explode('public',$profile)[1] ?? null;
                               @endphp
							<img @if(!empty(\Illuminate\Support\Facades\Auth::user()->profile)) src="{{$pic}}" @else src="{{asset('default.png')}}" @endif alt="">
						</span>
                    <span class="user-name" style="padding: 5px;font-family: Yekan;font-weight: bold">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="direction: rtl;text-align: right">
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> پروفایل</a>
                    {{--<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>--}}
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> قوانین و مقررات</a>
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="dw dw-logout"></i> خروج از حساب کاربری</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sidebar')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30" style="direction: rtl">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{asset('new/vendors/images/banner-img.png')}}" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-15 weight-500 mb-10 text-capitalize" style="text-align: right;font-family: Yekan;font-weight: bold;">
                        {{\Illuminate\Support\Facades\Auth::user()->name}} خوش آمدید
                    </h4>
                    <p class="font-18 max-width-600" style="direction: rtl;text-align: right">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8" id="changeidt">
            <div class="card" style="border: 1px solid lightgrey">
                <div class="profile-card text-center">

                    <img class="img-responsive" src="{{asset('what.jpg')}}" width="100%">
                    <div class="profile-info">
                        <br>
                        @php
                            $profile = \Illuminate\Support\Facades\Auth::user()->profile ?? null;
$pic = explode('public',$profile)[1] ?? null;
                        @endphp
                        <img class="profile-pic" @if(!empty(\Illuminate\Support\Facades\Auth::user()->profile)) src="{{$pic}}" @else src="{{asset('default.png')}}" @endif>
                        <div class="row">
                            <h2 class="hvr-underline-from-center" style="text-align: right;float: right">{{\Illuminate\Support\Facades\Auth::user()->name}}<a href="{{route('usereditprofile')}}" class="btn" id="brntgr">ویرایش پروفایل</a><span>{{\Illuminate\Support\Facades\Auth::user()->semat ?? null}}</span></h2>
                        </div>
                        <div style="" id="selecttosave" onclick="myFunction()">@if(!empty(\Illuminate\Support\Facades\Auth::user()->description)) {{\Illuminate\Support\Facades\Auth::user()->description ?? null}} @else نوشته ی کوتاه ، مختصر و مفید از خودتون بنویسید @endif</div>
                        <br>
                        <div class="container" id="myDIV" style="display: none">
                            <form method="post" action="<?php echo route('saveduserdescription')?>">
                                @csrf
                                <textarea placeholder="بنویسید ..." id="textry" name="description" required>{{\Illuminate\Support\Facades\Auth::user()->description ?? null}}</textarea>
                                <button>ثبت</button>
                            </form>
                        </div>
                    </div>
                    @if(!empty(\Illuminate\Support\Facades\Auth::user()->instagram))
                        <div class="row text-center" id="socialnor">
                            <a target="_blank" href="https://www.instagram.com/{{\Illuminate\Support\Facades\Auth::user()->instagram}}/"><i class="fa fa-instagram fa-2x" style="padding: 8px;background-color: #eeebf0;border-radius: 50%"></i>
                            </a>
                            <br>
                            <p>{{\Illuminate\Support\Facades\Auth::user()->instagram}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card" style="direction: rtl;font-family: Yekan;overflow-y: auto">
            <h2 class="h4" style="font-family: Yekan;text-align: right;padding: 8px;">کاربران وبسایت</h2>
            <table class="table nowrap">
                <thead>
                <tr>
                    <th class="table-plus datatable-nosort" style="font-size: 10px">نام و نام خانوادگی</th>
                    <th style="font-size: 12px">پروفایل</th>
                    <th style="font-size: 12px">رول</th>
                    <th style="font-size: 12px">ایمیل</th>
                    <th style="font-size: 12px">نام کاربری</th>
                    <th style="font-size: 12px">تایید ایمیل
                    <th style="font-size: 12px">سمت</th>
                    <th style="font-size: 12px">توضیحات</th>
                    <th style="font-size: 12px">وضعیت</th>
                    <th style="font-size: 12px">ساخته شده</th>
                    <th style="font-size: 12px">وی آی پی</th>
                    <th class="datatable-nosort" style="font-size: 12px;">بیشتر</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="table-plus">
                        <img src="vendors/images/product-1.jpg" width="70" height="70" alt="">
                    </td>
                    <td>
                        <h5 class="font-16">Shirt</h5>
                        by John Doe
                    </td>
                    <td>Black</td>
                    <td>M</td>
                    <td>$1000</td>
                    <td>1</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="direction: rtl;text-align: right">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> نمایش</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> ویرایش</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> حذف</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-plus">
                        <img src="vendors/images/product-4.jpg" width="70" height="70" alt="">
                    </td>
                    <td>
                        <h5 class="font-16">Long Dress</h5>
                        by Renee I. Hansen
                    </td>
                    <td>Gray</td>
                    <td>L</td>
                    <td>$1000</td>
                    <td>1</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="table-plus">
                        <img src="vendors/images/product-5.jpg" width="70" height="70" alt="">
                    </td>
                    <td>
                        <h5 class="font-16">Blazer</h5>
                        by Vicki M. Coleman
                    </td>
                    <td>Blue</td>
                    <td>M</td>
                    <td>$1000</td>
                    <td>1</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="footer container-fluid pd-20 card-box" style="padding: 10px;border-radius: 0px;text-align: center">
            تمام حقوق برای مجموعه ژاوی هاب محفوض میباشد
        </div>
    </div>
</div>
<!-- js -->
<script src="{{asset('new/vendors/scripts/core.js')}}"></script>
<script src="{{asset('new/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('new/vendors/scripts/process.js')}}"></script>
<script src="{{asset('new/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('new/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('new/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('new/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('new/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('new/vendors/scripts/dashboard.js')}}"></script>
</body>
</html>
