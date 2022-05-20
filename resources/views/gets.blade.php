<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    <title>ژاوی | {{$linkname}}</title>
    <meta content="ژاوی - {{$linkname}}" name="keywords">
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
@foreach($gives as $give)
    @php
    $title = $give['description'];
    @endphp
    {!! $title !!}
            <section class="row" style="direction: rtl;padding-top: 0px;margin-right: 5px">
                <div class="dropdown" style="position: absolute;padding: 0px 25px;">
                    <button class="btn btn-primary" type="button" data-toggle="dropdown" id="gdtdd">بر اساس
                        <i class="fas fa-caret-down" style="font-size: 12px;padding: 5px"></i>
                    </button>
                    <ul class="dropdown-menu nbhd" style="min-width: 183px;padding: 0px;border-radius: 0px">
                        <a href="{{route('getscons',['var'=>$var,'sort'=>'oldest'])}}" style="color: #1e2125"><li>قدیمی ترین</li></a>
                        <a href="{{route('getscons',['var'=>$var,'sort'=>'newest'])}}" style="color: #1e2125"><li>جدید ترین</li></a>
                    </ul>
                </div>
            </section>
            <section class="row" style="direction: rtl;padding-top: 0px;margin-right: 5px;">
                <div class="text-center" style="direction: rtl">
                    <form class="text-center" method="get" action="{{route('searchinte',['names'=>$var])}}">
                        <input type="text" name="search" placeholder="جست و جو کنید" style="margin: 5px auto;width: 80%;border-radius: 25px;padding: 15px;outline: none;border: 1px solid lightgrey;box-shadow: none" maxlength="200">
                    </form>
                </div>
            </section>
            <section class="row" style="direction: rtl;padding-top: 0px;margin-right: 5px">
                <div style="position: absolute;padding: 0px 25px;">
                    @if($sort == 'newest')
                        <p style="direction: rtl;font-weight: bold;padding: 8px"><span style="background-color: #dbddff;padding: 8px;border-radius: 5px"><i class="fas fa-sort-alpha-up-alt" style="color: #3f3d41"></i> جدیدترین {{$linkname}} </span></p>
                        @elseif($sort == 'oldest')
                        <p style="direction: rtl;font-weight: bold;padding: 8px"><span style="background-color: #dbddff;padding: 8px;border-radius: 5px"><i class="fas fa-sort-alpha-down" style="color: #3f3d41"></i> قدیمی ترین {{$linkname}}</span></p>
                    @else
                    {{abort(404)}}
                    @endif
                </div>
            </section>
    @endforeach
    <div id="results" class="row"></div>
    <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
    <br><br>
    <div class="container-fluid text-center">
        <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
    </div>
        <br><br>
    </div>
</section>
@include('footer')
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
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
<script src="{{asset('js/lazypic.js')}}"></script>
<script>
    var site_url = "{{route('getscons',['var'=>$var,'sort'=>$sort])}}";
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
