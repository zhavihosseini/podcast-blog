<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>گرون کست | بهترین سرویس پادکست ایرانی</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            {{--<img src="assets/img/logo.png" alt="">--}}
            <span>Grown Cast</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">خانه<i class="fas fa-home" style="font-size: 14px;padding: 5px"></i></a></li>
                <li><a class="nav-link scrollto" href="#about">تماس با ما<i class="fas fa-phone" style="font-size: 12px;padding: 5px"></i></a></li>
                <li><a href="blog.html">پادکست ها<i class="fas fa-podcast" style="font-size: 14px;padding: 5px"></i></a></li>
                <li><a href="{{route('content')}}">مطالب<i class="far fa-file-alt" style="font-size: 14px;padding: 5px"></i></a></li>
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center topdowns">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200" id="heronice">
                <div class="container-fluid">
                    <div class="card-header" id="newpod">
                        پادکست های جدید<i class="fas fa-podcast" style="float: right;font-size: 20px;padding: 2px 0px "></i>
                    </div>
                    <div class="card-body">
                        <div class="row ullist">
                            <div class="row lilist" style="margin: 0px;padding: 0px">
                                <div class="col-md-9 ppod">
                                    <span>چگونگی رهایی از استرس روزانه !؟</span>
                                    <br>
                                    <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                    <hr style="margin-bottom: 2px">
                                    <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><img src="{{asset('assets/img/values-1.png')}}" style="width: 25px;height: 25px;border-radius: 50%;margin-left: 8px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                </div>
                                <div class="col-md-3 ppod" style="padding: 5px">
                                    <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                </div>
                            </div>
                            <div class="row lilist" style="margin: 0px;padding: 0px">
                                <div class="col-md-9 ppod">
                                    <span>چگونگی رهایی از استرس روزانه !؟</span>
                                    <br>
                                    <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                    <hr style="margin-bottom: 2px">
                                    <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><img src="{{asset('assets/img/values-1.png')}}" style="width: 25px;height: 25px;border-radius: 50%;margin-left: 8px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                </div>
                                <div class="col-md-3 ppod" style="padding: 5px">
                                    <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                </div>
                            </div>
                            <div class="row lilist" style="margin: 0px;padding: 0px">
                                <div class="col-md-9 ppod">
                                    <span>چگونگی رهایی از استرس روزانه !؟</span>
                                    <br>
                                    <span style="font-size: 10px;color: #2b2a2a">...لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                    <hr style="margin-bottom: 2px">
                                    <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><img src="{{asset('assets/img/values-1.png')}}" style="width: 25px;height: 25px;border-radius: 50%;margin-left: 8px"><span style="font-size: 12px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">41 دقیقه</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                                </div>
                                <div class="col-md-3 ppod" style="padding: 5px">
                                    <img src="{{asset('assets/img/values-1.png')}}" width="100%" style="padding: 0px">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--   <img src="assets/img/hero-img.png" class="img-fluid" alt="">--}}
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="text-align: right;font-family: Vazir;font-size: 27px;direction: rtl;line-height: 45px">بهترین و جدید ترین پادکست ها رو از ما بشنوید&#128293;</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="text-align: right;font-family: Vazir;font-size: 15px;direction: rtl;line-height: 28px">کافیه همین الان عضو بشی تا از بهترین و با کیفیت ترین پادکست ها استفاده کنید کاملا رایگان !!</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <i style="padding: 5px">&#128640;</i>
                            <span style="padding: 10px">شروع کنید</span>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</section><!-- End Hero -->
