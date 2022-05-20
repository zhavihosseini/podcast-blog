<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>ژاوی | داشبورد</title>
    <meta content="ژاوی - داشبورد کاربر گرامی برای ورود به داشبورد باید ثبت نام کنید و یا وارد شوید" name="description">
    <meta content="ژاوی , داشبورد , حساب کاربری" name="keywords">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/icon/site.webmanifest')}}">
    <link href="{{asset('assets/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/sort.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
</head>
<body>
@include('header')
<br>
@if(Route::has('login'))
    @auth
    @else
        <section class="container-fluid d-flex align-items-center">
            <div class="container-fluid">
                <div class="row" id="contents">
                    <div class="col-md-6" style="font-size: 28px;color: white;font-weight: bold;padding: 20px;line-height: 50px">
                        به خانواده 500,000 هزار نفری ما بپیوندید ما میبینیم ، میخونیم ، یاد میگیریم و حتما پیشرفت میکنیم .
                        <br>
                        <small style="font-size: 15px;font-weight: normal">اینجا کمکت میکنیم مثل ما پیشرفت کنی و نتایجت رو به اشتراک بزاری &#128293;</small>
                        <br>
                        <button id="cardbutton">ثبت نام</button>
                    </div>
                    <div class="col-md-6" style="height: 80px;direction: ltr">
                        <div class="card-body">
                            <div class="row ullist">
                                <div class="row lilist" style="margin: 0px;padding: 0px">
                                    <div class="col-md-9 ppod">
                                        <span>چگونگی رهایی از استرس روزانه !؟</span>
                                        <br>
                                        <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                        <hr style="margin-bottom: 2px">
                                        <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                    </div>
                                    <div class="col-md-3 ppod" style="padding: 5px" id="ppof">
                                        <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                    </div>
                                </div>
                                <div class="row lilist" style="margin: 0px;padding: 0px">
                                    <div class="col-md-9 ppod">
                                        <span>چگونگی رهایی از استرس روزانه !؟</span>
                                        <br>
                                        <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                        <hr style="margin-bottom: 2px">
                                        <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                    </div>
                                    <div class="col-md-3 ppod" style="padding: 5px" id="ppof">
                                        <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                    </div>
                                </div>
                                <div class="row lilist" style="margin: 0px;padding: 0px">
                                    <div class="col-md-9 ppod">
                                        <span>چگونگی رهایی از استرس روزانه !؟</span>
                                        <br>
                                        <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                        <hr style="margin-bottom: 2px">
                                        <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                    </div>
                                    <div class="col-md-3 ppod" style="padding: 5px" id="ppof">
                                        <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endif
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="modalclosebutton">&times;</button>
                <h4 class="modal-title" id="modalstitle">انتخاب کنید</h4>
            </div>
            <div class="modal-body" id="modalbodys">
                <div class="row col-md-12 text-center" id="nowiconin">
                    <div><span><i class="fas fa-film"></i></span> <span><i class="fas fa-podcast"></i></span> <span><i class="fas fa-file-alt"></i> </span></div>
                </div>

            </div>
        </div>

    </div>
