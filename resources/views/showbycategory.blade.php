<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>ژاوی | جست و جو در دسته بندی {{$category}}</title>
    <meta content=",ژاوی{{$category}}جست و جو در سایت ژاوی," name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/icon/site.webmanifest')}}">
    <link href="{{asset('assets/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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
@if(Route::has('login'))
    @auth
    @else
        @include('intro')
    @endif
@endif
<br>
<section style="padding-bottom: 0px;padding-top: 0px;direction: rtl">
    <div class="container-fluid">
            <div class="container" style="border-radius: 20px">
                <p style="background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 100%, rgba(252,176,69,1) 100%);color: white;font-size: 35px;direction: rtl;text-align: right;font-weight: bolder;padding: 10px;border-radius: 50px"> دسته بندی : # {{$category}} <span style="text-align: left;float: left;padding: 5px;">{{$allcatecount}}</span></p>
                <br>
            </div>
        <div class="container-fluid">
            <div id="results" class="row"></div>
            <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
            <br><br>
            <div class="container-fluid text-center">
                <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
            </div>
            <br>
        </div>
        {{--    @foreach($givedata as $data)
                @php
                $id = $data->id;
                $title = $data->title;
$description = $data->description;
$slug = $data->slug;
$img = $data->picture;
$pic = explode('public',$img)[1];
$time = $data->time;
                    $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
                    $hash = new \Hashids\Hashids();
                    $ids = $hash->encode($id);
                    $category = $data->category;
                    $vip = $data->vip;
                @endphp
            <a href="{{route('showcontent',['vals'=>$ids,'title'=>$slug])}}">
        <div class="row col-md-8 text-center" style="margin: 0px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;border-radius: 20px;padding: 10px 5px">
            <div class="col-md-3">
                <div class="card-image" style="background-image: url($pic);height: 100%;width: 100%;padding-top: 0px;border-radius: 20px" data-image-full="{{$pic}}">
                    <img src="{{$pic}}" alt="Psychopomp" id="imcontent" />
                </div>
            </div>
            <div class="col-md-9">
                <i class="fas fa-align-right" style="float: left;font-size: 30px;color: #0c63e4;padding: 8px"></i>
                <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                    {{$title}}
                </div>
                <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                    <p>{{\Illuminate\Support\Str::limit($description,150)}}</p>
                </div>
                <p style="font-size: 12px;text-align: right;color: #1e2125"> {{$date}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> @if(!empty($vip)) <i class="fas fa-star" style="font-size: 10px;padding: 5px;color: gold" title="ویژه"></i> @endif </p>
            </div>
        </div>
            </a>
            <br>
                @endforeach
                @if(empty($data))
                   <div class="row col-md-9 text-center" style="text-align: center;margin: 0px auto">
                       <div class="d-flex text-center" style="padding: 12px;font-weight: bold;font-size: 20px;margin: 0px auto;background-color: #edefff">
موردی یافت نشد !!
                       </div>
                   </div>
                @endif
        </div>
--}}{{--
    <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
--}}{{--
    <br><br>
   --}}{{-- <div class="container-fluid text-center">
        <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
    </div>
    <br><br>--}}{{--
        @if(!empty($data))
    <div class="d-flex justify-content-center">
        {!! $givedata->appends(['sort'=>'department'])->links() !!}
    </div>
            @endif--}}
    </div>
</section>
@include('footer')
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
<script src="{{asset('js/lazypic.js')}}"></script>
<script>
    var site_url = "{{route('searchbycategory',['category'=>$categoryslug])}}";
    var page = 1;

    load_more(page);

    $(document).ready(function() {
        $(document).on('click', '.btn-submitz', function () {
            page++;
            load_more(page);
            require('public/js/lazypic');
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
    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload () {
                if(lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if(img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if(lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
