<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold;">
    show Comment
</div>
<br>
<div class="container">
    <div class="row col-md-12">
        <div class="col-md-2">
            @php
            $hash = new \Hashids\Hashids();
$enhash = $hash->encode($userid);
 $user = \App\Models\User::findOrFail($userid);
 $comment = $user->comment;

            @endphp
    <form method="get" action="{{route('showuserinfo')}}">
        <input type="hidden" name="var" value="{{$enhash}}">
        <button>show this user</button>
    </form>
        </div>

        <div class="col-md-2">
            @if($comment == 'ok')
    <form method="post" action="{{route('closecomment')}}">
        @csrf
        <input type="hidden" name="val" value="no">
        <input type="hidden" name="var" value="{{$enhash}}">
        <button>close comment</button>
    </form>
@elseif($comment == 'no')
                <form method="post" action="{{route('closecomment')}}">
                    @csrf
                    <input type="hidden" name="val" value="ok">
                    <input type="hidden" name="var" value="{{$enhash}}">
                    <button style="background-color: green;color: white">Open Comment</button>
                </form>
            @endif
        </div>
        <div class="col-md-2">
            <form method="post" action="{{route('deleteallcomment')}}">
                @csrf
                <input type="hidden" name="var" value="{{$enhash}}">
                <button>delete all comment</button>
            </form>
        </div>
    </div>
    <br><br>
<div class="row col-md-12">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                status 1 from user ({{$notacceptcount}})
            </div>
            <div class="card-body">
                @if(!empty($allnoaccpt))
                @foreach($allnoaccpt as $usercmnts)
                    @foreach($usercmnts as $comnts)
                        @php
                            $id = $comnts->id;
        $comment = $comnts->content;
        $time = $comnts->time;
        $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
        $userid = $comnts->userid;
        $getsuser = \App\Models\User::find($userid);
    $username = $getsuser->name;
    $usr = $getsuser->username;
    $picuser= $getsuser->profile ?? null;
    if (empty($picuser)){
        $picuser = asset('default.png');
    }
    $ids = $id + 8846321;
    $hash = new \Hashids\Hashids();
    $enhash = $hash->encode($ids);
                        @endphp
                            <form style="text-align: left" method="post" action="{{route('deletethiscomment')}}">
                                @csrf
                                <input type="hidden" name="val" value="{{$enhash}}">
                                <button>delete</button>
                            </form>
                            <form style="text-align: left" method="post" action="{{route('okthiscommnet')}}">
                                @csrf
                                <input type="hidden" name="val" value="{{$enhash}}">
                                <input type="hidden" name="var" value="2">
                                <button>Ok</button>
                            </form>
                            <div class="row col-md-12" style="background-color: #f3f2fd;direction: rtl">
                                <p style="padding: 8px"><span style="color: black;background-color: #d5d4e3;padding: 5px">{{$username}}</span></p>
                                <p style="padding: 12px"><img src="{{$picuser}}" width="50px" height="50px" style="border-radius: 50%"><span style="padding-right: 10px">{{$comment}}</span></p>
                                <span style="font-size: 12px;color: #8a8993;text-align: left;padding: 5px">{{$date}}</span>
                            </div>
                            <br>
                    @endforeach
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                all from user ({{$getfromusercount}})
            </div>
            <div class="card-body" style="max-height: 500px;overflow: auto">
                @if(!empty($alluser))
                @foreach($alluser as $usercmnt)
                    @foreach($usercmnt as $comnt)
                    @php
                        $id = $comnt->id;
    $comment = $comnt->content;
    $time = $comnt->time;
    $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
    $userid = $comnt->userid;
    $getsuser = \App\Models\User::find($userid);
$username = $getsuser->name;
$usr = $getsuser->username;
$picuser= $getsuser->profile ?? null;
if (empty($picuser)){
    $picuser = asset('default.png');
}
$ids = $id + 8846321;
$hash = new \Hashids\Hashids();
$enhash = $hash->encode($ids);
                    @endphp
                            <form style="text-align: left" method="post" action="{{route('deletethiscomment')}}">
                                @csrf
                                <input type="hidden" name="val" value="{{$enhash}}">
                                <button>delete</button>
                            </form>
                <div class="row col-md-12" style="background-color: #f3f2fd;direction: rtl">
                    <p style="padding: 8px"><span style="color: black;background-color: #d5d4e3;padding: 5px">{{$username}}</span></p>
                    <p style="padding: 12px"><img src="{{$picuser}}" width="50px" height="50px" style="border-radius: 50%"><span style="padding-right: 10px">{{$comment}}</span></p>
                    <span style="font-size: 12px;color: #8a8993;text-align: left;padding: 5px">{{$date}}</span>
                </div>
                        <br>
                        @endforeach
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
