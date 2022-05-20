<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    @foreach($text as $res)
        @php
        $title = $res['title'];
$desc = $res['description'];
        @endphp
    @endforeach
    <title>ژاوی - {{$title}}</title>
    <meta content="{{$desc}}" name="description">
    {!! \Artesaos\SEOTools\Facades\SEOMeta::generate() !!}
    {!! \Artesaos\SEOTools\Facades\OpenGraph::generate() !!}
    {!! \Artesaos\SEOTools\Facades\TwitterCard::generate() !!}
    {!! \Artesaos\SEOTools\Facades\JsonLd::generate() !!}
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
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/sort.css')}}" rel="stylesheet">
</head>
<body style="background-color: rgba(249,247,254,0.34)">
@include('header')
<div class="progress-container fixed-top">
    <div class="progress-bar" id="myBar"></div>
</div>
<br>
<br>
@foreach($text as $res)
    @php
    $id = $res['id'];
$title = $res['title'];
$content = $res['content'];
$time = $res['time'];
$pic = $res['picture'];
$date = \Morilog\Jalali\Jalalian::forge($time)->ago();
$updatetime = $res['time_update'] ?? null;
if (!empty($updatetime)){
$dateup = \Morilog\Jalali\Jalalian::forge($updatetime)->ago() ?? null;
}
$user = $res['userid'];
$getsuser = \App\Models\User::find($user);
$username = $getsuser->name;
$usr = $getsuser->username;
$picuser= $getsuser->profile ?? null;
$userdesc = $getsuser->description ?? null;
if (!empty($picuser)){
$explodes = explode('public',$picuser)[1] ?? null;
}else{
    $explodes = asset('default.png');
}
$imgs = $res['picture'];
$imgexp = explode('public',$imgs)[1];
$sponser = $res['sponser'];
$sponserlink = $res['sponserlink'];
$vip = $res['vip'];
$category = $res['category'];
$hash = new \Hashids\Hashids();
$hashid = $hash->encode($id);
$cr = \Illuminate\Support\Facades\Crypt::encrypt($hashid);
$userid = \Illuminate\Support\Facades\Auth::id();
    @endphp
@endforeach
    <div class="container-fluid">
        <div class="row" style="margin: 0px">
            <div class="col-md-3">
                <div class="sticky" style="position: sticky;top: 100px">
                <div class="container-fluid">
                    <div id="aboutwrite">
                        <div class="container-fluid" style="padding: 0px;border-radius: 20px;border: 1px solid lightgrey">