</div>
<section class="container-fluid" style="padding-top: 5px">
    <div class="col-md-12">
        <div class="row">
            @if(\Illuminate\Support\Facades\Auth::user()->role !== "USR")
                <div class="col-md-2" id="topaf">
                    <div class="card" id="cardmenu">
                        <ul style="list-style-type: none">
                            <a href="" style="color: #36363a"><li class="active">خانه<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">🏠</span></li></a>
                            <a href="" style="color: #36363a"><li>کتاب الکترونیک<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">📚</span></li></a>
                            <a href="" style="color: #36363a"><li>سوالات<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">❓</span></li></a>
                            <a href="" style="color: #36363a"><li>دوره ها<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">👨‍🏫</span></li></a>
                            <a href="" style="color: #36363a"><li>پادکست ها<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">🎙️</span></li></a>
                            <a href="" style="color: #36363a"><li>ویدئو ها<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">🎞️</span></li></a>
                            <a href="" style="color: #36363a"><li>دسته بندی ها<span style="text-align: right;float: right;margin-right: 5px;margin-left: 10px">💡</span></li></a>
                        </ul>
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
                <div class="col-sm-3 col-md-2" id="cardstart">
                    <div class="card" style="border-top-left-radius: 10px;border-top-right-radius:10px;border: 0px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                        <img src="{{asset('wave.png')}}" width="100%" style="border-top-left-radius: 10px;border-top-right-radius:10px;">
                        <div class="card-body">
                            <p id="timeset">همین الان آیندتو بساز !</p>
                            <p id="testtimeset">از آنجا که لورم ایپسوم، شباهت زیادی به متن های واقعی دارد، طراحان معمولا از لورم ایپسوم استفاده میکنند تا فقط به مشتری یا کار فرما نشان دهند.🚀</p>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="border-top-left-radius: 10px;border-top-right-radius:10px;border: 0px;box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;">
                        <div class="card-body">
                            <p id="quesbox">آخرین سوالات</p>
                            <a href=""><p style="margin: 5px 0px;font-size: 13px;direction: rtl;line-height: 25px">من برای وی آی پی هزینه کردم اما کار نمیکنه چیکار کنم ؟؟</p></a>
                            <a href=""><p style="margin: 5px 0px;font-size: 13px;direction: rtl;line-height: 25px">من برای وی آی پی هزینه کردم اما کار نمیکنه چیکار کنم ؟؟</p></a>
                            <a href=""><p style="margin: 5px 0px;font-size: 13px;direction: rtl;line-height: 25px">من برای وی آی پی هزینه کردم اما کار نمیکنه چیکار کنم ؟؟</p></a>
                        </div>
                    </div>
                </div>
            @endif

            @if(\Illuminate\Support\Facades\Auth::user()->role == "USR")
                <section id="pricing" class="pricing section-bg" style="direction: rtl;padding-top: 3px">
                    <div class="container">
                        <div class="row col-md-12" style="direction: rtl">
                            <div class="card">
                                @php
                                    $user = \Illuminate\Support\Facades\Auth::user();
