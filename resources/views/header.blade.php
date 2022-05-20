{{--<section id="topbar" class="d-flex">
    <div class="container-fluid d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">

            @if (Route::has('login'))
                <div class="hidden" style="color: white">
                    @auth
                        <a href="{{ route('dashboard',\Illuminate\Support\Facades\App::getLocale())}}" class="text-sm text-gray-700 underline" style="color: white">داشبورد</a>
                        <i class="fas fa-sign-in-alt"></i>
                    @else
                        <a href="{{ route('login',\Illuminate\Support\Facades\App::getLocale()) }}" class="text-sm text-gray-700 underline" style="color: white">ورود</a>
                        /
                        @if (Route::has('register'))
                            <a href="{{ route('register',\Illuminate\Support\Facades\App::getLocale()) }}" class="ml-4 text-sm text-gray-700 underline" style="color: white">ثبت نام</a><i class="fas fa-user-lock" style="padding: 4px;color: white;font-size: 10px"></i>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <nav >
    <ul style="margin: 0px;margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;">
        <li style="list-style-type: none"><a class="nav-link scrollto active getstarted" style="padding:8px;margin-bottom: 2px;cursor: pointer;background-color: transparent;border-radius: 0px;color: white;font-weight: normal;font-size: 12px">🤔 ما کی هستیم ؟؟ </a></li>
        <li style="list-style-type: none"><a class="nav-link scrollto active getstarted" style="padding:8px;margin-bottom: 2px;cursor: pointer;background-color: transparent;border-radius: 0px;color: white;font-weight: normal;font-size: 12px">📍 سوالات</a></li>
    </ul>
            </nav>
        </div>
    </div>
</section>--}}
<header id="header" class="header container-fluid fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-left">
            <a href="{{route('index')}}"><span style="margin-right: 10px" id="spannoe"><img src="{{asset('lls.jpg')}}" width="40px" id="nowimf"></span></a>
            <form method="get" action="{{route('getinallsnow')}}">
                <input type="text" name="q" placeholder="جست و جو کنید" id="searchnow" maxlength="200" required>
            </form>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                @php
                $alllinks = \Illuminate\Support\Facades\DB::table('links')->where('status','link')->get()->toArray();
                $allmatlab = \Illuminate\Support\Facades\DB::table('links')->where('status','dropdown')->where('for',"matlab")->get()->toArray();
                @endphp
                @foreach($alllinks as $link)
                    @php
                    $linked = $link->link;
