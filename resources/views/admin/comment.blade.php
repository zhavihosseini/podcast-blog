<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>All comments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    All comments
</div>
<br><br>
<div class="container">
    <div class="card">
    <div class="card-header">
        allcomments count ({{$allcommentcount}})
        <form style="float: right" method="get" action="{{route('showallnowcomment')}}">
            <button type="submit">show now comment</button>
        </form>
    </div>
        <div class="row col-md-12">
            <div style="padding-right: 0px">
                <br>
                    <div class="card-header">
                        Accespt Comments {{$allnowcommentcount}}
                    </div>
                <div class="card-body">
                    <table class="table" style="direction: rtl">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Username</th>
                            <th scope="col">comment</th>
                            <th scope="col">userid</th>
                            <th scope="col">status</th>
                            <th scope="col">time</th>
                            <th scope="col">delete</th>
                            <th scope="col">show</th>
                            <th scope="col">accept</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allcomment as $cmnt)
                            @php
                            $id = $cmnt->id;
$ids = $id + 846321;
$comment = $cmnt->content;
$time = $cmnt->time;
$date = \Morilog\Jalali\Jalalian::forge($time)->ago();
$userid = $cmnt->userid;
$getsuser = \App\Models\User::find($userid);
$name = $getsuser->name;
$status = $cmnt->status;
if ($status == 1){
    $p = 'تایید نشده';
}elseif ($status == 2){
     $p = 'تایید شده';
}
$hash = new \Hashids\Hashids();
$enhash = $hash->encode($ids);

                            $idz = $id + 8846321;
    $enhashs = $hash->encode($idz);
                            @endphp
                        <tr>
                            <th scope="row">{{$id}}</th>
                            <th scope="row">{{$name}}</th>
                            <td title="{{$comment}}">{{\Illuminate\Support\Str::limit($comment,150)}}</td>
                            <td>{{$userid}}</td>
                            <td>{{$p}}</td>
                            <td>{{$date}}</td>
                            <td>
                                <form style="text-align: left" method="post" action="{{route('deletethiscomment')}}">
                                    @csrf
                                    <input type="hidden" name="val" value="{{$enhashs}}">
                                    <button>delete</button>
                                </form>
                            </td>
                            <td>
                                <form method="get" action="{{route('showthiscomment')}}">
                                    @csrf
                                    <input type="hidden" name="vals" value="{{$enhash}}">
                                    <button type="submit">show</button>
                                </form>
                            </td>
                            <td>
                                <form style="text-align: left" method="post" action="{{route('okthiscommnet')}}">
                                    @csrf
                                    <input type="hidden" name="val" value="{{$enhashs}}">
                                    <input type="hidden" name="var" value="2">
                                    <button>Ok</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
