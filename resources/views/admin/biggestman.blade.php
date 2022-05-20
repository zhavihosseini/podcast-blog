<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>All Biggestman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
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
<div class="container-fluid" style="background-color: #1e2125;color: white">
    All Biggestman
</div>
<br>
<div class="container">
    <div class="row col-md-12">
        <div class="col-md-2">
            <button id="cate" class="btn">Add biggestman +</button>
        </div>
        <br>
        <div id="ssss" class="container" style="display: none;border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Save biggestman</h3>
            <hr>
            <form method="post" action="<?php echo route('savebiggestman')?>" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">biggestman content : </label>
                    <textarea name="content" id="full-featured-non-premium" class="form-control" style="direction: rtl"></textarea>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">biggestman name : </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Write Your name biggestman" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">biggestman picture : </label>
                    <input type="file" name="file" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">biggestman description : </label>
                    <input type="text" class="form-control" name="desc" placeholder="Biggestman Description">
                </div>
                <button class="btn" type="submit" id="subs">Submit</button>
                <br>
            </form>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            All Biggestman Count : {{$biggestmancount}}
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">content</th>
                    <th scope="col">name</th>
                    <th scope="col">picture</th>
                    <th scope="col">desc</th>
                    <th scope="col">time</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all as $biggest)
                    @php
                    $id = $biggest->id;
$content = $biggest->content;
$name = $biggest->name;
$picture = $biggest->picture;
$desc = $biggest->desc;
$time = $biggest->time;
$hash = new \Hashids\Hashids();
$enhash = $hash->encode($id);
                    @endphp
                <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{\Illuminate\Support\Str::limit($content,15)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($name,15)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($picture,15)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($desc,15)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($time,15)}}</td>
                    <td>
                        <form method="post" action="{{route('deletebiggman')}}">
                            @csrf
                            <input type="hidden" name="var" value="{{$enhash}}">
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
