<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>گرون کست | پادکست </title>
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
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
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
                <li><a class="nav-link scrollto active">مطالب<i class="far fa-file-alt" style="font-size: 14px;padding: 5px"></i></a></li>
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
<br>
<div class="container">
    <div class="row" style="margin: 0px">
        <div class="card-title" style="font-size: 12px;color: #2e2e2c;text-align: center">
            تبلیغات
        </div>
        <div class="card-body">

        </div>
    </div>
</div>
<section id="values" class="values">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <div class="card-header" id="cardss" style="border: 0px;">
                <p style="font-size: 20px">جدید ترین پادکست ها</p>
            </div>
        </header>
        <div class="row">
            <div class="col-lg-4" style="margin-bottom: 5px">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                    <i class="fas fa-play-circle" id="playthis"></i>
                    <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                    <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                    <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span></p>
                </div>
            </div>
            <div class="col-lg-4" style="margin-bottom: 5px">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                    <i class="fas fa-play-circle" id="playthis"></i>
                    <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                    <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                    <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span></p>
                </div>
            </div>
            <div class="col-lg-4" style="margin-bottom: 5px">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="" style="padding: 0px;margin-bottom: 20px">
                    <i class="fas fa-play-circle" id="playthis"></i>
                    <h3>پادکست شماره ی 56 - چگونگی داشتن اعتماد به نفس</h3>
                    <p style="text-align: right;direction: rtl;font-size: 14px">گر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                    <p style="float: left;direction: rtl"><i class="far fa-clock" style="font-size: 13px;margin-left: 5px;font-size: 10px;margin-top: 5px"></i><span style="font-size: 12px;">12 دقیقه</span></p><p style="float: right;direction: rtl"><span style="font-size: 12px;margin-left: 5px;margin-top: 5px">یاسین حسینی</span><i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">انگیزشی</span></p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-blog-posts" class="recent-blog-posts" style="padding-top: 0px">
    <div class="container" data-aos="fade-up">
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
                        <div class="card-title" style="direction: rtl;text-align: right;font-size: 20px;font-weight: bold;margin-top: 5px">
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
</body>

</html>
