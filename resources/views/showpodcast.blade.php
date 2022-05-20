<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>گرون کست | پادکست</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<header id="header" class="header" style="border-bottom: 1px solid lightgrey;padding:7px">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            {{--<img src="assets/img/logo.png" alt="">--}}
            <span>Grown Cast</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{route('index')}}">خانه<i class="fas fa-home" style="font-size: 14px;padding: 5px"></i></a></li>
                <li><a class="nav-link scrollto" href="#about">تماس با ما<i class="fas fa-phone" style="font-size: 12px;padding: 5px"></i></a></li>
                <li><a href="blog.html">پادکست ها<i class="fas fa-podcast" style="font-size: 14px;padding: 5px"></i></a></li>
                <li><a class="nav-link scrollto">مطالب<i class="far fa-file-alt" style="font-size: 14px;padding: 5px"></i></a></li>
                <li>
                    @if(Route::has('login'))
                        @auth
                            <a class="getstarted scrollto" href="{{ route('dashboard') }}" style="font-family: Vazir"><i class="fas fa-sign-in-alt" style="font-size: 12px;padding-right: 6px"></i>داشبورد</a>
                        @else
                            <a class="getstarted scrollto" href="{{ route('login') }}" style="font-family: Vazir">ورود / ثبت نام<i class="fas fa-user" style="font-size: 12px;padding: 5px"></i></a>
                        @endif
                    @endif
                </li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<div class="progress-container fixed-top">
    <div class="progress-bar" id="myBar"></div>
</div>
<br>
<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="sticky" style="position: sticky" id="tabcons">
                <div class="container">
                    <a href="">
                        <div class="row" style="margin: 0px">
                            <div class="card-title" style="font-size: 12px;color: #2e2e2c;text-align: center">
                                تبلیغات
                            </div>
                            <div class="card-body text-center">
                                <img src="{{asset('tabs.png')}}">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row col-md-12">
