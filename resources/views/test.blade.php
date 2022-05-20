<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>گرون کست | بهترین سرویس پادکست ایرانی</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
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
<section class="container-fluid">
        <div class="col-md-12">
            <div class="row">
        <div class="col-md-2" id="topaf" style="padding-left: 0px;padding-right: 0px">
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
            @if(Route::has('login'))
                @auth
                    @php
                    $profile = \Illuminate\Support\Facades\Auth::user()->profile ?? null;
$img = explode('public',$profile)[1] ?? null;
if (empty($profile)){
    $img = asset('default.png');
}
$name = \Illuminate\Support\Facades\Auth::user()->name;
                    @endphp
                    <div class="col-md-12" id="cardhi">
                        <p><img src="{{asset($img)}}" width="50px" id="imageuser"><span style="padding: 0px 7px;font-weight: bold" id="textshow">سلام، {{$name}} خوش اومدی !🚩</span><span id="dashboardbut"><a href="{{route('dashboard')}}" class="btn" id="buttonsa">داشبورد</a></span></p>
                    </div>
                    @else

                    @endif
            @endif
            <div class="btn-group" role="group" id="btncde" aria-label="Basic example">
                <button type="button" class="btn btn-secondary active" style="border-bottom-right-radius:13px;">جدید ترین ها</button>
                <button type="button" class="btn btn-secondary">ذخیره شده ها</button>
                <button type="button" class="btn btn-secondary">دنبال شده ها</button>
                <button type="button" class="btn btn-secondary" style="border-bottom-left-radius:13px;">ویژه ها</button>
            </div>
            <br><br>
            <div class="col-md-12">
                <div class="lates">
                    <i class="fas fa-sort-amount-up" id="latesicon"></i>جدید ترین مطالب وبسایت
                </div>
                <br>
                <div class="col-md-12">
                {{--    @foreach($allcontent as $contents)
                        @php
                        $id = $contents['id'];
$title = $contents['title'];
$description = $contents['description'];
$user = $contents['userid'];
$getsuser = \App\Models\User::find($user);
$picuser= $getsuser->profile ?? null;
$explodes = explode('public',$picuser)[1] ?? null;
$imgs = $contents['picture'];
$imgexp = explode('public',$imgs)[1];
$slug = $contents['slug'];
$time = $contents['time'];
$date = \Morilog\Jalali\Jalalian::forge($time)->ago();
$hash = new \Hashids\Hashids();
$ids = $hash->encode($id);
 $likecount = \App\Models\like::getcounts($id,'content');
                        @endphp
                    <a href="{{route('showcontent',['vals'=>$ids,'title'=>$slug])}}">
                    <div class="card" id="cardsin">
                 <img src="{{$imgexp}}" width="100%" id="imzz">
                    <div class="card-body" style="direction: rtl">
                        <h5 id="titlesh5">{{$title}}</h5>
                        <p id="describeesec" style="color: #2c2c2d">{{$description}}</p>
                        <div class="row">
                            <div class="col-md-12" style="float: right;color: #2c2c2d">
                                <p style="text-align: right">

                                    <img @if(!empty($picuser)) src="{{$explodes}}" @else src="{{asset('prof.jpg')}}" @endif width="35px" style="border-radius: 50%;margin-right: 5px">
                    </a>
                                    <span id="styletime"> {{$date}} پیش </span><span id="stylebook"><i class="far fa-bookmark"></i></span> <a href="{{route('savelike',['vals'=>$ids,'category'=>"content"])}}"><span id="styleheart">
                                @if(\App\Models\like::check(\Illuminate\Support\Facades\Auth::id(),"content",$id)->count())
                                    <i class="fas fa-heart" style="font-size: 18px;padding-right: 5px;color: red"></i>
                                    @else
                                    <i class="far fa-heart" style="font-size: 18px;padding-right: 5px"></i>
                                @endif
                                    <span id="likecount">{{$likecount}}</span></span></a> </p>
                            </div>
                        </div>
                    </div>
                    </div>
                        @endforeach--}}
                </div>
            </div>
                <div class="container-fluid" style="padding-left: 0px;padding-right: 0px">
                    <div class="wrapper">
                        <div class="row" id="results" style="margin: 0px auto"></div>
                        <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
                    </div>
                </div>
                <br>
                <div class="container-fluid text-center">
                <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
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
<script>
  var site_url = "{{route('index')}}";
    var page = 1;

    load_more(page);

  $(document).ready(function() {
      $(document).on('click', '.btn-submitz', function () {
          page++;
          load_more(page);
      });
  });
  function load_more(page) {
      $.ajax({
          url: '?page=' + page,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                $('.ajax-loading').show();
            }
        })
            .done(function(data)
            {
                if(data.length == 0){
                    $('.ajax-loading').html("سابقه ایی وجود ندارد !");
                    $('.btn-submitz').hide();
                    return;
                }
                $('.ajax-loading').hide();
                $("#results").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server');
            });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