<p style="text-align: center;padding: 8px;"><img src="{{$explodes}}" style="width: 50px;border-radius: 50%;text-align: center;border: 2px solid black;padding:1px"></p>
                            <p style="text-align: center;font-weight: bold;font-size: 15px">{{$username}}</p>
                            <p style="text-align: right;border-right: 3px solid gold;padding: 5px;font-size: 14px;font-weight: bold;line-height: 25px;direction: rtl">@if(!empty($userdesc)) {{$userdesc}} @endif</p>
                            <div class="text-center">
                                <form method="get" action="{{route('getbyusername',['us'=>$usr])}}">
                            <button style="border: 1px solid lightgrey;padding: 5px;border-radius: 24px;background-color: white;outline: none;box-shadow: none;font-weight: bold;font-size: 12px">مطالب بیشتر از این نویسنده</button>
                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="padding: 16px;background-color: white;border-radius: 25px">
                <div class="row col-md-12">
                    <p style="text-align: right"><span style="padding: 8px;font-size: 25px;color: #0c63e4;font-weight: bold">مطلب</span><i class="fas fa-align-right" style="font-size: 25px;color: #0c63e4;"></i></p>
                </div>
                <h1 style="font-weight: bold;font-size: 27px;font-weight: bold;text-align: right;direction: rtl;line-height: 48px;justify-content: right">{{$title}}</h1>

               {{-- <div class="row" style="direction: rtl;" id="showter">
                    <p><img @if(!empty($picuser)) src="{{$explodes}}" @else src="{{asset('prof.jpg')}}" @endif style="width: 35px;border-radius: 50%"><span style="padding: 0px 8px;font-size: 15px"> {{$username}} </span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69">{{$date}} </span> @if(!empty($dateup)) <span style="padding: 0px 8px;font-size: 15px;color: #6d6c69"> آپدیت : {{$dateup}}</span>@endif--}}{{--<span id="paper">
                             <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-paper-plane"></i><ul class="dropdown-menu menuus"><li><a href="#">لینک ها--}}{{----}}{{--<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i>--}}{{----}}{{--</a></li></ul></button>
                        </span>--}}{{--<form style="display: inline;position: relative"><span id="bookmarks" title="ذخیره ی این مطلب"><i class="far fa-bookmark"></i></span></form><span> --}}{{--<button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu menuus">
                <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
            </ul>--}}{{--
        --}}{{--</button>--}}{{--</span></p>
                </div>--}}
                <div class="row" style="direction: rtl;" id="showter">
                    <div class="col-md-12">
                        <p style="border: 1px solid lightgrey;border-radius: 25px;padding: 2px;margin-bottom: 0px"><img @if(!empty($picuser)) src="{{$explodes}}" @else src="{{asset('default.png')}}" @endif style="width: 35px;border-radius: 50%"><span style="padding: 0px 8px;font-size: 15px"> {{$username}} </span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69">{{$date}} </span> @if(!empty($dateup)) <span style="padding: 0px 8px;font-size: 15px;color: #6d6c69"> آپدیت : {{$dateup}}</span>@endif<span style="direction: rtl;font-size: 10px;padding: 5px;background-color: #ece8fa;color: #1e2125;border-radius: 20px;font-weight: bold;"> <i class="fas fa-clock" style="font-size: 9px;padding-left: 3px"></i>{{$timetoread}} </span></p>
                    </div>
                  {{--  <div class="col-md-6">
                        <p id="paper">
                          --}}{{--  <form style="display: inline;position: relative" method="post" action="{{route('usersaveds',['values'=>$cr])}}"> @csrf <span id="bookmarks" title="ذخیره ی این مطلب"><button style="border: 0px;background-color: transparent;outline: none;">
                                    @if(\Illuminate\Support\Facades\DB::table('saveduser')->where('contentid',$id)->where('userid',$userid)->count() == 0)
                                    <i class="far fa-bookmark"></i>
                                @else
                                        <i class="fas fa-bookmark"></i>
                                    @endif
                                </button></span></form>--}}{{--<span>
                                <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <div class="dropdown-menu socialef">
                 {!! $shareButtons !!}
            </div>
                                </button></span></p>
                        </span>
                    </div>--}}
                </div>
                <div class="col-md-12" id="colsk">
                    <div class="row" style="direction: rtl;">
                        <p style="margin-bottom: 0px"><img src="{{$explodes}}" style="width: 35px;border-radius: 50%"><span style="padding: 0px 8px;font-size: 15px"> {{$username}} </span><span style="padding: 0px 8px;font-size: 15px;color: #6d6c69">{{$date}}</span><span style="direction: rtl;font-size: 10px;padding: 5px;background-color: #ece8fa;color: #1e2125;border-radius: 20px;font-weight: bold;"> <i class="fas fa-clock" style="font-size: 9px;padding-left: 3px"></i>{{$timetoread}} </span></p>
                    </div>
                </div>

               {{-- <div class="col-md-12" style="text-align: center">
                <div class="row" id="showtes">
                    <p><span id="paper">
                             <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-paper-plane"></i><ul class="dropdown-menu menuus"><li><a href="#">لینک ها--}}{{--<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i>--}}{{--</a></li></ul></button>
                        </span><span id="bookmarks" title="ذخیره ی این مطلب"><i class="far fa-bookmark"></i></span><span> <button class="btn dropdown" type="button" data-toggle="dropdown" id="drops"><i class="fas fa-ellipsis-h"></i>
            <ul class="dropdown-menu menuus">
                <li><a href="#">گزارش خطا<i class="fas fa-bug" style="float:left;padding: 5px;font-size: 12px"></i></a></li>
            </ul>
        </button></span></p>
                </div>
                </div>--}}
                @if(!empty($sponser))
                    <br>
                <div class="row" style="direction: rtl;margin: 0px;padding: 15px;background-color: #e3ddfa;border: 5px dashed #8585fa">
                    <p>⚡ اسپانسر این بخش :</p>
                    <a href="{{$sponserlink}}"><p>{{$sponser}}</p></a>
                </div>
                @endif
                <br>
                <div class="row">
                    <input type="checkbox" id="zoomCheck" style="display: none">
                    <label for="zoomCheck">
                        <div class="card-image" style="background-image: url({{$imgexp}});" data-image-full="{{$imgexp}}">
                            <img class="zooms" src="{{$imgexp}}" alt="Psychopomp"/>
                        </div>
                    </label>
                    <br>
                    <div class="row" style="margin: 0px;color: #343532;padding: 0px;line-height: 40px;direction: rtl;font-size: 17px;">