<p style="text-align: right"><span style="padding: 8px;font-size: 25px;color: #0c63e4;font-weight: bold">پادکست</span><i class="fas fa-podcast" style="font-size: 25px;color: #0c63e4;"></i></p>
            </div>
            <h1 style="font-weight: bold;font-size: 27px;font-weight: bold;text-align: right;direction: rtl;line-height: 48px;justify-content: right">شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</h1>
            <br>
            <div class="row" style="direction: rtl;" id="showter">
                <p><img src="{{asset('bb.jpg')}}" style="width: 35px;border-radius: 50%"><span style="padding: 0px 8px;font-size: 15px"> یاسین حسینی </span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69">15 مهر 1400</span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69"> 6 دقیقه خواندن </span><span id="paper">
                             <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-paper-plane"></i><ul class="dropdown-menu menuus"><li><a href="#">لینک ها{{--<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i>--}}</a></li></ul></button>
                        </span><span id="bookmarks" title="ذخیره ی این مطلب"><i class="far fa-bookmark"></i></span><span> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu menuus">
                <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
            </ul>
        </button></span></p>
            </div>
            <div class="col-md-12" id="colsk">
                <div class="row" style="direction: rtl;">
                    <p><img src="{{asset('bb.jpg')}}" style="width: 35px;border-radius: 50%"><span style="padding: 0px 8px;font-size: 15px"> یاسین حسینی </span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69">15 مهر 1400</span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69"> 6 دقیقه</span></p>
                    <button class="btn" id="follows">دنبال کردن (56)</button>
                </div>
            </div>
            <hr>
            <div class="col-md-12" style="text-align: center">
                <div class="row" id="showtes">
                    <p><span id="paper">
                             <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-paper-plane"></i><ul class="dropdown-menu menuus"><li><a href="#">لینک ها{{--<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i>--}}</a></li></ul></button>
                        </span><span id="bookmarks" title="ذخیره ی این مطلب"><i class="far fa-bookmark"></i></span><span> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu menuus">
                <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
            </ul>
        </button></span></p>
                </div>
            </div>
            <div class="row" style="direction: rtl;margin: 0px;padding: 15px;background-color: #e3ddfa;border: 5px dashed #8585fa">
                <p>⚡ اسپانسر این بخش :</p>
                <a href="#"><p>سامانه الکترونیک پرداخت آنلاین بلوکارت / امن ترین پرداخت آنلاین کشور</p></a>
            </div>
            <br>
            <div class="row">
                <input type="checkbox" id="zoomCheck">
                <label for="zoomCheck">
                    <img class="zooms" src="{{asset('assets/img/about.jpg')}}" width="100%">
                </label>
                <br>
                <a href="" style="text-align: center;font-size: 14px;color: #2b2a2a;direction: rtl"><span> عکس برگرفته از : </span></a>
                <br><br>
                <iframe src="https://anchor.fm/yasin757/embed/episodes/ep-e15eh0c" height="102px" width="400px" frameborder="0" scrolling="no"></iframe>
                <div class="row" style="margin: 0px;color: #343532;padding: 0px;line-height: 45px;direction: rtl;font-size: 17px">
                    <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود. طراحان وب و گرافیک از این متن برای پرکردن صفحه و ارائه شکل کلی طرح استفاده می‌کنند.

                        طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد. اگر طراح بخواهد دنبال متن های مرتبط بگردد تمرکزش از روی کار اصلی برداشته میشود و اینکار زمان بر خواهد بود. همچنین طراح به دنبال این است که پس از ارایه کار نظر دیگران را در مورد طراحی جویا شود و نمی‌خواهد افراد روی متن های موجود تمرکز کنند.

                        از آنجا که لورم ایپسوم، شباهت زیادی به متن های واقعی دارد، طراحان معمولا از لورم ایپسوم استفاده میکنند تا فقط به مشتری یا کار فرما نشان دهند که قالب طراحی شده بعد از اینکه متن در آن قرار میگرد چگونه خواهد بود و فونت ها و اندازه ها چگونه در نظر گرفته شده است.

                        نکته بعدی در مورد متن ساختگی لورم ایپسوم این است که بعضی از طراحان وبسایت و گرافیست کاران بعد از آنکه قالب و محتوای مورد نظرشون را ایجاد کردند از یاد می‌برند که متن لورم را از قسمتهای مختلف سایت حذف کنند و یا با متن دیگری جایگزین کنند. به همین دلیل اغلب اوقات ما با وبسایتهایی مواجه می‌شویم که در گوشه و کنار صفحات آنها متن لورم ایپسوم هنوز وجود دارد و حذف نشده است که این نشان دهنده بی توجهی طراحان است.</p>
                </div>
                <hr>
            </div>
            {{--
                                <button class="btn fixed-bottom" id="feeds"><i class="fas fa-arrow-up" style="float: left;padding: 5px"></i>باز خورد<i class="fas fa-arrow-up" style="float: right;padding: 5px"></i></button>
            --}}
            <div id="myNav" class="overlay">
                <div class="container-fluid">
                    <div class="card-header" id="headitnow">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                </div>
                                <div class="col-md-6" style="text-align: right;font-size: 20px;">
                                    نظرات (5)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-right: 0px;padding-left: 0px">
                        <div class="row col-md-12" style="margin: 0px">
                            <button class="btngest" onclick="toggleText()">شما چی فکر میکنید ؟؟</button>
                            <div id="Myid" style="display: none">
                                <br>
                                <p><span><img src="{{asset('assets/img/about.jpg')}}" width="20%" style="float: right"></span><span style="float:right;margin-top: 6px;margin-right: 7px">یاسین حسینی</span></p>
                                <br>
                                <form>
                                    <textarea id="textareais" placeholder="نظر خودتون رو بنویسید ... " minlength="2" maxlength="300" required></textarea>
                                    <br>
                                    <button type="submit" id="formsyb">ارسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row col-md-12" style="float: right;direction: rtl;">
                        <p><span><img src="{{asset('assets/img/about.jpg')}}" width="20%" style="float: right"></span><span style="float:right;margin-right:10px"> یاسین حسینی </span> <br> <span style="float: right;margin-right: 10px;color: #3f3e3e;font-size: 12px;margin-top: 8px">7 ماه پیش</span><span style="float: left"> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu mnus">
                <li><a href="#" id="amnus">گزارش این کامنت</a></li>
            </ul>
        </button></span></p>
                        <p style="font-size: 13px;line-height: 25px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="direction: rtl;float: left"><span style="float: left"> 5 <i class="far fa-thumbs-up"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px""> 5 پاسخ <i class="fas fa-reply"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px">پاسخ دادن</span></p>
                        <hr>
                        <div class="row col-md-12" style="border-right: 5px solid lightgrey;margin-right: 3px">
                            <p><span><img src="{{asset('assets/img/about.jpg')}}" width="20%" style="float: right"></span><span style="float:right;margin-right:10px"> یاسین حسینی </span> <br> <span style="float: right;margin-right: 10px;color: #3f3e3e;font-size: 12px;margin-top: 8px">7 ماه پیش</span><span style="float: left"> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu mnus">
                <li><a href="#" id="amnus">گزارش این کامنت</a></li>
            </ul>
        </button></span></p>
                            <p style="font-size: 13px;line-height: 25px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                            <p style="direction: rtl;float: left"><span style="float: left"> 5 <i class="far fa-thumbs-up"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px""> 5 پاسخ <i class="fas fa-reply"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px">پاسخ دادن</span></p>
                        </div>
                        <hr>
                        <div class="row col-md-12" style="border-right: 5px solid lightgrey;margin-right: 3px">
                            <p><span><img src="{{asset('assets/img/about.jpg')}}" width="20%" style="float: right"></span><span style="float:right;margin-right:10px"> یاسین حسینی </span> <br> <span style="float: right;margin-right: 10px;color: #3f3e3e;font-size: 12px;margin-top: 8px">7 ماه پیش</span><span style="float: left"> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu mnus">
                <li><a href="#" id="amnus">گزارش این کامنت</a></li>
            </ul>
        </button></span></p>
                            <p style="font-size: 13px;line-height: 25px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                            <p style="direction: rtl;float: left"><span style="float: left"> 5 <i class="far fa-thumbs-up"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px""> 5 پاسخ <i class="fas fa-reply"></i></span> <span style="float: right;margin-left: 10px;font-size: 14px">پاسخ دادن</span></p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <p><i class="far fa-thumbs-up" style="font-size: 22px;float: left;color: #3a3939"></i> <span style="font-size: 14px">5</span><i class="far fa-comment" style="font-size: 22px;margin: 0px 40px;color: #3a3939;cursor: pointer" onclick="openNav()"> <span style="font-size: 15px"> 4 </span></i> <span style="float: right;font-size: 12px;background-color: #313130;color: white;border-radius: 20px;padding: 8px">انگیزشی</span></p>
            </div>
            <div class="container">
                <div class="row" style="margin: 0px">
                    <div class="card-title" style="font-size: 12px;color: #2e2e2c;text-align: center">
                        تبلیغات
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <img src="{{asset('blogfa.gif')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <br>
            <div class="sticky-bottom displs" id="styos">
                <div class="col-md-8 comn" style="padding: 10px;margin-right: 3px">
                    <div class="row" style="margin: 0px;direction: rtl;text-align: right">
                        <span style="font-weight: bold;margin-bottom: 5px">یاسین حسینی</span>
                        <span style="font-size: 14px">به کانال من خوش اومدی ....</span>
                    </div>
                    <br>
                    <div style="text-align: right">
                        <button class="btn" id="follow">دنبال کردن (56)</button>
                    </div>
                    <hr>
                    <p style="font-size: 14px;color: #6e6c6c;text-align: right">دنبال کنندگان یاسین حسینی</p>
                    <div class="row" style="direction: rtl">
                        <p><img src="{{asset('assets/img/about.jpg')}}" width="25px" height="25px" style="border-radius: 50%"><span style="font-size: 13px;padding: 10px;color: #5a5858">یاسین حسینی</span></p>
                        <br>
                        <p><img src="{{asset('assets/img/about.jpg')}}" width="25px" height="25px" style="border-radius: 50%"><span style="font-size: 13px;padding: 10px;color: #5a5858">یاسین حسینی</span></p>
                        <br>
                        <a href="" style="font-size: 12px;color: #5a5858"><span>مشاهده ی بیشتر (+)</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<hr>