<main id="main">
    <section id="values" class="values" style="direction: rtl;padding: 0px">
        <div class="container-fluid" data-aos="fade-up" style="padding: 0px">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px">
                    <img src="{{asset('assets/img/about.jpg')}}" width="100%">
                </div>
                <div class="col-md-6" style="padding-right: 0px">
                    <div class="card-header" style="color: #313130;padding: 8px;font-size: 28px;border: 5px dashed #cac7f9;font-weight: bold;">
                        اولین پادکست با  <span style="color: #0c63e4;"> محمد رضا گلزار </span>  سلبریتی محبوب ایران !!
                    </div>
                    <div class="card-body" style="font-size: 18px">
                        <p>                        در این قسمت ما از سلبریتی محبوب ایرانی دعوت کردیم تا بیاد و با هم یه تایمی رو پادکست داشته باشیم این اپیزود بسیار عالی و جذاب و شنیدنیه
                        </p>
                        <br>
                        <div class="row col-md-12">
                            <p style="text-align: center;font-size: 15px;font-weight: bold;color: #869ff9">این قسمت رو از دست ندید و حتما حتما نظراتتونو برامون بنویسید</p>
                        </div>
                    </div>
                    <div class="row col-md-12" style="margin: 0px">
                        <form>
                            <div class="row">
                            <div class="col-md-11">
                            <input type="text" class="form-control" width="100%" id="commnet" placeholder="نظرات خود را وارد کنید ... " required maxlength="210">
                            </div>
                            <div class="col-md-1" style="padding: 0px">
                                <button class="btn" id="btncommnet"><i class="fas fa-arrow-left" style="font-size: 12px;color: blue;"></i></button>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="row col-md-12" style="padding: 15px;max-height: 220px;overflow-x: hidden;overflow-y: auto;">
                        <div class="col-md-12" style="margin-right: 8px">
                            <p style="font-size: 15px"> یاسین حسینی <i class="fas fa-circle" style="padding: 8px;font-size: 5px"></i><span>6 روز پیش</span> <span>
    <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-v"></i>
    <ul class="dropdown-menu menuus">
      <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
      <li><a href="#">پاسخ<i class="fas fa-reply" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
    </ul>
    </button></span></p>

                            <p style="font-size: 14px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        </div>
                        <hr>
                        <div class="col-md-12" style="margin-right: 8px">
                            <p style="font-size: 15px"> یاسین حسینی <i class="fas fa-circle" style="padding: 8px;font-size: 5px"></i><span>6 روز پیش</span> <span>
    <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-v"></i>
    <ul class="dropdown-menu menuus">
      <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
      <li><a href="#">پاسخ<i class="fas fa-reply" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
    </ul>
    </button></span></p>

                            <p style="font-size: 14px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        </div>
                        <hr>
                        <div class="col-md-12" style="margin-right: 8px;background-color: #f3f3ee">
                            <p style="font-size: 15px"> یاسین حسینی <i class="fas fa-circle" style="padding: 8px;font-size: 5px"></i><span>6 روز پیش</span> <span>
    <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-v"></i>
    <ul class="dropdown-menu menuus">
      <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
      <li><a href="#">پاسخ<i class="fas fa-reply" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
    </ul>
    </button></span></p>

                            <p style="font-size: 14px">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <hr>
        </div>
    </section>
</main>
<main id="main">
    <section id="values" class="values">
        <div class="container" data-aos="fade-up">
            <div class="card-header" id="carsfo">
                پادکست های پیشنهادی
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200" style="padding-top: 0px">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;padding-bottom: 15px;margin-bottom: 5px">
                        <i class="fas fa-play-circle" id="playthis"></i>
                        <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="float: right;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><p style="float: left;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span></p>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200" style="padding-top: 0px">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;padding-bottom: 15px;margin-bottom: 5px">
                        <i class="fas fa-play-circle" id="playthis"></i>
                        <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="float: right;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span></p><p style="float: left;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span></p>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200" style="padding-top: 0px">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;padding-bottom: 15px;margin-bottom: 5px">
                        <i class="fas fa-play-circle" id="playthis"></i>
                        <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="float: right;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span></p><p style="float: left;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span></p>
                    </div>
                </div>
                        </div>
                    </div>
    </section><!-- End Values Section -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
            <div class="card-header cardnow">
                 پیشنهاد پادکست های کانال : یاسین حسینی
            </div>
            <br><br>
            <div class="row">
            <div class="clients-sliders swiper-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                            <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                    <div class="swiper-slide col-md-2"><img src="{{asset('assets/img/about.jpg')}}" style="width: 100%;border-radius: 25px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <p style="direction: rtl;text-align: right;font-size: 14px;margin: 12px 0px;font-weight: bold">پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</p>
                    </div>
                </div>
                <br><br>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </div>

    </section><!-- End Clients Section -->
    <section id="values" class="values">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                        <i class="fas fa-play-circle" id="playthis"></i>
                        <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-star" style="font-size: 8px;padding: 5px"></i></span></p>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                        <i class="fas fa-align-right" id="playthis"></i>
                        <h3>چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <br>
                        <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-star" style="font-size: 8px;padding: 5px"></i></span></p>

                    </div>
                </div>
                <div class="col-lg-4" style="margin-bottom: 5px">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                        <i class="fas fa-play-circle" id="playthis"></i>
                        <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                        <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                        <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><span><i class="fas fa-circle" style="font-size: 4px;padding: 5px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span><i class="fas fa-star" style="font-size: 8px;padding: 5px"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container" style="text-align: center">
            <button class="btn" id="btnload" style="margin: 0px auto"><i class="fas fa-angle-down" style="padding: 5px;font-size: 10px"></i>مشاهده بیشتر<i class="fas fa-angle-down" style="padding: 5px;font-size: 10px"></i></button>
        </div>
    </section>

    <!-- End Recent Blog Posts Section -->

 {{--   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->--}}

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <p>برای دریافت و خبردار شدن از مطالب جدید ایمیل خود را وارد کنید</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><button type="submit"><i class="far fa-paper-plane" style="font-size: 12px;padding-right: 15px"></i>ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
