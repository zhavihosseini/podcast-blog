<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://kit.fontawesome.com/9067ae8a47.js" crossorigin="anonymous"></script>
    {!! \Artesaos\SEOTools\Facades\SEOMeta::generate() !!}
    {!! \Artesaos\SEOTools\Facades\OpenGraph::generate() !!}
    {!! \Artesaos\SEOTools\Facades\TwitterCard::generate() !!}
    {!! \Artesaos\SEOTools\Facades\JsonLd::generate() !!}
    <meta content="ژاوی , کسب و کار آنلاین , درآمد آنلاین , کارآفرینی , موفقیت در اینترنت , موفقیت , اینستاگرام , تویتر , کارآفرینی در نوجوانی , موفقیت سریع , سرویس ژاوی " name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/icon/site.webmanifest')}}">
    <link href="{{asset('assets/icon/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LD3JH3C841"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LD3JH3C841');
</script>
<body>
@include('google-analytics::script')
@include('header')
@if(Route::has('login'))
    @auth
    @else
@include('intro')
    @endif
@endif
<br>
<section style="padding-bottom: 0px;padding-top: 2px">
    <div class="container-fluid">
            <div class="row col-md-12">
                <div class="col-md-6">
                    @if(!empty($allfivecontent[0]))
                        @php
                            $id = $allfivecontent[0]->id;
                            $title = $allfivecontent[0]->title;
                 $description = $allfivecontent[0]->description;
                 $category = $allfivecontent[0]->category;
                 $img = $allfivecontent[0]->picture;
                 $pic = explode('public',$img)[1];
                 $slug = $allfivecontent[0]->slug;
                 $time = $allfivecontent[0]->time;
                 $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                 if ($exp <= 7){
                                    $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                }else{
                                    $db = null;
                                }
                 $hash = new \Hashids\Hashids();
                 $hashid = $hash->encode($id);
                        @endphp
                            <div class="card" style="border: 1px solid lightgrey">
                                <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                        <img src="{{$pic}}" alt="Psychopomp" height="400px"/>
                                        {!! $db ?? null !!}
                                        <div class="card-body" style="direction: rtl;text-align: right;background-color: white">
                                            <p style="font-size: 19px;margin-bottom: 8px;color:black;font-weight: bold">{{$title}}</p>
                                            <p style="font-size: 14px;margin-bottom: 8px;color: #1e2125;font-weight: bold;margin: 5px auto">{{\Illuminate\Support\Str::limit($description, 150)}}</p>
                                            <br>
                                            <p class="row" style="margin-bottom: 0px"><span style="color: white;font-size: 13px;text-align: right;" class="col-md-6"><span style="background-color: #1e2125;padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    @endif
                        @if(!empty($allfivecontent[1]))
                            @php
                                $id = $allfivecontent[1]->id;
                                $title = $allfivecontent[1]->title;
                     $description = $allfivecontent[1]->description;
                     $category = $allfivecontent[1]->category;
                     $img = $allfivecontent[1]->picture;
                     $pic = explode('public',$img)[1];
                     $slug = $allfivecontent[1]->slug;
                     $time = $allfivecontent[1]->time;
                     $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                     if ($exp <= 7){
                                        $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                    }else{
                                        $db = null;
                                    }
                     $hash = new \Hashids\Hashids();
                     $hashid = $hash->encode($id);
                            @endphp

                                <div class="card" style="border: 1px solid lightgrey">
                                    <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                                        <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                            <img src="{{$pic}}" alt="Psychopomp" height="400px"/>
                                            {!! $db ?? null !!}
                                            <div class="card-body" style="direction: rtl;text-align: right;background-color: white">
                                                <p style="font-size: 19px;margin-bottom: 8px;color:black;font-weight: bold">{{$title}}</p>
                                                <p style="font-size: 14px;margin-bottom: 8px;color: #1e2125;font-weight: bold;margin: 5px auto">{{\Illuminate\Support\Str::limit($description, 150)}}</p>
                                                <br>
                                                <p class="row" style="margin-bottom: 0px"><span style="color: white;font-size: 13px;text-align: right;" class="col-md-6"><span style="background-color: #1e2125;padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        @endif
                </div>
                <div class="col-md-6">
                    <div class="row col-md-12">
                        <p style="margin-bottom: 0px"><span style="text-align: right;background-color: rgba(52,51,55,0.92);float: right;font-size: 16px;color: white;padding: 6px;margin-bottom: 10px">جدید ترین مطالب</span></p>
                    </div>
                    @if(!empty($allfivecontent[2]))
                        @php
                            $id = $allfivecontent[2]->id;
                            $title = $allfivecontent[2]->title;
                 $description = $allfivecontent[2]->description;
                 $category = $allfivecontent[2]->category;
                 $img = $allfivecontent[2]->picture;
                 $pic = explode('public',$img)[1];
                 $slug = $allfivecontent[2]->slug;
                 $time = $allfivecontent[2]->time;
                 $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                 if ($exp <= 7){
                                    $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                }else{
                                    $db = null;
                                }
                 $hash = new \Hashids\Hashids();
                  $vip = $allfivecontent[2]->vip;
                        if (!empty($vip)){
                            $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                        }
                         $time = $allfivecontent[2]->time;
                        $dates = \Morilog\Jalali\Jalalian::forge($time)->ago();
                 $hashid = $hash->encode($id);
                        @endphp
                        <div class="row col-md-12 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;direction: rtl">
                            <a href="{{ route('showcontent', ['vals' => $hashid, 'title' => $slug])}}">
                                <div class="col-md-12" style="margin-bottom: 5px">
                                    <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                                {{$title}}
                            </div>
                            <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                                <p>{{\Illuminate\Support\Str::limit($description,100)}}</p>
                            </div>
                            <p style="font-size: 12px;text-align: right;color: #1e2125"> {{$dates}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> {!! $vips ?? null !!} </p>
                    </div>
                            </a>
                        </div>
                    @endif
                    @if(!empty($allfivecontent[3]))
                        @php
                            $id = $allfivecontent[3]->id;
                            $title = $allfivecontent[3]->title;
                 $description = $allfivecontent[3]->description;
                 $category = $allfivecontent[3]->category;
                 $img = $allfivecontent[3]->picture;
                 $pic = explode('public',$img)[1];
                 $slug = $allfivecontent[3]->slug;
                 $time = $allfivecontent[3]->time;
                 $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                 if ($exp <= 7){
                                    $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                }else{
                                    $db = null;
                                }
                 $hash = new \Hashids\Hashids();
                  $vip = $allfivecontent[3]->vip;
                        if (!empty($vip)){
                            $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                        }
                         $time = $allfivecontent[3]->time;
                        $dates = \Morilog\Jalali\Jalalian::forge($time)->ago();
                 $hashid = $hash->encode($id);
                        @endphp
                        <div class="row col-md-12 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;direction: rtl">
                            <a href="{{ route('showcontent', ['vals' => $hashid, 'title' => $slug])}}">
                            <div class="col-md-12" style="margin-bottom: 5px">
                                <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                                    {{$title}}
                                </div>
                                <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                                    <p>{{\Illuminate\Support\Str::limit($description,100)}}</p>
                                </div>
                                <p style="font-size: 12px;text-align: right;color: #1e2125"> {{$dates}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> {!! $vips ?? null !!} </p>
                            </div>
                            </a>
                        </div>
                    @endif
                    @if(!empty($allfivecontent[4]))
                        @php
                            $id = $allfivecontent[4]->id;
                            $title = $allfivecontent[4]->title;
                 $description = $allfivecontent[4]->description;
                 $category = $allfivecontent[4]->category;
                 $img = $allfivecontent[4]->picture;
                 $pic = explode('public',$img)[1];
                 $slug = $allfivecontent[4]->slug;
                 $time = $allfivecontent[4]->time;
                 $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                 if ($exp <= 7){
                                    $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                }else{
                                    $db = null;
                                }
                 $hash = new \Hashids\Hashids();
                  $vip = $allfivecontent[4]->vip;
                        if (!empty($vip)){
                            $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                        }
                         $time = $allfivecontent[4]->time;
                        $dates = \Morilog\Jalali\Jalalian::forge($time)->ago();
                 $hashid = $hash->encode($id);
                        @endphp
                        <div class="row col-md-12 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;direction: rtl">
                            <a href="{{ route('showcontent', ['vals' => $hashid, 'title' => $slug])}}">
                            <div class="col-md-12" style="margin-bottom: 5px">
                                <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                                    {{$title}}
                                </div>
                                <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                                    <p>{{\Illuminate\Support\Str::limit($description,100)}}</p>
                                </div>
                                <p style="font-size: 12px;text-align: right;color: #1e2125"> {{$dates}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> {!! $vips ?? null !!} </p>
                            </div>
                            </a>
                        </div>
                    @endif
                    @if(!empty($allfivecontent[5]))
                        @php
                            $id = $allfivecontent[5]->id;
                            $title = $allfivecontent[5]->title;
                 $description = $allfivecontent[5]->description;
                 $category = $allfivecontent[5]->category;
                 $img = $allfivecontent[5]->picture;
                 $pic = explode('public',$img)[1];
                 $slug = $allfivecontent[5]->slug;
                 $time = $allfivecontent[5]->time;
                 $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                 if ($exp <= 7){
                                    $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                }else{
                                    $db = null;
                                }
                 $hash = new \Hashids\Hashids();
                  $vip = $allfivecontent[5]->vip;
                        if (!empty($vip)){
                            $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                        }
                         $time = $allfivecontent[5]->time;
                        $dates = \Morilog\Jalali\Jalalian::forge($time)->ago();
                 $hashid = $hash->encode($id);
                        @endphp
                        <div class="row col-md-12 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;direction: rtl">
                            <a href="{{ route('showcontent', ['vals' => $hashid, 'title' => $slug])}}">
                            <div class="col-md-12" style="margin-bottom: 5px">
                                <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                                    {{$title}}
                                </div>
                                <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                                    <p>{{\Illuminate\Support\Str::limit($description,100)}}</p>
                                </div>
                                <p style="font-size: 12px;text-align: right;color: #1e2125"> {{$dates}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> {!! $vips ?? null !!} </p>
                            </div>
                            </a>
                        </div>
                    @endif
                    <hr>
                    <div class="row col-md-12">
                        <p style="margin-bottom: 0px">
                            <span style="text-align: right;background-color: rgba(52,51,55,0.92);float: right;font-size: 16px;color: white;padding: 6px;margin-bottom: 10px;margin-top: 10px;">مطالب آپدیت شده اخیر</span>
                        </p>
                    </div>
                   {{-- @foreach(array_slice($newupdate, 0, 5 ) as $newcontent)
                        @php
                            $id = $newcontent->id;
                                   $title = $newcontent->title;
                        $description = $newcontent->description;
                        $category = $newcontent->category;
                        $img = $newcontent->picture;
                        $pic = explode('public',$img)[1];
                        $slug = $newcontent->slug;
                        $time = $newcontent->time;
                        $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                        if ($exp <= 7){
                                           $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                       }else{
                                           $db = null;
                                       }
                        $vip = $newcontent->vip;
                        if (!empty($vip)){
                            $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                        }
                        $hash = new \Hashids\Hashids();
                        $hashid = $hash->encode($id);
                        $timeupdate = $newcontent->time_update;
                        $dates = \Morilog\Jalali\Jalalian::forge($timeupdate)->ago();
                        @endphp
                        <div class="row col-md-12 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;direction: rtl">
                            <a href="{{ route('showcontent', ['vals' => $hashid, 'title' => $slug])}}">
                        <div class="col-md-12" style="margin-bottom: 5px">
                            <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                                {{$title}}
                            </div>
                            <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                                <p>{{\Illuminate\Support\Str::limit($description,100)}}</p>
                            </div>
                            <p style="font-size: 12px;text-align: right;color: #1e2125">آپدیت {{$dates}} <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">{{$category}}</span> {!! $vips ?? null !!} </p>
                        </div>
                        </a>
                    </div>
                    @endforeach--}}
                </div>
            </div>
    </div>
</section>
{{--
<section style="padding-bottom: 0px;padding-top: 2px">
    <div class="container-fluid">
        <div class="container-fluid">
        <div class="card-header" style="direction: rtl;text-align: right;font-size: 35px;font-weight: bolder;border-bottom: 0px;background-color:transparent;margin-right: 0px">
            <i class="fas fa-angle-left" style="font-size: 20px"></i> جدید ترین مطالب وبسایت
        </div>
            <br>
        </div>
        <div class="row col-md-12">
            @if(!empty($allfivecontent[0]))
           @php
           $id = $allfivecontent[0]->id;
           $title = $allfivecontent[0]->title;
$description = $allfivecontent[0]->description;
$category = $allfivecontent[0]->category;
$img = $allfivecontent[0]->picture;
$pic = explode('public',$img)[1];
$slug = $allfivecontent[0]->slug;
$time = $allfivecontent[0]->time;
$exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
$hash = new \Hashids\Hashids();
$hashid = $hash->encode($id);
           @endphp
            <div class="col-md-6">
                <div class="card" style="border: 1px solid lightgrey;border-radius: 10px">
                    <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                        <img src="{{$pic}}" alt="Psychopomp" height="400px"/>
                        {!! $db ?? null !!}
                    <div class="card-body" style="direction: rtl;text-align: right;background-color: white">
                        <p style="font-size: 19px;margin-bottom: 8px;color:black;font-weight: bold">{{$title}}</p>
                        <p style="font-size: 14px;margin-bottom: 8px;color: #1e2125;font-weight: bold;margin: 5px auto">{{\Illuminate\Support\Str::limit($description, 150)}}</p>
                        <br>
                        <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                    </div>
                    </div>
                    </a>
                </div>
            </div>
            @endif
            <div class="col-md-6">
                <div class="row">
                    @if(!empty($allfivecontent[1]))
                    @php
                        $id = $allfivecontent[1]->id;
                        $title = $allfivecontent[1]->title;
             $description = $allfivecontent[1]->description;
             $category = $allfivecontent[1]->category;
             $img = $allfivecontent[1]->picture;
             $pic = explode('public',$img)[1];
             $slug = $allfivecontent[1]->slug;
             $time = $allfivecontent[1]->time;
             $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
             if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
             $hash = new \Hashids\Hashids();
             $hashid = $hash->encode($id);
                    @endphp
                    <div class="col-md-6">
                        <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                        <div class="card" style="border: 1px solid lightgrey;border-radius: 10px" id="carfg">
                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                    <img src="{{$pic}}" alt="Psychopomp"/>
                                    {!! $db ?? null !!}
                                </div>
                            </div>
                            <div class="card-body" style="direction: rtl;padding-top: 5px">
                                <p style="font-size: 15px;margin-bottom: 8px;color:black;font-weight: bold">{{\Illuminate\Support\Str::limit($title,75)}}</p>
                                <br>
                                <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endif
                    @if(!empty($allfivecontent[2]))
                    @php
                        $id = $allfivecontent[2]->id;
                        $title = $allfivecontent[2]->title;
             $description = $allfivecontent[2]->description;
             $category = $allfivecontent[2]->category;
             $img = $allfivecontent[2]->picture;
             $pic = explode('public',$img)[1];
             $slug = $allfivecontent[2]->slug;
             $time = $allfivecontent[2]->time;
             $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
             if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
             $hash = new \Hashids\Hashids();
             $hashid = $hash->encode($id);
                    @endphp
                    <div class="col-md-6">
                        <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                            <div class="card" style="border: 1px solid lightgrey;border-radius: 10px" id="carfg">
                                <div class="card-header" style="padding: 0px;background-color: transparent">
                                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                        <img src="{{$pic}}" alt="Psychopomp"/>
                                       {!! $db ?? null !!}
                                    </div>
                                </div>
                                <div class="card-body" style="direction: rtl;padding-top: 5px">
                                    <p style="font-size: 15px;margin-bottom: 8px;color:black;font-weight: bold">{{\Illuminate\Support\Str::limit($title,75)}}</p>
                                    <br>
                                    <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(!empty($allfivecontent[3]))
                    @php
                        $id = $allfivecontent[3]->id;
                        $title = $allfivecontent[3]->title;
             $description = $allfivecontent[3]->description;
             $category = $allfivecontent[3]->category;
             $img = $allfivecontent[3]->picture;
             $pic = explode('public',$img)[1];
             $slug = $allfivecontent[3]->slug;
             $time = $allfivecontent[3]->time;
             $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
             if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
             $hash = new \Hashids\Hashids();
             $hashid = $hash->encode($id);
                    @endphp
                    <div class="col-md-6">
                        <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                            <div class="card" style="border: 1px solid lightgrey;border-radius: 10px" id="carfg">
                                <div class="card-header" style="padding: 0px;background-color: transparent">
                                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                        <img src="{{$pic}}" alt="Psychopomp"/>
                                        {!! $db ?? null !!}
                                    </div>
                                </div>
                                <div class="card-body" style="direction: rtl;padding-top: 5px">
                                    <p style="font-size: 15px;margin-bottom: 8px;color:black;font-weight: bold">{{\Illuminate\Support\Str::limit($title,75)}}</p>
                                    <br>
                                    <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(!empty($allfivecontent[4]))
                    @php
                        $id = $allfivecontent[4]->id;
                        $title = $allfivecontent[4]->title;
             $description = $allfivecontent[4]->description;
             $category = $allfivecontent[4]->category;
             $img = $allfivecontent[4]->picture;
             $pic = explode('public',$img)[1];
             $slug = $allfivecontent[4]->slug;
             $time = $allfivecontent[4]->time;
             $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
             if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
             $hash = new \Hashids\Hashids();
             $hashid = $hash->encode($id);
                    @endphp
                    <div class="col-md-6">
                        <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                            <div class="card" style="border: 1px solid lightgrey;border-radius: 10px" id="carfg">
                                <div class="card-header" style="padding: 0px;background-color: transparent">
                                    <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                        <img src="{{$pic}}" alt="Psychopomp"/>
                                        {!! $db ?? null !!}
                                    </div>
                                </div>
                                <div class="card-body" style="direction: rtl;padding-top: 5px">
                                    <p style="font-size: 15px;margin-bottom: 8px;color:black;font-weight: bold">{{\Illuminate\Support\Str::limit($title,75)}}</p>
                                    <br>
                                    <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                        @endif
                </div>
            </div>
    </div>
    </div>
</section>--}}
<br>
<section class="text-center" style="padding-bottom: 0px">
    <div class="container-fluid">
        <p style="color: #1d1d3c;font-size: 18px;direction: rtl;text-align: center"><span style="background-color: #1e2125;color: white;padding: 5px">انگیزشی</span></p>
        <br>
        <div style="direction: rtl">
            <div class="row col-md-12">
                @php
                $allmotivate = \Illuminate\Support\Facades\DB::table('content')->where('category',"انگیزشی")->get()->toArray();
$arrayrandom = \Illuminate\Support\Arr::random($allmotivate,2);
                @endphp
                @foreach ($arrayrandom as $randcontent)
                    @php
                        $id = $randcontent->id;
                                      $title = $randcontent->title;
                           $description = $randcontent->description;
                           $category = $randcontent->category;
                           $img = $randcontent->picture;
                           $pic = explode('public',$img)[1];
                           $slug = $randcontent->slug;
                           $time = $randcontent->time;
                           $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
                           if ($exp <= 7){
                                              $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                                          }else{
                                              $db = null;
                                          }
                           $vip = $randcontent->vip;
                           if (!empty($vip)){
                               $vips = '<i class="fas fa-crown" title="ویژه" style="color:gold;padding:8px"></i>';
                           }
                           $hash = new \Hashids\Hashids();
                           $hashid = $hash->encode($id);
                           $time = $randcontent->time;
                           $dates = \Morilog\Jalali\Jalalian::forge($time)->ago();
                    @endphp
                <div class="col-md-3">
                    <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                        <div class="card" style="border-radius: 0px" id="carfg">
                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                                    <img src="{{$pic}}" alt="Psychopomp" />
                                </div>
                            </div>
                            <div class="card-body" style="direction: rtl;padding-top: 5px;padding-right: 4px;text-align: right">
                                <p style="font-size: 14px;font-weight: bold;margin-bottom: 8px;color:black">{{\Illuminate\Support\Str::limit($title,150)}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<hr>
{{--<section id="counts" class="counts">
   --}}{{-- <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="fas fa-users"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 15px;font-weight: bold">تعداد کاربران</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="fas fa-user-astronaut" style="background-color: gold"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 15px;font-weight: bold;">کاربران ویژه</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="fab fa-instagram"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 15px;font-weight: bold">تعداد کاربران اینستاگرام</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="fab fa-youtube"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 15px;font-weight: bold">تعداد کاربران یوتوب</p>
                </div>
            </div>
        </div>
        </div>--}}{{--
        @php
        $content = $biggestman->content;
$name = $biggestman->name;
$pic = $biggestman->picture;
$img = explode('public',$pic)[1];
$desc = $biggestman->desc ?? null;
        @endphp
    <div class="container" style="margin-top: 30px">
        <div class="card" style="direction: rtl;box-shadow: 8px 8px 20px rgba(122,129,208,0.44)">
            <div class="card-body container" style="border: 1px solid lightgrey;">
                <div class="row col-md-12" style="margin: 0px;padding: 8px">
                    <div class="col-md-6">
                        <i class="fas fa-quote-right" style="font-size: 25px;font-weight: bold;color: #c9cad0"></i>
                        <div style="font-size: 22px;font-weight: bold;line-height: 35px">{!! $content !!}</div>
                        <i class="fas fa-quote-left" style="font-size: 25px;font-weight: bold;color: #c9cad0"></i>
                        <p style="margin: 5px">{{$desc}}</p>
                    </div>
                    <div class="col-md-6" style="direction: ltr">--}}{{--width: 38%--}}{{--
                        <div class="card-image" style="background-image: url({{$img}});width: 220px;height: 220px;border-radius: 50%;box-shadow: 9px 9px rgba(122,129,208,0.44)" data-image-full="{{$img}}">
                            <img src="{{$img}}" alt="Psychopomp"/>
                        </div>
                    </div>
                    <p style="font-size: 15px;font-weight: bold;color: #495057;"> <i class="fas fa-feather" style="padding: 5px;"></i> {{$name}}</p>
                </div>
            </div>
        </div>
    </div>

</section>--}}

{{--<section class="text-center" style="padding-bottom: 0px;padding-top:5px">
    <div class="container-fluid">
        <p style="color: #1d1d3c;font-size: 20px;direction: rtl;text-align: center;font-weight: bolder;"><span style="background-color: #c1c6e3;color: #1e2125;padding: 5px">بیزنس</span></p>
        <br>
        <div style="direction: rtl">
            <div class="row col-md-12">
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="border-radius: 0px" id="carfg">
                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                <div class="card-image" style="background-image: url({{asset('what.jpg')}});" data-image-full="{{asset('what.jpg')}}">
                                    <img src="{{asset('what.jpg')}}" alt="Psychopomp" height="350px"/>

                                </div>
                            </div>
                            <div class="card-body" style="direction: rtl;padding-top: 5px;text-align: right;position:absolute;bottom: 0px;background-color: rgba(0,0,0,0.69)">
                                <p style="font-size: 12px;color: white;font-weight: bold;margin-bottom: 5px">انگیزشی</p>
                                <p style="font-size: 17px;margin-bottom: 8px;color:white;font-weight: bold;">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <div class="card" style="border-radius: 0px" id="carfg">
                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                <div class="card-image" style="background-image: url({{asset('what.jpg')}});" data-image-full="{{asset('what.jpg')}}">
                                    <img src="{{asset('what.jpg')}}" alt="Psychopomp" height="350px"/>

                                </div>
                            </div>
                            <div class="card-body" style="direction: rtl;padding-top: 5px;text-align: right;position:absolute;bottom: 0px;background-color: rgba(0,0,0,0.69)">
                                <p style="font-size: 12px;color: white;font-weight: bold;margin-bottom: 5px">انگیزشی</p>
                                <p style="font-size: 17px;margin-bottom: 8px;color:white;font-weight: bold;">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="border-radius: 0px" id="carfg">
                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                <div class="card-image" style="background-image: url({{asset('what.jpg')}});" data-image-full="{{asset('what.jpg')}}">
                                    <img src="{{asset('what.jpg')}}" alt="Psychopomp" height="200px"/>

                                </div>
                            </div>
                            <div class="card-body" style="direction: rtl;padding-top: 5px;padding-right: 2px;text-align: right">
                                <p style="font-size: 12px;color: #8a8993;font-weight: bold;margin-bottom: 5px">انگیزشی</p>
                                <p style="font-size: 14px;margin-bottom: 8px;color:black;font-weight: bold">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>--}}
@if(!empty($givecontents))
<section class="text-center" style="padding-bottom: 0px;padding-top: 0px">
    <div class="container">
        <div class="container-fluid">
            <div class="card-header" style="direction: rtl;text-align: right;font-size: 35px;font-weight: bolder;border-bottom: 0px;background-color:transparent;margin-right: 0px">
                <i class="fas fa-angle-left" style="font-size: 20px"></i> {{$linkname}}
                <p style="color: rgba(29,29,60,0.66);font-size:20px;direction: rtl;text-align: right;font-weight: bold;margin-top: 8px">جدید ترین مطالب دسته ی {{$linkname}} ، میتوانید تمام مطالب این بخش رو از دکمه ی زیر ببینید.</p>
            </div>
            <br>
        </div>
        <div class="row col-md-12" style="background-color:white;padding: 15px;">
            @foreach($givecontents as $content)
                @php
                    $id = $content->id;
                          $title = $content->title;
               $description = $content->description;
               $category = $content->category;
               $img = $content->picture;
               $pic = explode('public',$img)[1];
               $slug = $content->slug;
               $time = $content->time;
               $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
               if ($exp <= 7){
                   $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
               }else{
                   $db = null;
               }
               $hash = new \Hashids\Hashids();
               $hashid = $hash->encode($id);
               foreach ($colorshuffle as $color){
                   $thiscolor = $color;
               }
                    @endphp
            <div class="col-md-4">
                <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                <div class="card" style="border: 1px solid lightgrey;text-align: right;box-shadow: 8px 8px {!! $thiscolor !!}">
                    <div class="card-header" style="padding: 0px;background-color: transparent">
                        <div class="card-image" style="background-image: url({{$pic}});" data-image-full="{{$pic}}">
                            <img src="{{$pic}}" alt="Psychopomp"/>
                            {!! $db ?? null !!}
                        </div>
                    </div>
                    <div class="card-body" style="direction: rtl;padding-top: 5px">
                        <p style="font-size: 16px;margin-bottom: 5px;color:black;">{{$title}}</p>
                        <br>
                        <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                    </div>
                </div>
                </a>
            </div>
                @endforeach
    </div>
        <br>
        <div class="row container">
            <div style="text-align: right">
                <a href="{{route('getscons',['var'=>$linkslug,'sort'=>'newest'])}}"><button class="btn" id="bordety" style="direction: rtl"><i class="fas fa-arrow-right" style="font-size: 10px;"></i> مشاهده مطالب این دسته </button></a>
            </div>
        </div>
        <br>
    </div>
</section>
@endif
<section class="text-center" style="padding-bottom: 0px">
    <div class="container">
    <p style="color: #1d1d3c;font-size: 35px;direction: rtl;text-align: right;font-weight: bolder;">آرشیو کامل مطالب وب سایت</p>
        <p style="color: rgba(29,29,60,0.66);font-size:20px;direction: rtl;text-align: right;font-weight: bold">شما میتونید با استفاده از منو های بالا و انتخاب دسته بندی مطالب مورد نظر رو پیدا کنید.</p>
        <br>
        <div style="direction: rtl">
            <div class="dropdown" style="position: absolute;padding: 0px 25px;">
                <button class="btn btn-primary" type="button" data-toggle="dropdown" id="gdtdd">دسته بندی ها
                    <i class="fas fa-caret-down" style="font-size: 12px;padding: 5px"></i>
                </button>
                <ul class="dropdown-menu nbhd" style="min-width: 183px;padding: 0px;border-radius: 0px">
                    @php
                    $all_category = \Illuminate\Support\Facades\DB::table('category')->get()->toArray();
                    @endphp
                    @foreach($all_category as $cat)
                        @php
                        $name = $cat->name;
$slug = $cat->slug;
$givecategory = \Illuminate\Support\Facades\DB::table('category')->where('slug',$slug)->get()->toArray();
                        @endphp
                    <li>
                        <form method="get" action="{{route('searchbycategory',['category'=>$slug])}}">
                            <button type="submit" style="outline: none;box-shadow: none;border: none;background-color: transparent">{{$name}}</button>
                        </form>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <br>
</section>
<section class="container-fluid" style="direction: rtl;">
                            <div id="results" class="row"></div>
                            <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
                <br><br>
                <div class="container-fluid text-center">
                    <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
                </div>
</section>
<div class="container-fluid fixed-bottom" id="clost" style="background-color: white;padding: 8px;border-top: 1px solid lightgrey">
    <button class="fixed-bottom" onclick="showOrHideDiv()" id="buttonclo"><i class="fas fa-times"></i></button>
    @php
        $content = $biggestman->content;
$name = $biggestman->name;
$pic = $biggestman->picture;
$img = explode('public',$pic)[1];
$desc = $biggestman->desc ?? null;
    @endphp
    <div class="row col-md-12">
        <div class="col-md-3">
            <div class="card-image" style="background-image: url({{$img}});width:100%;height:100px;box-shadow: 4px 4px rgba(122,129,208,0.44)" data-image-full="{{$img}}">
                <img src="{{$img}}" alt="Psychopomp"/>
            </div>
        </div>
        <div class="col-md-9" style="margin: auto;padding-top: 5px;font-weight: bold">
            <i class="fas fa-quote-right" style="float: right;font-size: 12px;font-weight: bold;padding: 5px"></i><div style="font-size: 22px">{!! $content !!}</div>
        </div>
    </div>
</div>
<script>
    function showOrHideDiv() {
        var v = document.getElementById("clost");
        var b = document.getElementById("buttonclo");
        if (v.style.display === "none") {
            v.style.display = "block";
        } else {
            v.style.display = "none";
            b.style.display = "none";
        }
    }
</script>
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
    var site_url = "{{route('index')}}";
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