$vip = $user->vip;
$exptime = $user->exptime;
if (empty($vip) and empty($exptime)){
    $time = 0;
}elseif(!empty($vip) and $exptime > \Illuminate\Support\Carbon::now()->toArray()['formatted']){
    $time = \Illuminate\Support\Carbon::now()->diffInDays($exptime);
}
                                @endphp
                                <div class="col-md-5" style="background-color: #c1c6e3;padding: 15px;color: black;font-size: 20px;font-weight: bold;border-radius: 5px">
                                    اشتراک ویژه شما : {{$time}} روز  <a href="#nowbuy"><span style="float: left;font-weight: normal;font-size: 12px;background-color: #f5eefa;padding: 8px;color: #343337">تمدید</span></a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="section-title">
                            <h2 style="font-weight: bold;background-color: #f8726d;padding: 8px;color: white;text-align: center">💣 {{\Illuminate\Support\Facades\Auth::user()->name}}، اشتراک ویژه رو همین الان بخررر !💣</h2>
                            <br>
                            <p style="line-height:32px;font-weight: bold;">این اشتراک ویژه رو همین الان بخر !! الان داریم با بهترین قیمت این پیشنهاد خفنو بهت میدیم با ویژه شدن میتونی با ما در رابطه با کسب و کارت به طور <span style="background-color: gold">مستقیم</span> در ارتباط باشی ازمون سوال کنی و ما کمک کنیم تا به چیزایی که میخای برسی علاوه بر اون کلی مطلب مفید هست که هر جایی پیدا نمی کنی بچه های تیم جمع آوری اطلاعات شرکت ما ساعت ها وقت گذاشتن تا این مطالب رو برات آماده کنن پس وقتو تلف نکن و زود بخر تا از همه ی این خدمات با کمترین قیمت بهره مند شی !</p>
                        </div>
                        <div class="row" id="nowbuy">

                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="box featured">
                                    <h3>پلن یک ماهه</h3>
                                    <h4 style="font-family: Vazir;font-weight: bold;font-size: 30px;background-color: gold;color: #1e2125;padding: 5px;text-shadow: 4px 4px white"> به قیمت باورنکردنی 30 هزار تومن 😳</h4>
                                    <ul>
                                        <li>استفاده از مطالب ویژه</li>
                                        <li>استفاده از پشتیبانی تخصصی در رابطه با کسب و کار شما</li>
                                        <li>پیشنهاد بهترین مطالب هفتگی در پروفایل</li>
                                        <li>ارسال هفتگی جدید ترین مطالب در ایمیل</li>
                                    </ul>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-buy">بخرش🤟</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="box">
                                    <h3>رایگان</h3>
                                    <ul>
                                        <li>استفاده از مطالب رایگان</li>
                                        <li>استفاده از پشتیبانی آنلاین</li>
                                        <li>پیشنهاد هفتگی بهترین مطالب هفته در پروفایل</li>
                                        <li class="na">استفاده از مطالب ویژه</li>
                                        <li class="na">استفاده از پشتیبانی تخصصی در رابطه با کسب و کار شما</li>
                                        <li class="na">پیشنهاد بهترین مطالب هفتگی در پروفایل</li>
                                        <li class="na">ارسال هفتگی جدید ترین مطالب در ایمیل</li>
                                    </ul>
                                    <div class="btn-wrap">
                                        <a class="btn-buy">دارید !🤞	</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12" id="changeidt">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->has('file'))
                                    <div class="alert alert-danger text-center" style="border-radius: 0px;border: 0px;color: white;background-color: #fd6f7b">
                                        <i class="fas fa-exclamation-triangle" style="padding: 5px;font-size: 12px"></i> خطا : {{ $errors->first('file') }} <i class="fas fa-exclamation-triangle" style="padding: 5px;font-size: 12px"></i>
                                    </div>
                                @endif
                                @if (session('complete'))
                                    <div class="alert alert-danger" style="border-radius: 0px;border: 0px;color: #353435;background-color: #a4fd87;text-align: center">
                                        {{session('complete')}}
                                    </div>
                                @endif
                                <div class="card-title" style="text-align: right;font-size: 25px;font-weight: bold;background-color: #e0dcf8;padding: 10px;text-shadow: 4px 4px pink;color: #1e2125;border: 2px dashed blue;box-shadow: 4px 4px pink">
                                    <i class="fas fa-angle-left" style="padding: 8px;font-size: 20px"></i>اطلاعات حساب شما🧾
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 8px">
                                        <div class="row">
                                            <div class="col-md-6" style="margin: 0px auto">
                                                @php
                                                    $user = \Illuminate\Support\Facades\Auth::user()->profile;
        if ($user == null){
            $prof = asset('default.png');
        }else{
                                                    $prof = explode('public',$user)[1] ?? null;
                                                    }
                                                @endphp
                                                <div class="text-center">
                                                    <img src="{{$prof}}" title="عکس پروفایل شما" width="80%" style="border-radius: 50%">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <form method="post" action="<?php echo route('savepictures')?>" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12" style="text-align: center">
                                                <label id="lablefilea" title="انتخاب عکس پروفایل">انتخاب عکس پروفایل<input type="file" accept="image/*" name="file" style="font-size: 12px;display: none" required></label>
                                                <input type="submit" id="lablefilea" title="ذخیره عکس پروفایل" class="btn btn-success" name="up" style="border-radius: 0px" value="ذخیره عکس پروفایل">
                                            </div>
                                        </form>
                                        <form method="post" action="<?php echo route('saveinfouser')?>">
                                        @csrf
                                    </div>
                                    <div class="col-md-6" style="direction: rtl;margin-top: 10px">
                                        @if (session('username'))
                                            <div class="alert alert-danger" style="border-radius: 0px;border: 0px;color: #353435;background-color: #a4fd87;text-align: center">
                                                {{session('username')}}
                                            </div>
                                        @endif
                                        <div class="form-group" style="text-align: right">
                                            <label for="name">نام کاربری شما : </label>
                                            <input type="text" class="form-control" title="نام کاربری شما" title="نام کاربری شما" id="name" style="border-radius: 0px;font-size: 18px;padding: 5px;margin: 10px auto;box-shadow: none;outline: none" name="username" value="{{\Illuminate\Support\Facades\Auth::user()->username}}" placeholder="نام کاربری خود را وارد کنید" maxlength="100" required>
                                        </div>
                                        <div class="form-group" style="text-align: right">
                                            <label for="name">نام و نام خانوادگی : </label>
                                            <input type="text" class="form-control" title="نام و نام خانوادگی" title="نام و نام خانوادگی شما" id="name" style="border-radius: 0px;font-size: 18px;padding: 5px;margin: 10px auto;box-shadow: none;outline: none" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="نام و نام خانوادگی خود را وارد کنید" maxlength="100" required>
                                        </div>
                                        <div class="form-group" style="text-align: right">
                                            <label for="email">ایمیل : </label>
                                            <input type="email" class="form-control" title="غیر قابل تغییر" style="border-radius: 0px;font-size: 18px;padding: 5px;margin: 10px auto;box-shadow: none;outline: none" title="ایمیل شما" name="email" id="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="ایمیل خود را وارد کنید" disabled>
                                        </div>
                                        <br>
                                        <div style="text-align: right">
                                            <button type="submit" title="ثبت اطلاعات" class="btn btn-primary" style="border-radius: 0px;box-shadow: 4px 4px lightpink;background-color: #a9a9f8;font-size: 14px;color: #1e2125">ثبت اطلاعات</button>
                                        </div>
                                        </form>
                                        <br>
                                        @if(!empty($user))
                                            <div style="text-align: right">
                                                <form method="post" action="<?php echo route('deleteprofilephoto')?>">
                                                    @csrf
                                                    <input type="submit" title="حذف عکس پروفایل" class="btn btn-danger" name="up" style="border-radius: 0px;box-shadow:4px 4px #ff878c;background-color: #ffb0b6;font-size: 15px;color: #1e2125;" value="حذف عکس پروفایل">
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row col-md-12" style="padding-top: 25px;margin: 0px">
                                        <div class="card" style="background-color: #e8e6ff;box-shadow: 8px 8px #ffdff7;border: 1px solid lightgrey;padding: 8px">
                                            <div class="card-header" style="background-color: transparent;font-size: 20px;font-weight: bold;border-radius: 0px;border-bottom: 0px;font-weight: bold">
                                                ✍🏻اضافه کردن سوشیال مدیا
                                            </div>
                                            <p style="direction: rtl;line-height: 30px;">کاربر گرامی اگر شما از سوشیال مدیا استفاده می کنید میتوانید در قسمت آیدی خود را وارد کنید تا در صورت کامنت گذاشتن کاربران بتوانند صفحه ی شما رو هم ببینند.</p>
                                            <form method="post" action="{{route('saveinstagram')}}">
                                                @csrf
                                                <div class="form-group" style="text-align: right">
                                                    <label for="instagram" style="margin: 8px auto">اینستاگرام : </label>
                                                    <br>
                                                    <input type="text" class="form-control" title="اینستاگرام شما" id="name" style="border-radius: 0px;font-size: 18px;padding: 5px;margin: 10px auto;box-shadow: none;outline: none" name="instagram" value="{{\Illuminate\Support\Facades\Auth::user()->instagram ?? null}}" placeholder="اینستاگرام خود را وارد کنید : yasinhosseini" maxlength="100" required>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary" title="ذخیره" style="border-radius: 0px;background-color: #a9a9f8;font-size: 15px;color: #1e2125;">ذخیره</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row col-md-12">
                        <div class="card">
                            <div class="container">
                                <p style="color: #1d1d3c;font-size: 30px;direction: rtl;text-align: right;font-weight: bolder;">مطالب پیشنهادی {{$title}} این هفته</p>
                                <p style="color: rgba(29,29,60,0.66);font-size:20px;direction: rtl;text-align: right;font-weight: bold">دسته ایی از مطالب پیشنهادی {{$title}} مخصوص شما :</p>
                                <br>
                            </div>
                            <div class="row col-md-12" style="background-color:white;padding: 15px;">
                                @foreach($all as $content)
                                    @php
                                        $id = $content->id;
                          $title = $content->title;
               $description = $content->description;
               $category = $content->category;
               $img = $content->picture;
               $pic = explode('public',$img)[1];
               $slug = $content->slug;
               $time = $content->time;
               $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
               if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
               $hash = new \Hashids\Hashids();
               $hashid = $hash->encode($id);
               foreach ($colorshuffle as $color){
                   $thiscolor = $color;
               }
                                    @endphp
                                    <div class="col-md-4">
                                        <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                                            <div class="card" style="border: 1px solid lightgrey;text-align: right;box-shadow: 8px 8px {!! $thiscolor !!}">
                                                <div class="card-header" style="padding: 0px;background-color: transparent">
                                                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                                        <img src="{{$pic}}" alt="Psychopomp"/>
                                                        {!! $db ?? null !!}
                                                    </div>
                                                </div>
                                                <div class="card-body" style="direction: rtl;padding-top: 5px">
                                                    <p style="font-size: 16px;margin-bottom: 5px;color:black;">{{$title}}</p>
                                                    <br>
                                                    <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            {{--  <div class="container-fluid text-center">
                                  <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
                              </div>
                              <br>--}}
                        </div>
                    </div>
                </section><!-- End Pricing Section -->
            @endif
        </div>
    </div>
</section>
@include('footer')
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('js/lazypic.js')}}"></script>
<script>
    setInterval(function () {

        var top = $('.lilist').first();
        top.hide(100, function() {
            top.remove();
            $('.ullist').append(top);
            setTimeout(function(){
                top.show(100);
            }, 100);
        });
    }, 7000);
</script>
<script>
    new Swiper('.clients-sliders', {
        speed: 400,
        loop: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 25
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 40
            }
        }
    });
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
