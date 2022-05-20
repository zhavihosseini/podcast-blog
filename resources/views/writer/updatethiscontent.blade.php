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
        ✍️ ویرایش مطلب
    </div>
    <br>
    @if ($errors->has('picture'))
        <div class="alert alert-danger" role="alert">
            Error : {{ $errors->first('picture') }}
        </div>
    @endif
    <div class="row text-center" id="weg" style="direction: rtl">
        <p style="color: red;">کاربر گرامی بنر مطلب شما حتما باید 667 * 1280 پیکسل باشد.</p>
        <p style="color: red;">در صورتی که دسته بندی مورد نظر شما وجو نداشت با پشتیبانی در ارتباط باشید تا فورا دسته بندی مورد نظر شما ثبت شود.</p>
        @if(\Illuminate\Support\Facades\Auth::check() and  \Illuminate\Support\Facades\Auth::user()->role == 'ADM')
            <form id="formsnow" method="post" action="{{route('changesavedituser')}}" enctype="multipart/form-data">
                @csrf
                @foreach($content as $text)
                    @php
                        $id = $text->id;
                        $title = $text->title;
        $description = $text->description;
        $sponser = $text->sponser;
        $sponserlink = $text->sponserlink;
        $category = $text->category;
        $pic = $text->banner;
        $img = explode('public',$pic)[1];
        $content = $text->content;
        $hash = new \Hashids\Hashids();
        $enhash = $hash->encode($id);
        $enc = \Illuminate\Support\Facades\Crypt::encrypt($enhash);
                    @endphp
                @endforeach
                <input type="text" name="title" value="{{$title}}" placeholder="عنوان مطلب" maxlength="200">
                <br><br>
                <input type="text" name="description" value="{{$description}}" placeholder="توضیحات مطلب" maxlength="300">
                <br><br>
                <input type="text" name="sponser" value="{{$sponser}}" placeholder="اسپانسر" maxlength="250">
                <br><br>
                <input type="text" name="sponserlink" value="{{$sponserlink}}" placeholder="لینک اسپانسر" maxlength="250">
                <br><br>
                <div class="mb-3">
                    <label for="category" class="form-label">دسته بندی : </label>
                    <select name="category">
                        @foreach($allcategory as $cate)
                            @php
                                $name = $cate->name;
                            @endphp
                            <option style="color: white;background-color: green">{{$category}}</option>
                            <option name="{{$name}}">{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <br><br>
                <img src="{{$img}}" width="50%">
                <div class="text-center" style="width: 100%">
                    <label for="slug" class="form-label" style="text-align: center">بنر مطلب : </label>
                    <input type="file" class="form-control" name="picture" style="margin: 0px auto">
                </div>
                <br><br>
                <div class="mb-3">
                    مطلب :
                    <textarea name="post_content_fa" id="full-featured-non-premium" class="form-control" style="direction: rtl">{!! $content !!}</textarea>
                </div>
                <input type="hidden" name="val" value="{{$enc}}">
                <button type="submit" style="border: 0px;outline: none;border-radius: 20px;background-color: #a7fb93;box-shadow: none;padding:10px 15px">تایید و ارسال</button>
            </form>
        @elseif(\Illuminate\Support\Facades\Auth::check() and \Illuminate\Support\Facades\Auth::user()->role == 'WRT')
            <form id="formsnow" method="post" action="{{route('changesavedituser')}}" enctype="multipart/form-data">
                @csrf
                @foreach($content as $text)
                    @php
                        $id = $text['id'];
                        $title = $text['title'];
        $description = $text['description'];
         $link = $text['link'];
       $get = \Illuminate\Support\Facades\DB::table('links')->where('id',$link)->get()->toArray();
        foreach ($get as $item) {
            $is = $item->link;
            $linkid = $item->id;
            $linkname = $item->name;
        }
        $sponser = $text['sponser'];
        $sponserlink = $text['sponserlink'];
        $slug = $text['slug'];
        $category = $text['category'];
        $pic = $text['picture'];
        $img = explode('public',$pic)[1];
        $content = $text['content'];
        $hash = new \Hashids\Hashids();
        $ids = $id + 8799645;
        $enhash = $hash->encode($ids);
        $enc = \Illuminate\Support\Facades\Crypt::encrypt($enhash);
                    @endphp
                @endforeach
                <input type="text" name="title" value="{{$title}}" placeholder="عنوان مطلب" maxlength="200">
                <br><br>
                <input type="text" name="description" value="{{$description}}" placeholder="توضیحات مطلب" maxlength="300">
                <br><br>
                <input type="text" name="slug" value="{{$slug}}" placeholder="اسلاگ" maxlength="250">
                <br><br>
                <input type="text" name="sponser" value="{{$sponser}}" placeholder="اسپانسر" maxlength="250">
                <br><br>
                <input type="text" name="sponserlink" value="{{$sponserlink}}" placeholder="لینک اسپانسر" maxlength="250">
                <br><br>
                <div class="mb-3">
                    <label for="category" class="form-label">دسته بندی : </label>
                    <select name="category">
                        @foreach($allcategory as $cate)
                            @php
                                $name = $cate->name;
                            @endphp
                            <option style="color: white;background-color: green">{{$category}}</option>
                            <option name="{{$name}}">{{$name}}</option>
                        @endforeach
                    </select>
                </div>
                <p style="direction: rtl;text-align: right">لینک انتخاب شده : {{$is}}  {{$linkname}}</p>
                <div class="mb-3">
                    <label for="category" class="form-label">Links : </label>
                    <select name="link">
                        <option style="background-color: green;color: white" value="{{$linkid}}" name="{{$is}}">{{$is}}  {{$linkname}}</option>
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
                <img src="{{$img}}" width="50%">
                <div class="text-center" style="width: 100%">
                    <label for="slug" class="form-label" style="text-align: center">بنر مطلب : </label>
                    <input type="file" class="form-control" name="picture" style="margin: 0px auto">
                </div>
                <br><br>
                <div class="mb-3">
                    مطلب :
                    <textarea name="post_content_fa" id="full-featured-non-premium" class="form-control" style="direction: rtl">{!! $content !!}</textarea>
                </div>
                <input type="hidden" name="val" value="{{$enc}}">
                <button type="submit" style="border: 0px;outline: none;border-radius: 20px;background-color: #a7fb93;box-shadow: none;padding:10px 15px">تایید و ارسال</button>
            </form>
        @endif

    </div>
    <br>
</section>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
</body>
</html>
