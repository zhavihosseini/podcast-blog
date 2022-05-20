<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Tabs | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Edit Tabs
</div>
<br>
@foreach($alltab as $tab)
    @php
        $id = $tab['id'];
$name = $tab['name'];
$vertical = $tab['verticaltab'];
$img = explode('public',$vertical)[1];
$hash = new \Hashids\Hashids();
$ids = $id + 254987;
$hashed = $hash->encode($ids);
$price = $tab['price'];
$verlink = $tab['verticlalink'];
$cr = \Illuminate\Support\Facades\Crypt::encrypt($hashed);
    @endphp
@endforeach
<div class="container-fluid">
    <div class="col-md-3 text-center">
        <img src="{{$img}}">
    </div>
    <div class="row">
        <div class="col-md-9">
                <div id="ssss" class="container-fluid" style="border: 1px solid grey">
                    <h3 style="text-align: center;padding: 8px">Edit Tabs</h3>
                    <hr>
                    <form method="post" action="{{route('saveedittab')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" value="{{$name}}" name="name" id="name" placeholder="Write Your Tab Name">
                        </div>
                        <div class="mb-3">
                            <label for="verticlatab" class="form-label">Vertical Tab</label>
                            <input type="file" class="form-control" name="verticlatab" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Verticla link</label>
                            <input type="text" class="form-control" name="verticlalink" value="{{$verlink}}" id="name" placeholder="Write Your Vertical link">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Price</label>
                            <input type="text" class="form-control" value="{{$price}}" name="price" id="name" placeholder="Write Your Price link">
                        </div>
                        <input type="hidden" name="cal" value="{{$cr}}">
                        <button class="btn" id="subs">Submit</button>
                    </form>
                </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