$slug = $link->slug;
                    @endphp
                <li title="{!! $linked !!}"><a class="nav-link scrollto active getstarted" href="{{route('getscons',['var'=>$slug,'sort'=>'newest'])}}" style="font-size: 15px;color: #1a202c;font-weight: normal" id="wwer">{{$linked}}</a></li>
                @endforeach
                 <li class="dropdown"><a href="#" class="getstarted" id="wwer"><i class="fas fa-chevron-down" style="margin: 0px 5px;font-size: 10px;color: #1a202c"></i><span style="font-size: 15px;color: #1a202c;font-weight: normal">مطالب</span></a>
                     <ul>
                         @foreach($allmatlab as $linkz)
                             @php
                                 $linked = $linkz->link;
 $slugs = $linkz->slug;
                             @endphp
                             <li><a href="{{route('getscons',['var'=>$slugs,'sort'=>'newest'])}}">{{$linked}}</a></li>
                             @endforeach
                     </ul>
                 </li>
                {{--
                                <li><a class="nav-link scrollto active" href="#hero">خانه<i class="fas fa-home" style="font-size: 14px;padding: 5px"></i></a></li>
                                <li><a class="nav-link scrollto" href="#about">تماس با ما<i class="fas fa-phone" style="font-size: 12px;padding: 5px"></i></a></li>
                                <li><a href="blog.html">پادکست ها<i class="fas fa-podcast" style="font-size: 14px;padding: 5px"></i></a></li>
                                <li><a href="{{route('content')}}">مطالب<i class="far fa-file-alt" style="font-size: 14px;padding: 5px"></i></a></li>
                --}}
                {{-- <li>
                     @if(Route::has('login'))
                         @auth
                             <a class="getstarted scrollto" href="{{ route('dashboard') }}" style="font-family: Vazir"><i class="fas fa-sign-in-alt" style="font-size: 12px;padding-right: 6px"></i>داشبورد</a>
                         @else
                             <a class="getstarted scrollto" href="{{ route('login') }}" style="font-family: Vazir">ورود / ثبت نام<i class="fas fa-user" style="font-size: 12px;padding: 5px"></i></a>
                         @endif
                     @endif
                 </li>--}}
                @if(Route::has('login'))
                    @auth
                      {{--  <li>
                            <a class="getstarted scrollto" id="createnowsave" href="{{ route('savedcontents') }}" style="font-family: Vazir">ذخیره شده ها</a>
                        </li>--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'USR')
                        <li>
                            <a class="getstarted scrollto" id="createnows" href="{{route('dashboard')}}#changeidt" type="button" style="font-family: Vazir">ویرایش پروفایل</a>
                        </li>
                        @endif
                        <li>
                            <form method="post" action="{{route('logout')}}">
                                @csrf
                            <button type="submit" class="getstarted scrollto" id="createnowsexit" style="font-family: Vazir;outline: none;border: 0px">خروج از حساب کاربری</button>
                            </form>
                        </li>
                 @php
                 if (\Illuminate\Support\Facades\Auth::check()){
    if (\Illuminate\Support\Facades\Auth::user()->role == 'WRT'){
        $rol = ' <li>
                            <a class="getstarted scrollto" data-toggle="modal" data-target="#myModal" id="createnows" type="button" style="font-family: Vazir"><i class="fas fa-plus-circle"></i> پست</a>
                        </li>';
        $edm = '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" id="modalbodys">
                <div class="row col-md-12 text-center" id="nowiconin">
                    <div><a href="'.route('contentuser').'"><span><i class="fas fa-file-alt"><br><span style="font-size: 12px">متن</span></i></span></a></div>
                </div>
                <br>
                <div class="container-fluid text-center">
                    <button class="close" data-dismiss="modal" id="modalclosebutton">بستن</button>
                </div>
            </div>
        </div>

    </div>
</div>';
    }
    }
          if (\Illuminate\Support\Facades\Auth::check()){
    if (\Illuminate\Support\Facades\Auth::user()->role == 'ADM' and \Illuminate\Support\Facades\Auth::id() == 1){
        $adm ='<li>
                            <a class="getstarted scrollto" id="createnows" href="'.route('Adminhome').'" type="button" style="font-family: Vazir">ادمین</a>
                        </li> ';
    }
}
                 @endphp
                    {!! $rol ?? null !!}
                        {!! $adm ?? null !!}
                        <li>
                            @php
                            $prof = \Illuminate\Support\Facades\Auth::user()->profile ?? null;
$pic = explode('public',$prof)[1] ?? null;
                            @endphp
                            <a class="scrollto" id="profimagenow" href="{{ route('dashboard') }}" style="font-family: Vazir"><img @if(!empty(\Illuminate\Support\Facades\Auth::user()->profile)) src="{{$pic}}" @else src="{{asset('default.png')}}" @endif width="35px"></a>
                        </li>
                    @else
                        <li>
                            <a class="getstarted scrollto" id="getstartedloginbu" href="{{ route('login') }}" style="font-family: Vazir">ورود</a>
                        </li>
                        <li>
                            <a class="getstarted scrollto" href="{{ route('register') }}" style="font-family: Vazir">ثبت نام</a>
                        </li>                    @endif
                @endif
                <li id="afterscroll">
                    <a class="getstarted scrollto" id="wwer">خانه<span style="padding-left: 5px">🏠</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer" >کتاب الکترونیک<span style="padding-left: 5px">📚</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer">سوالات<span style="padding-left: 5px">❓</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer">دوره ها<span style="padding-left: 5px">👨‍🏫</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer">پادکست ها<span style="padding-left: 5px">🎙️</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer">ویدئو ها<span style="padding-left: 5px">🎞️</span></a>
                </li>
                <li id="afterscroll">
                    <a href="" class="getstarted scrollto" id="wwer">دسته بندی ها<span style="padding-left: 5px">💡</span></a>
                </li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
{!! $edm ?? null !!}
