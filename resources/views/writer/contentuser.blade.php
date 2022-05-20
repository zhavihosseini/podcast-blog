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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
</script>
<script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        width: 600,
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
        menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css'
    });

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
        selector: 'textarea#full-featured-non-premium',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif,Vazir; font-size:14px }'
    });


</script>

<body>
@include('header')
<br>
<section class="container-fluid">
    <div class="row" style="background-color: #e7e4fb;color: #1e2125;padding: 8px;font-size: 20px;direction: rtl">
        ✍️ بارگذاری متن
    </div>
    <br>
    <div class="container-fluid text-center" style="direction: rtl">
        <div class="row col-md-12" style="text-align: right">
            <div class="col-md-3">
        <button id="catere" class="btn">اضافه کردن مطلب</button>
            </div>
            <div class="col-md-3">
                <p id="foiwef">تمام مطالب : {{$allcontentcount}}</p>
            </div>
            <div class="col-md-3">
                <p id="foiwef">تمام مطالب وی آی پی : {{$allcontentvip}}</p>
            </div>
         {{--   <div class="col-md-3">
                <p id="foiwef">تمام مطالب تایید شده : {{$allsetcontent}}</p>
            </div>--}}
        </div>
        <br>
        <div class="row" id="weg" style="display: none">
            <p style="color: red;">کاربر گرامی بنر مطلب شما حتما باید 667 * 1280 پیکسل باشد.</p>
            <p style="color: red;">در صورتی که دسته بندی مورد نظر شما وجو نداشت با پشتیبانی در ارتباط باشید تا فورا دسته بندی مورد نظر شما ثبت شود.</p>
            <form id="formsnow" method="post" action="{{route('savecontentuser')}}" enctype="multipart/form-data">
               @csrf
                <input type="text" name="title" placeholder="عنوان مطلب" maxlength="200">
                <br><br>
                <input type="text" name="description" placeholder="توضیحات مطلب" maxlength="300">
                <br><br>
                <input type="text" name="keyword" placeholder="کلمات کلیدی" maxlength="1000">
                <br><br>
                <input type="text" name="sponser" placeholder="اسپانسر" maxlength="250">
                <br><br>
                <input type="text" name="sponserlink" placeholder="لینک اسپانسر" maxlength="250">
                <br><br>
                <div class="mb-3">
                    <label for="category" class="form-label">دسته بندی : </label>
                    <select name="category">
                        @foreach($allcategory as $cate)
                            @php
                                $name = $cate->name;
                            @endphp
                            <option name="{{$name}}">{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Links : </label>
                    <select name="link">
                        @foreach($alllinks as $link)
                            @php
                                $links = $link->slug;
$name = $link->link;
$id = $link->id;
                            @endphp
                            <option value="{{$id}}" name="{{$links}}">{{$links}}  {{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <br><br>
                <div class="text-center" style="width: 100%">
                    <label for="slug" class="form-label" style="text-align: center">بنر مطلب : </label>
                    <input type="file" class="form-control" name="picture" style="margin: 0px auto">
                </div>
                <br><br>
                    <div class="form-check col-md-8">
                        <input class="form-check-input" type="checkbox" value="vip" name="vip" style="width: auto;text-align: center">
                        <label class="form-check-label" for="flexCheckChecked">
                            وی آی پی
                        </label>
                    </div>
                <br><br>
                <div class="mb-3">
                    مطلب :
                    <textarea name="post_content_fa" id="full-featured-non-premium" class="form-control" style="direction: rtl"></textarea>
                </div>
                <button type="submit" style="border: 0px;outline: none;border-radius: 20px;background-color: #a7fb93;box-shadow: none;padding:10px 15px">تایید و ارسال</button>
            </form>
            <br><hr>
        </div>
        <div class="row" style="border: 1px solid lightgrey;padding: 20px;border-radius: 20px;max-width: 1500px;overflow-y: auto">
            <table class="table">
                <thead>
                <tr style="font-size:14px;font-weight: normal">
                    <th scope="col">عنوان</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">بنر</th>
                    <th scope="col">اسپانسر</th>
                    <th scope="col">لینک اسپانسر</th>
                    <th scope="col">دسته بندی</th>
                    <th scope="col">لینک</th>
                    <th scope="col">وی آی پی</th>
                    <th scope="col">ثبت</th>
                    <th scope="col">آپدیت</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">مشاهده</th>
                    <th scope="col">تغییر وی آی پی</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allcontentuser as $content)
                    @if(!empty($content))
                    @php
                    $id = $content->id;
$title = $content->title;
$description = $content->description;
$sponser = $content->sponser;
$sponserlink = $content->sponserlink;
$vip = $content->vip ?? null;
$banner = $content->banner ?? null;
$category = $content->category;
$time = $content->time;
$dateup = \Morilog\Jalali\Jalalian::forge($time)->ago();
$up = $content->update ?? null;
if (!empty($up)){
    $timeupdate = \Morilog\Jalali\Jalalian::forge($up)->ago();
}else{
    $timeupdate = 'ندارد';
}
$status = $content->status ?? null;
$hash = new \Hashids\Hashids();
$cr = $hash->encode($id);
$vb = \Illuminate\Support\Facades\Crypt::encrypt($cr);
$dalil = \App\Models\contentuser::find($id)->toArray()['dalil'] ?? null;
$link = $content->link;
$givelink = \Illuminate\Support\Facades\DB::table('links')->where('id',$link)->get()->toArray();
foreach ($givelink as $lnk){
    $is = $lnk->link;
}
                    @endphp
                <tr style="font-size: 14px">
                    <th scope="row" style="font-weight: normal">{{\Illuminate\Support\Str::limit($title,10)}}</th>
                    <td>{{\Illuminate\Support\Str::limit($description,10)}}</td>
                    <td style="color: green">@if($banner)
                    دارد
                    @endif</td>
                    <td>{{\Illuminate\Support\Str::limit($sponser,10)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($sponserlink,10)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($category,10)}}</td>
                    <td title="{{$is}}">{{\Illuminate\Support\Str::limit($is,10)}}</td>
                    <td>
                        @if($vip)
                            <p style="background-color: #c7fbd9;color: #1e2125;padding: 4px;border-radius: 12px">وی آی پی</p>
                            @else
                            <p style="background-color: #fb9e9f;color: #1e2125;padding: 4px;border-radius: 12px">نیست</p>
                        @endif
                    </td>
                    <td>{{$dateup}}</td>
                    <td>{{$timeupdate}}</td>
                    <td>
                        <form method="get" action="{{route('editcontentuser')}}">
                            @csrf
                            <input type="hidden" name="vals" value="{{$vb}}">
                            <button id="virayesh">ویرایش</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route('deletethiscontent')}}">
                            @csrf
                            <input type="hidden" name="var" value="{{$cr}}">
                            <button type="submit" id="deletet">حذف</button>
                        </form>
                    </td>
                    <td>
                      @if($status == 1)
                          <p style="color: orange">ارسال شد</p>
                          @elseif($status == 2)
                            <p style="color: green">ثبت شد</p>
                        @elseif($status == 3)
                            <button type="button" data-toggle="modal" style="border: 1px solid lightgrey;box-shadow: none;background-color: red;color: white;font-weight: bold" data-target="#exampleModal" style="color: red">اخطار</button>
                            <form method="post" action="{{route('changestatustosends')}}">
                                @csrf
                                <input type="hidden" name="vals" value="{{$vb}}">
                                <button type="submit" style="border: 1px solid lightgrey;box-shadow: none;background-color: transparent">ارسال مجدد</button>
                            </form>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="font-size: 14px">دلیل اخطار</h5>
                                            <button type="button" style="border: 0px;box-shadow: none;background-color: transparent;" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="direction: rtl;text-align: right;background-color: #eeebf0">
                                           {{$dalil}}
                                        </div>
                                        <div class="modal-body" style="direction: rtl;text-align: right;">
                                            کاربر گرامی شما میتوانید پس از برطرف کردن مشکل موجود آن را دوباره ارسال کنید.
                                        </div>
                                        <div class="modal-footer" style="float: right;text-align: right">
                                            <div class="row col-md-12" style="margin-left: 0px">
                                            <button type="button" class="mr-auto" style="background-color: transparent;border: 1px solid lightgrey;box-shadow: none;outline: none" data-dismiss="modal">بستن</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endif
                    </td>
                    <td>
                        <form method="get" action="{{route('showtestuser',['vals'=>$vb])}}">
                            @csrf
                            <button id="seehfa">مشاهده</button>
                        </form>
                    </td>
                    <th scope="row">
                        @if(empty($vip))
                            <form method="post" action="<?php echo route('changevipcontent')?>">
                                @csrf
                                <input type="hidden" name="vals" value="{{$cr}}">
                                <input type="hidden" value="1" name="var">
                                <button type="submit" id="btnedit" style="border: 1px solid lightgrey;outline: none;background-color: #0c63e4;padding:4px;border-radius: 20px;font-size: 14px;color: white">وی آی پی</button>
                            </form>
                        @else
                            <form method="post" action="<?php echo route('changevipcontent')?>">
                                @csrf
                                <input type="hidden" name="vals" value="{{$cr}}">
                                <input type="hidden" value="0" name="var">
                                <button type="submit" id="btnedit" style="border: 1px solid lightgrey;outline: none;background-color: transparent;padding:4px;border-radius: 20px;font-size: 14px">برداشتن وی آی پی </button>
                            </form>
                        @endif
                    </th>
                </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="row" style="background-color: #e7e4fb;color: #1e2125;padding: 8px;font-size: 20px;direction: rtl">
            مطالب تایید شده
        </div>
        <br>
        <div id="results" class="row"></div>
        <div class="container text-center ajax-loading"><img src="{{asset('loader.gif')}}" width="20%" /></div>
        <br><br>
        <div class="container-fluid text-center">
            <button class="btn btn-submitz" id="bordety">مشاهده بیشتر <i class="fas fa-long-arrow-alt-down" style="padding:3px;font-size: 12px"></i></button>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script>
    const targetDiv = document.getElementById("weg");
    const btn = document.getElementById("catere");
    btn.onclick = function () {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };
</script>
<script src="{{asset('js/lazypic.js')}}"></script>
<script>
    var site_url = "{{route('contentuser')}}";
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
</body>
</html>