<br>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 0px">
    <div class="container" data-aos="fade-up">
        <div class="card-header" style="border: 1px solid lightgrey;background-color: transparent;text-align: right;direction: rtl;font-size: 20px;margin: 10px 0px">
            مطالب و پادکست های بیشتر از این نویسنده
        </div>
        <div class="row">
            <div class="col-md-4" id="colmd" style="direction: rtl">
                <div class="card-header" id="tabs">
                    بیشتر از آنچه دنبالش میگردید پیدا کنید
                </div>
                <div class="card-body">
                    <p><a href=""><span id="tagsnow"> خودشناسی </span></a> <a href=""><span id="tagsnow"> انگیزشی </span></a></p>
                    <br>
                    <a href="#"><p style="font-size: 12px;color: blue"> مشاهده همه ی موضوع ها <i class="fas fa-arrow-left" style="font-size: 10px;padding: 5px"></i></p></a>
                </div>
                <hr>
            </div>
            <div class="col-md-8" style="direction: rtl;margin-bottom: 10px">
                <div class="row" style="padding: 8px" id="rowcontent">
                    <span style="color: #343432;font-size: 12px;"><img src="{{asset('assets/img/about.jpg')}}" style="width: 35px;border-radius: 25px;margin-left: 5px"> یاسین حسینی <span style="color: #636360;"> در کانال </span> یاسین حسینی </span>
                    <div class="col-md-9">
                        <i class="fas fa-play-circle" style="float: left;font-size: 30px;color: #0c63e4;padding: 8px"></i>
                        <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 5px">
                            اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید
                        </div>
                        <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px">
                            <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        </div>
                        <p style="font-size: 12px;"> مرداد 1400 <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> 20 دقیقه <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px">انگیزشی</span><i class="fas fa-star" style="font-size: 10px;padding: 5px"></i> <span style="float: left"><i class="far fa-bookmark" id="bookmark" title="اضافه کردن به لیست مورد علاقه ها"></i></span></p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/about.jpg')}}" width="100%" id="imcontent" style="transition: 0.5s">
                    </div>
                </div>
                <div class="row" style="padding: 8px" id="rowcontent">
                    <span style="color: #343432;font-size: 12px;"><img src="{{asset('assets/img/about.jpg')}}" style="width: 35px;border-radius: 25px;margin-left: 5px"> یاسین حسینی <span style="color: #636360;"> در کانال </span> یاسین حسینی </span>
                    <div class="col-md-9">
                        <i class="fas fa-align-right" style="float: left;font-size: 30px;color: #0c63e4;padding: 8px"></i>
                        <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 5px">
                            اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید
                        </div>
                        <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px">
                            <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        </div>
                        <p style="font-size: 12px;"> مرداد 1400 <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> 20 دقیقه خواندن<i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px">انگیزشی</span><i class="fas fa-star" style="font-size: 10px;padding: 5px"></i> <span style="float: left"><i class="far fa-bookmark" id="bookmark" title="اضافه کردن به لیست مورد علاقه ها"></i></span></p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/img/about.jpg')}}" width="100%" id="imcontent" style="transition: 0.5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="copyright col-md-6">
                &copy; تمام حقوق برای مجموعه ی  <strong><span>گرون کست</span></strong> محفوض میباشد
            </div>
            <div class="copyright col-md-2">
                <a href="">قوانین و مقررات</a>
            </div>
            <div class="copyright col-md-4">
                <a href="#" class="telegram"><i class="fab fa-telegram" style="font-size: 18px;margin: 0px 15px"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram bx bxl-instagram" style="font-size: 18px;margin: 0px 15px"></i></a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
<script>
    function openNav() {
        document.getElementById("myNav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("myNav").style.display = "none";
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('styos').style.display='block';
                // add padding top to show content behind navbar
            } else {
                document.getElementById('styos').style.display='none';
            }
            if(window.innerWidth <= 936){
                document.getElementById('styos').style.display='none';
            }
        });
    });
</script>
<script>
    function toggleText(){
        var x = document.getElementById("Myid");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
