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
    Category
</div>
<br>
<div class="container">
    <h3>All Category in Grown Cast<span style="float: right">{{$category_count}}</span></h3>
    <hr>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-2">
                    <button id="cate" class="btn">Add Category +</button>
            </div>
        </div>
        <br>
        <div id="ssss" class="container" style="display: none;border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Save Category</h3>
            <hr>
            <form method="post" action="<?php echo route('savecategory')?>">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Write Your Category Name">
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
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorys as $all)
            @php
            $id = $all->id;
$name = $all->name;
$slug = $all->slug;
$hash = new \Hashids\Hashids();
$ids = $id + 65498498;
$hashing = $hash->encode($ids);
$cr = \Illuminate\Support\Facades\Crypt::encrypt($hashing);
            @endphp
        <tr>
            <th scope="row">{{$id}}</th>
            <td>{{$name}}</td>
            <td>{{$slug}}</td>
            <td>
               <form method="get" action="<?php echo route('editcategory')?>">
                   @csrf
                   <input type="hidden" name="vals" value="{{$cr}}">
                   <button type="submit" class="btn" id="btnedit">Edit</button>
               </form>
            </td>
            <td>
                <form method="post" action="<?php echo route('deletecategory')?>">
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