<p>
   {{-- @if(!empty($vip))
        @if(\Illuminate\Support\Facades\Auth::check())
        @php
        $user = \Illuminate\Support\Facades\Auth::user();
$vip = $user->vip;
$exptime = $user->exptime;
        @endphp
        @if(!empty($vip) and $exptime >= \Carbon\Carbon::now()->toArray()['formatted'])
    {!! $content !!}
            @else
            {!! \Illuminate\Support\Str::limit($content,500) !!}
            <div class="row col-md-12" id="colemer">
                <h2 style="text-align: center"><i class="far fa-gem" style="font-size: 22px;padding: 5px"></i>محتوای ویژه<i class="far fa-gem" style="font-size: 22px;padding: 5px"></i></h2>
                <hr>
                        <p style="line-height: 30px">(( کاربر گرامی این یک محتوای ویژه است شما میتوانید با تهیه ی اشتراک ویژه تمامی مطالب وب سایت رو به صورت رایگان ببینید و استفاده کنید ))</p>
                        <br>
                        <div>
                            <form action="{{route('dashboard')}}" method="get">
                                @csrf
                                <button class="btn" id="buttonsend"> خرید اشتراک ویژه<i class="fas fa-arrow-left" style="font-size: 10px;padding: 5px"></i></button>
                            </form>
                        </div>
                    </div>
            @endif
                @elseif(empty($vip))
            {!! $content !!}
@endif
                @endif--}}
    @if(empty($vip))
        {!! $content !!}
        @else
        @if(\Illuminate\Support\Facades\Auth::check() and \Illuminate\Support\Facades\Auth::user()->exptime > \Carbon\Carbon::now()->toArray()['formatted'])
            {!! $content !!}
        @else
            {!! \Illuminate\Support\Str::limit($content,400) !!}
            <div class="row col-md-12" id="colemer">
                <h2 style="text-align: center"><i class="far fa-gem" style="font-size: 22px;padding: 5px"></i>محتوای ویژه<i class="far fa-gem" style="font-size: 22px;padding: 5px"></i></h2>
                <hr>
                        <p style="line-height: 30px">(( کاربر گرامی این یک محتوای ویژه است شما میتوانید با تهیه ی اشتراک ویژه تمامی مطالب وب سایت رو به صورت رایگان ببینید و استفاده کنید ))</p>
                        <br>
                        <div>
                            <form action="{{route('dashboard')}}" method="get">
                                @csrf
                                <button class="btn" id="buttonsend"> خرید اشتراک ویژه<i class="fas fa-arrow-left" style="font-size: 10px;padding: 5px"></i></button>
                            </form>
                        </div>
                    </div>
                    @endif
                        @endif
