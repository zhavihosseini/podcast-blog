<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Content | Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
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
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Content
</div>
<br>
<div class="container">
    <h3>All Content in Grown Cast<span style="float: right">{{$contentcount}}</span></h3>
    <hr>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-2">
                <button id="cate" class="btn">Add Content +</button>
            </div>
            <div class="col-md-2">
                <p>All Vip Content {{$vip}}</p>
            </div>
        </div>
        <br>
        <div id="ssss" class="container" style="display: none;border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Save Content</h3>
            <hr>
            <form method="post" action="<?php echo route('savecontents')?>" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Content Title</label>
                    <input type="text" class="form-control" name="title" id="name" placeholder="Write Your Content Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description Content</label>
                    <input type="text" class="form-control" name="description" id="name" placeholder="Write Your description Content">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">slug Title</label>
                    <input type="text" class="form-control" name="slug" id="name" placeholder="Write Your slug Content">
                </div>
                <div class="mb-3">
                    <label for="keyword" class="form-label">Write Keyword </label>
                    <input type="text" class="form-control" name="keyword" id="name" placeholder="Write Your Content Keyword">
                </div>
                <div class="mb-3">
                    <label for="sponser" class="form-label">Sponser</label>
                    <input type="text" class="form-control" name="sponser" id="name" placeholder="Write Your sponser Content">
                </div>
                <div class="mb-3">
                    <label for="sponserlink" class="form-label">Sponser Link</label>
                    <input type="text" class="form-control" name="sponserlink" id="name" placeholder="Write Your sponser Link Content">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category : </label>
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
                <div class="mb-3">
                    <label for="slug" class="form-label">picture : </label>
                    <input type="file" class="form-control" name="picture" id="name">
                </div>
                <div class="mb-3">
                    Content :
                    <textarea name="post_content_fa" id="full-featured-non-premium" class="form-control" style="direction: rtl"></textarea>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="vip" id="flexCheckChecked" name="vip">
                        <label class="form-check-label" for="flexCheckChecked">
                            Check Vip
                        </label>
                    </div>
                </div>
                <button class="btn" id="subs">Submit</button>
            </form>
        </div>
    </div>
    @if(session('save'))
        <div class="container">
            <div class="alert alert-success" id="alerts">
                {{session('save')}}
            </div>
        </div>
    @endif
    @if(session('delete'))
        <div class="container">
            <div class="alert alert-danger" id="alertsdelete">
                {{session('delete')}}
            </div>
        </div>
    @endif
    <br>
    <div class="container-fluid" style="max-width: 1150px;overflow-x: scroll">
    <table class="table">
        <thead>
        <tr style="text-align: center;font-size: 10px">
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Slug</th>
            <th scope="col">Picture</th>
            <th scope="col">Content</th>
            <th scope="col">Sponser</th>
            <th scope="col">Sponser link</th>
            <th scope="col">Time Update</th>
            <th scope="col">Category</th>
            <th scope="col">links</th>
            <th scope="col">Vip</th>
            <th scope="col">Edit</th>
            <th scope="col">change Vip</th>
            <th scope="col">Test Show</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody style="text-align: center;font-size: 10px">
        @foreach($all_content as $content)
            @php
                $id = $content->id;
                $title = $content->title;
                $description = $content->description;
                $category = $content->category;
                $slug = $content->slug;
                $picture = $content->picture;
                $contents = $content->content;
                $vip = $content->vip;
                $time = $content->time;
                $userid = $content->userid;
                $sponsorlink = $content->sponserlink;
                $sponser = $content->sponser;
                $timeupdate = $content->time_update;
                if (!empty($picture)){
                    $pic = 'YES';
                }
                if (empty($vip)){
                    $vips = 'Null';
                }else{
                    $vips = 'Vip';
                }
                $ids = $id + 514684;
                $hash = new \Hashids\Hashids();
                $hashit = $hash->encode($ids);
                $cr = \Illuminate\Support\Facades\Crypt::encrypt($hashit);
                $titles = $content->slug;
                $links = $content->link;
            @endphp

            <tr>
                <th scope="row">{{$id}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($title,15)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($description,15)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($slug,15)}}</th>
                    <th scope="row">{{$pic}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($contents,15)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($sponser,15)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($sponsorlink,15)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($timeupdate,10)}}</th>
                    <th scope="row">{{\Illuminate\Support\Str::limit($category,15)}}</th>
                <th scope="row">{{\Illuminate\Support\Str::limit($links,15)}}</th>
                    <th scope="row" @if(!empty($vip)) style="background-color: #86fa77;color: #1e2125" @endif>{{$vips}}</th>
                    <th scope="row">
                        <form method="get" action="<?php echo route('editcontent')?>">
                            @csrf
                            <input type="hidden" name="vals" value="{{$cr}}">
                            <button type="submit" id="btnedit">Edit</button>
                        </form>
                    </th>
                    <th scope="row">
                        @if(empty($vip))
                        <form method="post" action="<?php echo route('setvip')?>">
                            @csrf
                            <input type="hidden" name="vals" value="{{$cr}}">
                            <input type="hidden" value="1" name="var">
                            <button type="submit" id="btnedit">SetVip</button>
                        </form>
                            @else
                            <form method="post" action="<?php echo route('setvip')?>">
                                @csrf
                                <input type="hidden" name="vals" value="{{$cr}}">
                                <input type="hidden" value="0" name="var">
                                <button type="submit" id="btnedit">Null Vip</button>
                            </form>
                        @endif
                    </th>
                    <th scope="row">
                        <form method="get" action="<?php echo route('testshow',['vals'=>$hashit,'titles'=>$titles])?>">
                            <button type="submit" id="btnedit">Show Test</button>
                        </form>
                    </th>
                    <th scope="row">
                        <form method="post" action="<?php echo route('Deletecontent')?>">
                            @csrf
                            <input type="hidden" name="vals" value="{{$cr}}">
                            <button type="submit" id="btnedit" style="background-color: #fa625b;color: white">Delete</button>
                        </form>
                    </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
<script>
    const targetDiv = document.getElementById("ssss");
    const btn = document.getElementById("cate");
    btn.onclick = function () {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
