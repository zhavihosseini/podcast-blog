<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Tabs | Admin</title>
        <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Tabs
</div>
<br>
<div class="container">
    <h3>All Tabs in Grown Cast<span style="float: right">{{$tabcount}}</span></h3>
    <hr>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-2">
                <button id="cate" class="btn">Add Tabs +</button>
            </div>
            <div class="col-md-2">
                <p class="btn">All Started : {{$allstarted}}</p>
            </div>
            <div class="col-md-2">
                <p class="btn">All Stoped : {{$allstoped}}</p>
            </div>
        </div>
        <br>
        <div id="ssss" class="container" style="display: none;border: 1px solid grey">
            <h3 style="text-align: center;padding: 8px">Save Tabs</h3>
            <hr>
            <form method="post" action="{{route('savetabs')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Write Your Tab Name">
                </div>
                <div class="mb-3">
                    <label for="verticlatab" class="form-label">Vertical Tab</label>
                    <input type="file" class="form-control" name="verticlatab" id="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Verticla link</label>
                    <input type="text" class="form-control" name="verticlalink" id="name" placeholder="Write Your Vertical link">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="name" placeholder="Write Your Price link">
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
            <th scope="col">Name</th>
            <th scope="col">Vertical Tab</th>
            <th scope="col">Vertical link</th>
            <th scope="col">price</th>
            <th scope="col">time</th>
            <th scope="col">status</th>
            <th scope="col">delete</th>
            <th scope="col">edit</th>
            <th scope="col">stop/start</th>
        </tr>
        </thead>
            <tbody style="text-align: center;font-size: 10px">
            @foreach($alltab as $tabs)
                @php
                $id = $tabs->id;
$name = $tabs->name;
$verticaltab = $tabs->verticaltab;
$verticallink = $tabs->verticlalink;
$status = $tabs->status;
$price = $tabs->price;
$hash = new \Hashids\Hashids();
$ids = $id + 684894;
$hashed = $hash->encode($ids);
$cr = \Illuminate\Support\Facades\Crypt::encrypt($hashed);
                @endphp
            <tr>
                <td>{{$id}}</td>
                <td>{{$name}}</td>
                <td>{{\Illuminate\Support\Str::limit($verticaltab,15)}}</td>
                <td>{{\Illuminate\Support\Str::limit($verticallink,15)}}</td>
                <td>{{$price}}</td>
                <td>
                    @if($status == 1)
                        <span style="color: orange">آماده ی پخش</span>
                        @endif
                        @if($status == 2)
                            <span style="color: green">پخش شد</span>
                        @endif
                        @if($status == 3)
                            <span style="color: red">متوقف</span>
                        @endif
                        @if($status == 4)
                            <span style="color: orange">اتمام تاریخ</span>
                        @endif
                </td>
                <td>{{$status}}</td>
                <td>
                    <form action="<?php echo route('deletetab')?>" method="post">
                        @csrf
                        <input type="hidden" name="var" value="{{$cr}}">
                        <button type="submit" id="startid">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo route('edittabs')?>" method="get">
                        @csrf
                        <input type="hidden" name="var" value="{{$cr}}">
                        <button type="submit" id="startid">Edit</button>
                    </form>
                </td>
                <td>
                    @if($status !== 4)
                    @if($status == 1 or $status == 3)
                    <form action="<?php echo route('starttabs')?>" method="post">
                        @csrf
                        <input type="hidden" name="var" value="{{$cr}}">
                        <input type="hidden" name="val" value="2">
                    <button type="submit" id="startid">Start</button>
                    </form>
                    @endif
                    @if($status == 2)
                            <form action="<?php echo route('starttabs')?>" method="post">
                                @csrf
                                <input type="hidden" name="var" value="{{$cr}}">
                                <input type="hidden" name="val" value="3">
                                <button type="submit" id="startid">Stop</button>
                            </form>
                        @endif
                    @endif
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