</p>
                    </div>
                    <div class="row col-md-12" style="margin: 5px auto;padding: 5px;margin-bottom: 10px">
                                @if(isset($previous))
                                    @php
                                        $title = $previous->title;
    $pic = $previous->picture ?? null;
    $img = explode('public',$pic)[1] ?? null;
    $time = $previous->time;
    $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
    if ($exp <= 7){
        $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>
    ';
    }else{
        $db = null;
    }
    $slug = $previous->slug;
    $id = $previous->id;
    $category = $previous->category;
    $hash = new \Hashids\Hashids();
    $enhash = $hash->encode($id);
                                    @endphp
                                    <div class="col-md-6">
                                        <a href="{{route('showcontent',['vals'=>$enhash,'title'=>$slug])}}">
                                            <p style="text-align: left;color: #1e2125"><span><i class="fas fa-caret-left" style="margin-top: 5px;font-size: 12px"></i> مطلب قبلی </span></p>
                                            <div class="card" style="border: 1px solid lightgrey;text-align: right;max-height:400px">
                                                <div class="card-header" style="padding: 0px;background-color: transparent">
                                                    <div class="card-image" style="background-image: url({{$img}});" data-image-full="{{$img}}">
                                                        <img src="{{$img}}" alt="Psychopomp"/>
                                                        {!! $db ?? null !!}
                                                    </div>
                                                </div>
                                                <div class="card-body" style="direction: rtl;padding-top: 5px">
                                                    <p style="font-size: 16px;color:black;font-weight: normal;line-height: 30px">{{$title}}</p>
                                                    <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                    @if(isset($next))
                                        @php
                                            $title = $next->title;
            $pic = $next->picture ?? null;
            $img = explode('public',$pic)[1] ?? null;
            $time = $next->time;
            $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
            if ($exp <= 7){
            $db = '                        <div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>
            ';
            }else{
                $db = null;
            }
            $slug = $next->slug;
            $id = $next->id;
            $category = $next->category;
            $hash = new \Hashids\Hashids();
            $enhash = $hash->encode($id);
                                        @endphp
                                        <div class="col-md-6">
                                            <a href="{{route('showcontent',['vals'=>$enhash,'title'=>$slug])}}">
                                                <p style="text-align: right;color: #1e2125"><span> مطلب بعدی <i class="fas fa-caret-right" style="margin-top: 5px;font-size: 12px"></i></span></p>
                                                <div class="card" style="border: 1px solid lightgrey;text-align: right;max-height:400px">
                                                    <div class="card-header" style="padding: 0px;background-color: transparent">
                                                        <div class="card-image" style="background-image: url({{$img}});" data-image-full="{{$img}}">
                                                            <img src="{{$img}}" alt="Psychopomp"/>
                                                            {!! $db ?? null !!}
                                                        </div>
                                                    </div>
                                                    <div class="card-body" style="direction: rtl;padding-top: 5px">
                                                        <p style="font-size: 16px;color:black;font-weight: normal;line-height: 30px">{{$title}}</p>
                                                        <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                    </div>
                    <hr>
                </div>
{{--
                    <button class="btn fixed-bottom" id="feeds"><i class="fas fa-arrow-up" style="float: left;padding: 5px"></i>باز خورد<i class="fas fa-arrow-up" style="float: right;padding: 5px"></i></button>
--}}
                <div id="myNav" class="overlay">
                    <br><br><br>
                    <div class="container-fluid">
                        <div class="card-header" id="headitnow">
                       <div class="col-md-12">
                           <div class="row">
                           <div class="col-md-6">
                               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span><i class="fas fa-times-circle" id="closf"></i></span></a>
                           </div>
                           <div class="col-md-6" style="text-align: right;font-size: 20px;">
                              نظرات ({{$commentcount}})
                           </div>
                           </div>
                       </div>
                        </div>
                        <div class="card-body" style="padding-right: 0px;padding-left: 0px">
                            <div class="row col-md-12" style="margin: 0px">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        @if(\Illuminate\Support\Facades\Auth::user()->comment == 'ok')
                           <button class="btngest" onclick="toggleText()">شما چی فکر میکنید ؟؟</button>
                                @endif
                                <div id="Myid" style="display: none">
                                    <br>
                                    @php
                                    $user = \Illuminate\Support\Facades\Auth::user();
