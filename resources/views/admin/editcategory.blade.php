<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Category | Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Edit Category
</div>
<br>
<div class="container">
        <br>
        <div id="ssss" class="container" style="border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Edit Category</h3>
            <hr>
            @foreach($give as $gives)
                @php
                $name = $gives->name;
$slug = $gives->slug;
$id = $gives->id;
$ids = $id + 548864;
$hash = new \Hashids\Hashids();
$hashes = $hash->encode($ids);
$cr = \Illuminate\Support\Facades\Crypt::encrypt($hashes);
                @endphp
                @endforeach
            <form method="post" action="<?php echo route('saveeditcategory')?>">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" value="{{$name}}" name="name" id="name" placeholder="Your Category Name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Category Slug</label>
                    <input type="text" class="form-control" value="{{$slug}}" name="slug" id="name" placeholder="Your Category Slug">
                </div>
                <input type="hidden" name="vals" value="{{$cr}}">
                <button class="btn" id="subs">Submit</button>
            </form>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
