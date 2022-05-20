<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Show User</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="background-color: #1a202c;color: white">
    Show User
</div>
<div class="container-fluid">
    @foreach($user as $info)
        @php
            $id = $info['id'];
            $name = $info['name'];
            $email = $info['email'];
            $role = $info['role'];
            $profile = $info['profile'];
            $status = $info['status'];
            $desc = $info['description'];
            $semat = $info['semat'];
            $instagram = $info['instagram'];
            $hash = new \Hashids\Hashids();
            $enhash = $hash->encode($id);
            $vas = $id + 5456843;
            $envas = $hash->encode($vas);
            $comment = $info['comment'];
            if ($comment == 'ok'){
                $p = 'open';
            }elseif ($comment == 'no'){
                $p = '<span style="color:white;background-color:red">Close<span>';
            }
        @endphp
    @endforeach
    <div class="row">
        <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            User Information
            <form style="float: right" method="get" action="{{route('edituser')}}">
                @csrf
                <button type="submit" style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: transparent;">Edit</button>
                <input type="hidden" name="var" value="{{$enhash}}">
            </form>

            <form style="float: right" method="post" action="{{route('deleteuser')}}">
                @csrf
                <input type="hidden" name="var" value="{{$enhash}}">
                <button style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: transparent;">Delete</button>
            </form>
            @if($status == 0)
            <form style="float: right" method="post" action="{{route('banneduser')}}">
                @csrf
                <input type="hidden" name="value" value="1">
                <input type="hidden" name="envas" value="{{$envas}}">
                <button style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: red;color: white">Ban</button>
            </form>
                @elseif($status == 1)
                <form style="float: right" method="post" action="{{route('banneduser')}}">
                    @csrf
                    <input type="hidden" name="value" value="0">
                    <input type="hidden" name="envas" value="{{$envas}}">
                    <button style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: green;color: white">UnBan</button>
                </form>
            @endif
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
        <div class="card-body">
            Id : {{$id}}
            <br>
            name : {{$name}}
            <br>
            Email : {{$email}}
            <br>
            Role : {{$role}}
            <br>
            Profile = {{$profile}}
            <br>
            Semat = {{$semat}}
            <br>
            Descripion = {{$desc}}
            <br>
            Banned User = {{$status}}
            <br>
            Comment = {!! $p !!}
        </div>
    </div>
        </div>
        <div class="col-md-6">
            <div class="card-header">
                All User Send
            </div>
            <div class="card-body">
                <div id="results" class="row">
                    @if(!empty($allsend))
                    @foreach($allsend as $sends)
                        @php
                            $id = $sends->id;
                      $title = $sends->title;
                      $description = $sends->description;
                      $user = $sends->userid;
                      $getsuser = \App\Models\User::find($user);
                      $picuser = $sends->profile ?? null;
                      $explodes = explode('public', $picuser)[1] ?? null;
                      if (!empty($picuser)) {
                          $imgz = $explodes;
                      } else {
                          $imgz = asset('prof.jpg');
                      }
                      $imgs = $sends->picture;
                      $imgexp = explode('public', $imgs)[1];
                      $slug = $sends->slug;
                      $time = $sends->time;
                      $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
                      $hash = new \Hashids\Hashids();
                      $ids = $hash->encode($id);
                      $category = $sends->category;
                      $vip = $sends->vip;
                      $likecount = \App\Models\like::getcounts($id, 'content');
                      if (\App\Models\like::check(\Illuminate\Support\Facades\Auth::id(), "content", $id)->count()) {
                          $bbc = ' <i class="fas fa-heart" style="font-size: 18px;padding-right: 5px;color: red"></i>';
                      } else {
                          $bbc = '<i class="far fa-heart" style="font-size: 18px;padding-right: 5px"></i>';
                      }
                      if ($vip) {
                          $vips = '<div style = "position: absolute;right: 0;top: 0;padding: 8px;background-color: gold;color: #1a202c" > ویژه</div >';
                      } else {
                          $vips = null;
                      }
                        @endphp
                        <br>
                        <div class="row col-md-4">
                            <a href="{{route('showcontent', ['vals' => $ids, 'title' => $slug])}}">
                                <div class="card" id="cefas" style="border-radius: 25px;">
                                    <div class="card-header" style="background-color: transparent;padding: 0px">
                                        <img src="{{$imgexp}}" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                        {!! $vips !!}
                                    </div>
                                    <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                        <p style="direction: rtl;text-align: right;font-size: 17px;padding: 0px;margin-bottom: 3px;font-weight: bold;line-height: 32px" id="fghhr">{{Str::limit($title, 95)}}</p>
                                        <br>
                                        <p style="direction: rtl;text-align: right;font-size: 13px;padding: 0px;">{{Str::limit($description, 100)}}</p>
                                        <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">{{$category}}</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>{{$date}}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                        @else
                        <p style="font-weight: bold;font-size: 20px;">Null</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-12">
            <br>
            <div class="card-header">
                All User In Website
            </div>
            <div class="card-body">
                <div id="results" class="row">
                    @foreach($allcontentsz as $contents)
                        @php
                            $id = $contents->id;
                      $title = $contents->title;
                      $description = $contents->description;
                      $user = $contents->userid;
                      $getsuser = \App\Models\User::find($user);
                      $picuser = $getsuser->profile ?? null;
                      $explodes = explode('public', $picuser)[1] ?? null;
                      if (!empty($picuser)) {
                          $imgz = $explodes;
                      } else {
                          $imgz = asset('prof.jpg');
                      }
                      $imgs = $contents->picture;
                      $imgexp = explode('public', $imgs)[1];
                      $slug = $contents->slug;
                      $time = $contents->time;
                      $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
                      $hash = new \Hashids\Hashids();
                      $ids = $hash->encode($id);
                      $category = $contents->category;
                      $vip = $contents->vip;
                      $likecount = \App\Models\like::getcounts($id, 'content');
                      if (\App\Models\like::check(\Illuminate\Support\Facades\Auth::id(), "content", $id)->count()) {
                          $bbc = ' <i class="fas fa-heart" style="font-size: 18px;padding-right: 5px;color: red"></i>';
                      } else {
                          $bbc = '<i class="far fa-heart" style="font-size: 18px;padding-right: 5px"></i>';
                      }
                      if ($vip) {
                          $vips = '<div style = "position: absolute;right: 0;top: 0;padding: 8px;background-color: gold;color: #1a202c" > ویژه</div >';
                      } else {
                          $vips = null;
                      }
                        @endphp
                    <br>
                        <div class="row col-md-4">
                            <a href="{{route('showcontent', ['vals' => $ids, 'title' => $slug])}}">
                                <div class="card" id="cefas" style="border-radius: 25px;">
                                    <div class="card-header" style="background-color: transparent;padding: 0px">
                                        <img src="{{$imgexp}}" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                        {!! $vips !!}
                                    </div>
                                    <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                        <p style="direction: rtl;text-align: right;font-size: 17px;padding: 0px;margin-bottom: 3px;font-weight: bold;line-height: 32px" id="fghhr">{{Str::limit($title, 95)}}</p>
                                        <br>
                                        <p style="direction: rtl;text-align: right;font-size: 13px;padding: 0px;">{{Str::limit($description, 100)}}</p>
                                        <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">{{$category}}</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>{{$date}}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/lazypic.js')}}"></script>
</body>
</html>