$name = $user->name;
$pic = $user->profile ?? null;
$img = explode('public',$pic)[1] ?? null;
if (empty($img)){
    $img = asset('default.png');
}
                                    @endphp
                                    <p><span><img src="{{$img}}" width="35px" height="35px" style="float: right;border-radius: 50%"></span><span style="float:right;margin-top: 6px;margin-right: 7px">{{$name}}</span></p>
                                    <br>
                                    <form method="post" action="{{route('savedcomment')}}">
                                        @csrf
                                        <textarea id="textareais" name="comment" placeholder="نظر خودتون رو بنویسید ... " minlength="2" maxlength="300" required></textarea>
                                        <br>
                                        <input type="hidden" name="post" value="{{$cr}}">

                                        <button type="submit" id="formsyb">ارسال</button>
                                    </form>
                                </div>
                                        @endif
                                @else
                                    <button class="btngest">برای ثبت نظر ثبت نام کنید</button>
                                @endif
                            </div>
                        </div>
                        <hr>
                            @foreach($usercomment as $usrcmn)
                                @php
                                $id = $usrcmn->id;
                                    $comment = $usrcmn->content;
$time = $usrcmn->time;
$date = \Morilog\Jalali\Jalalian::forge($time)->ago();
$usercomment = $usrcmn->userid;
$hash = new \Hashids\Hashids();
$enhash = $hash->encode($id);
                                @endphp
                            <div class="row col-md-12" style="direction: rtl;margin-right: 0px">
                                <div class="row col-md-12" style="background-color: rgba(154,242,149,0.97);padding: 8px">
                                    <p><span><img src="{{$img}}" width="35px" height="35px" style="float: right;border-radius: 50%"></span><span style="float:right;margin-right:10px"> یاسین حسینی </span> <br> <span style="float: right;margin-right: 10px;color: #3f3e3e;font-size: 12px;margin-top: 8px">{{$date}}</span></p>
                                    <p style="font-size: 13px;line-height: 25px">{{$comment}}</p>
                                    <p style="text-align: center;font-size: 15px;font-weight: bold;color: #1e2125;">در انتظار تایید ... </p>
                                    <form method="post" action="{{route('deletethiscomments')}}" style="display: inline">
                                        @csrf
                                        <input type="hidden" name="value" value="{{$enhash}}">
                                        <button id="amnus" style="outline: none;background-color: transparent;font-size: 13px;box-shadow: none;border: 1px solid black">حذف این کامنت</button>
                                    </form>
{{--
                                    <p style="direction: rtl;float: left"><span style="float: right;margin-left: 10px;font-size: 14px"> 5 پاسخ <i class="fas fa-reply"></i></span> <span style="float: left;margin-left: 10px;font-size: 14px">پاسخ دادن</span></p>
--}}
                                </div>
                        </div>
                                <hr>
                            @endforeach
                        <div id="results" class="row"></div>
                        <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
                        <br>
                        <div class="container-fluid text-center">
                            <button class="btn btn-submitz" style="padding: 0px;margin: 0px;box-shadow: none;outline: none"><p style="border: 1px solid lightgrey;padding: 5px;font-size: 13px;font-weight: bold"><img src="{{asset('gut.gif')}}" style="width: 15px;margin: 0px 15px">برای دیدن موارد بیشتر کلیک کنید<img src="{{asset('gut.gif')}}" style="width: 15px;margin: 0px 15px"></p></button>
                        </div>
                       {{-- @if($commentcount == 0)
                            <div class="text-center" style="direction: rtl">
                                <p style="padding: 12px;background-color: #f2f1fd;border: 2px dashed #b9b8c1">نظری وجود نداره ! 🤔</p>
                            </div>
                            @elseif($commentcount == 3)
                            <div class="text-center">
                                <p style="border: 1px solid lightgrey;padding: 5px;font-size: 13px;font-weight: bold"><img src="{{asset('gut.gif')}}" style="width: 15px;margin: 0px 15px">برای دیدن موارد بیشتر اسکرول کنید<img src="{{asset('gut.gif')}}" style="width: 15px;margin: 0px 15px"></p>
                            </div>
                            @endif--}}
                        </div>
                    </div>
                <div class="row col-md-12">
                    @php
                        $content = "content";
