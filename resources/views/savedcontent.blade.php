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
<style>
    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }
</style>
<body>
@include('header')
<br>
<section>
            <div class="container-fluid">
                <div class="row col-md-12">
                    <div class="container">
                        <p style="color: #1d1d3c;font-size: 30px;direction: rtl;text-align: right;font-weight: bolder;">ذخیره های شما : {{$contentusercount}}</p>
                        <p style="color: rgba(29,29,60,0.66);font-size:20px;direction: rtl;text-align: right;font-weight: bold">کاربر گرامی شما میتوانید از این قسمت میتوانید مطالب مورد نظر را ذخیره کنید تا در گذشت زمان بتونید دسترسی بیشتری به اونها داشته باشید.</p>
                        <br>
                    </div>
                        <div class="text-center" style="direction: rtl">
                            <form class="text-center">
                                <input type="text" placeholder="جست و جو کنید" style="margin: 5px auto;width: 80%;border-radius: 25px;padding: 15px;outline: none;border: 1px solid lightgrey;box-shadow: none">
                            </form>
                            <br>
                            <div class="row col-md-12">
                                <div class="col-md-2">
                                    <button style="border: 1px solid lightgrey;background-color: transparent;font-weight: bold;font-size: 14px;border-radius: 25px;outline: none;box-shadow: none;padding: 8px;margin: 5px">بر اساس قدیمی ترین</button>
                                </div>
                                <div class="col-md-2">
                                    <button style="border: 1px solid lightgrey;background-color: transparent;font-weight: bold;font-size: 14px;border-radius: 25px;outline: none;box-shadow: none;padding: 8px;margin: 5px">بر اساس جدید ترین</button>
                                </div>
                            </div>
                            <br><br>
                            <section class="container-fluid" style="direction: rtl;padding-top: 0px">
                                <div class="row col-md-12">
                                    @if(!empty($alls))
                                        @foreach($alls as $cpm)
                                    @foreach($cpm as $contents)
                                        @php
                                            $id = $contents->id;
                     $title = $contents->title;
                     $description = $contents->description;
                     $user = $contents->userid;
                     $getsuser = \App\Models\User::find($user);
                     $imgs = $contents->picture;
                     $imgexp = explode('public', $imgs)[1];
                     $slug = $contents->slug;
                     $time = $contents->time;
                     $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
                     $hash = new \Hashids\Hashids();
                     $ids = $hash->encode($id);
                     $category = $contents->category;
                     $vip = $contents->vip;
                     $date = \Illuminate\Support\Carbon::now()->diffInDays($time);
                     if ($date <= 7){
                         $news = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                     }
                     $colors = ['#8792b5','#9278b5','#b56bb4','#89b58a','#b4b568','#3bb0b5','#b56e32','#b5b427','#8d74b5','#b544a2'];
                     $arrshuf = \Illuminate\Support\Arr::random($colors);
                                        @endphp
                                    <div class="col-md-4">
                                        <div class="card" style="border: 1px solid lightgrey;text-align: right;box-shadow: 8px 8px {{$arrshuf}}" title="{{$title}}">
                                            <a href="{{route('showcontent',['vals'=>$ids,'title'=>$slug])}}">
                                            <div class="card-header" style="padding: 0px;background-color: transparent">
                                                <div class="card-image" style="background-image: url({{$imgexp}});" data-image-full="{{$imgexp}}">
                                                    <img src="{{$imgexp}}" alt="Psychopomp"/>
                                                    {!! $news !!}
                                                </div>
                                            </div>
                                            <div class="card-body" style="direction: rtl;padding-top: 5px">
                                                <p style="font-size: 16px;margin-bottom: 5px;color:black;">{{$title}}</p>
                                                <p style="font-size: 13px;color: rgba(30,30,32,0.84);margin-bottom: 3px">{{\Illuminate\Support\Str::limit($description,120)}}</p>
                                                <br>
                                                <p class="row" style="margin-bottom: 0px"><span style="color: #0c63e4;font-size: 14px;text-align: right" class="col-md-6"><span id="borderbutt" style="color: #1a202c">{{$category}}</span></span></span><span style="color: #1a202c;font-size: 13px;text-align: left;" class="col-md-6"><span style="background-color: rgba(203,215,239,0.84);padding: 5px;border-radius: 5px;cursor:pointer;" title="برای ادامه ی مطلب کلیک کنید">ادامه مطلب<i class="fas fa-angle-left" style="font-size: 10px;padding: 5px;" id="fleshnow"></i></span></span></p>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                        @endforeach
                                        @endforeach
                                            <div class="d-flex justify-content-center">
                                                {!! $cpm->links() !!}
                                            </div>
                                    @else
                                        <div class="row col-md-10" style="margin: 0px auto">
                                            <p style="background-color: #c8c5dc;padding: 15px;font-weight: bold;font-size: 20px;border: 1px solid #85828d;box-shadow: 8px 8px #b2b0bb;">هنوز چیزی ذخیره نکرده ایید !!</p>
                                        </div>
                                    @endif
                                </div>
                            </section>
                        </div>
                </div>
            </div>
</section>
<script src="{{asset('js/lazypic.js')}}"></script>
@include('footer')
</body>
</html>
