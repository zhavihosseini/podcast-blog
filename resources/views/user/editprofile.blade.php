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
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
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
<section class="container-fluid">
    <div class="col-md-12">
        <div class="row">
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
                                <div class="form-group" style="text-align: right">
                                    <label for="email">سمت : </label>
                                    <input type="text" class="form-control" title="سمت خود را انتخاب کنید" name="semat" id="semat" value="{{\Illuminate\Support\Facades\Auth::user()->semat}}" placeholder="سمت خود را وارد کنید" required>
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
                            <div class="row col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        سوشیال مدیا
                                    </div>

                                    <form method="post" action="{{route('saveinstagram')}}">
                                        @csrf
                                        <br>
                                        <div class="form-group" style="text-align: right">
                                            <label for="instagram" style="margin: 5px auto">اینستاگرام : </label>
                                            <br>
                                            <input type="text" class="form-control" title="اینستاگرام شما" id="name" name="instagram" value="{{\Illuminate\Support\Facades\Auth::user()->instagram ?? null}}" placeholder="اینستاگرام خود را وارد کنید : yasinhosseini" maxlength="100" required>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary" style="border-radius: 0px">ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
</section>

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                {{-- <div class="col-sm-6 col-md-3 item">
                     <h3>Services</h3>
                     <ul>
                         <li><a href="#">Web design</a></li>
                         <li><a href="#">Development</a></li>
                         <li><a href="#">Hosting</a></li>
                     </ul>
                 </div>
                 <div class="col-sm-6 col-md-3 item">
                     <h3>About</h3>
                     <ul>
                         <li><a href="#">Company</a></li>
                         <li><a href="#">Team</a></li>
                         <li><a href="#">Careers</a></li>
                     </ul>
                 </div>--}}
                <div class="col-md-12 item text" style="direction: rtl">
                    <p style="margin-bottom: 5px"><img src="{{asset('down.png')}}" width="50px" id="nowimf"><span>Yasin hosseini</span></p>
                    <p style="font-size: 15px;line-height: 30px">از آنجا که لورم ایپسوم، شباهت زیادی به متن های واقعی دارد، طراحان معمولا از لورم ایپسوم استفاده میکنند تا فقط به مشتری یا کار فرما نشان دهند که قالب طراحی شده بعد از اینکه متن در آن قرار میگرد چگونه خواهد بود و فونت ها و اندازه ها چگونه در نظر گرفته شده است.</p>
                </div>
                <div class="col-md-12 item text" style="direction: rtl">
                    <p id="psoan">
                        <a href=""><span style="font-size: 15px">📜 قوانین و مقررات</span></a>
                        <a href=""><span style="font-size: 15px;margin-top: 5px">📍 کمک</span></a>
                    </p>
                </div>
                <div class="col-md-12" style="direction: rtl;text-align: center">
                    <div class="row" style="display: inline-block">
                        <p id="pid">
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-telegram-plane"></i>
                            <i class="fab fa-youtube"></i>
                        </p>
                    </div>
                </div>
            </div>
            <p class="copyright">© تمامی حقوق محفوض است 1400</p>
        </div>
    </footer>
</div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
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
