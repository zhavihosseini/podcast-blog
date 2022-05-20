<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Links | Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
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

<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Links
</div>
<br>
<div class="container">
    <h3>All Links in Grown Cast<span style="float: right">{{$linkscount}}</span></h3>
    <hr>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-2">
                <button id="cate" class="btn">Add Links +</button>
            </div>
        </div>
        <br>
        <div id="ssss" class="container" style="display: none;border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Save Links</h3>
            <hr>
            <form method="post" action="<?php echo route('savelinks')?>">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Links : </label>
                    <input type="text" class="form-control" name="links" id="name" placeholder="Write Your Links    ">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">For : </label>
                    <input type="text" class="form-control" name="for" id="name" placeholder="Write Your Links For ... ">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name : </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Write Your Links Name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Status : </label>
                    <input type="text" class="form-control" name="status" id="name" placeholder="Write Your Links status">
                </div>
                <div class="mb-3">
                    Content :
                    <textarea name="post_content_fa" id="full-featured-non-premium" class="form-control" style="direction: rtl"></textarea>
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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Link</th>
            <th scope="col">Name</th>
            <th scope="col">for</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">List</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($links as $all)
            @php
                $id = $all->id;
    $name = $all->name;
    $slug = $all->slug;
    $link = $all->link;
    $list = $all->list;
    $status = $all->status;
    $description = $all->description;
    $hash = new \Hashids\Hashids();
    $ids = $id + 65498498;
    $hashing = $hash->encode($ids);
    $cr = \Illuminate\Support\Facades\Crypt::encrypt($hashing);
    $for = $all->for;
            @endphp
            <tr>
                <th scope="row">{{$id}}</th>
                <td>{{$link}}</td>
                <td>{{$name}}</td>
                <td>{{$for}}</td>
                <td>{{$slug}}</td>
                <td>{{\Illuminate\Support\Str::limit($description,15)}}</td>
                <td>{{$list}}</td>
                <td>
                    <form method="get" action="<?php echo route('editlink')?>">
                        @csrf
                        <input type="hidden" name="vals" value="{{$cr}}">
                        <button type="submit" class="btn" id="btnedit">Edit</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="<?php echo route('deletelinks')?>">
                        @csrf
                        <button type="submit" class="btn" id="btnedit">Delete</button>
                        <input type="hidden" name="vals" value="{{$cr}}">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