$userid = \Illuminate\Support\Facades\Auth::id();
$hash = new \Hashids\Hashids();
$dehash = $hash->decode($post);
@endphp
                    <p><a href="{{route('savelike',['vals'=>$hashid,'category'=>$content])}}">
                            @if(!empty(\App\Models\like::check($dehash,'content',$userid)->count()))
                                <i class="fas fa-heart" style="font-size: 22px;padding-right: 5px;color: #1e2125"></i>
                            @elseif(empty(\App\Models\like::check($dehash,'content',$userid)->count()))
                                <i class="far fa-heart" style="font-size: 22px;padding-right: 5px;color: #1e2125"></i>
                            @endif
                            <span style="font-size: 14px;color: #1e2125">{{$like}}</span></a><i class="far fa-comment" style="font-size: 22px;margin: 0px 40px;color: #3a3939;cursor: pointer" onclick="openNav()"> <span style="font-size: 15px"> {{$commentcount}} </span></i> <span style="float: right;font-size: 12px;background-color: #313130;color: white;border-radius: 20px;padding: 8px">{{$categorys}}</span></p>
                </div>
                <div class="container">
                    <div class="row" style="margin: 0px">
                        <div class="card-title" style="font-size: 12px;color: #2e2e2c;text-align: center">
                            تبلیغات
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                @php
                                $all_tab = \Illuminate\Support\Facades\DB::table('tabs')->where('status',2)->get()->toArray();
$array_random = \Illuminate\Support\Arr::random($all_tab,1);
foreach ($array_random as $rand){
    $link = $rand->verticlalink;
    $banner = $rand->verticaltab ?? null;
    $exp = explode('public',$banner)[1] ?? null;
}
                                @endphp
                                <a href="{{$link}}">
                                <img src="{{$exp}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        <div class="col-md-1 text-center" id="rowid">
            <div class="sticky" style="position: sticky;top: 80px;border-radius: 25px;background-color: white">
                {!! $shareButtons !!}
            </div>
        </div>
                <div id="aboutwritesz">
                    <br>
                    <div class="container-fluid" style="padding: 0px;border-radius: 20px;border: 1px solid lightgrey">
                        <p style="text-align: center;padding: 8px;"><img src="{{$explodes}}" style="width: 50px;border-radius: 50%;text-align: center;border: 2px solid black;padding:1px"></p>
                        <p style="text-align: center;font-weight: bold;font-size: 15px">{{$username}}</p>
                        <p style="text-align: right;border-right: 3px solid gold;padding: 5px;font-size: 14px;font-weight: bold;line-height: 25px;direction: rtl">{{$userdesc}}</p>
                        <div class="text-center">
                            <button style="border: 1px solid lightgrey;padding: 5px;border-radius: 24px;background-color: white;outline: none;box-shadow: none;font-weight: bold;font-size: 12px">مطالب بیشتر از این نویسنده</button>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<div class="container-fluid fixed-bottom" id="shohiddnetd">
    <div class="row col-md-12" style="background-color: white;padding:12px;">
        <div id="socialef" class="text-center">
            {!! $shareButtons !!}
        </div>
    </div>
</div>
<br>
@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
<script>
    function openNav() {
        document.getElementById("myNav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("myNav").style.display = "none";
    }
</script>
{{--<script>
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
</script>--}}
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
<script>
    var site_url = "{{route('showcontent',['vals'=>$vals,'title'=>$slug])}}";
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
                    $('.ajax-loading').html("    <div class=\"text-center\" style=\"direction: rtl\">\n" +
                        "                                <p style=\"padding: 12px;background-color: #f2f1fd;border: 2px dashed #b9b8c1\">نظری وجود نداره ! 🤔</p>\n" +
                        "                            </div>");
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
<script src="{{asset('js/lazypic.js')}}"></script>
</body>
</html>
