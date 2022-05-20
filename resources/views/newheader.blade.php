<div id="top-loader" class="fixed-top"></div>
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        {{-- <h1 class="logo"><a href="{{route('index')}}">Zhavi Hub</a></h1>--}}
        <div class="logo d-flex align-items-left">
            <a href="{{route('index')}}"><span style="margin-right: 10px" id="spannoe"><img src="{{asset('lls.jpg')}}" width="35px" id="nowimf"></span></a>
            <form method="get" action="">
                <input type="text" name="q" placeholder="جست و جو کنید" id="searchnow" maxlength="200" required>
            </form>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar" style="direction: rtl">
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li><a class="getstarted scrollto" href="{{route('dashboard')}}" style="text-align: center">داشبورد</a></li>
                    @else
                        <li><a class="getstarted scrollto" href="{{route('register')}}" style="text-align: center">ورود / ثبت نام</a></li>
                    @endauth
                @endif
                <li><a type="button" data-bs-toggle="modal" style="border: none;box-shadow: none;outline: none;background-color: transparent;" data-bs-target="#exampleModal" class="nav-link scrollto">ارسال لینک </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 0px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="direction: rtl">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold">ارسال لینک های مفید</h5>
            </div>
            <div class="modal-body" style="direction: rtl">
                کاربر گرامی در این بخش شما میتوانید لینک مطالبی که برای شما جالب بوده و یا برای شما مفید بوده رو در این قسمت ثبت کنید
            </div>
            <div class="row col-md-12" style="margin: 0px auto;direction: rtl">
                <form>
                    <input type="text" name="link" placeholder="نام و نام خانوادگی شما" id="inputlink">

                    <input type="text" name="link" placeholder="لینک مطلب رو وارد کنید" id="inputlink">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" style="border: 1px solid lightgrey;font-size: 16px;font-weight: bold;margin-bottom: 10px;border-radius: 25px;padding: 5px 15px">ارسال</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="border: 1px solid lightgrey;font-size: 16px;font-weight: bold;margin-bottom: 10px;border-radius: 25px;padding: 5px 15px">بستن</button>

            </div>
        </div>
    </div>
</div>
