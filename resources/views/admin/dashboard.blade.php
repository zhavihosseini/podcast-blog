<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    Welcome Admin !!
</div>
<br>
<div class="container">
    <div class="row col-md-12">
        <div class="col-md-2">
            <form method="get" action="<?php echo route('category')?>">
                @csrf
            <button id="cate" class="btn">Category</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('links')?>">
                @csrf
                <button id="cate" class="btn">Links</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('savecontent')?>">
                @csrf
                <button id="cate" class="btn">Content</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('Tabs')?>">
                @csrf
                <button id="cate" class="btn">Tabs</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('usersend')?>">
                @csrf
                <button id="cate" class="btn">User Send</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('allcommentfromusers')?>">
                @csrf
                <button id="cate" class="btn">Comments</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="get" action="<?php echo route('biggestman')?>">
                @csrf
                <button id="cate" class="btn">Biggest man</button>
            </form>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row col-md-12 text-center">
                <form method="get" action="{{route('searchinuser')}}">
                    @csrf
                    <input type="text" name="search">
                    <select name="select">
                        <option>username</option>
                        <option>name</option>
                        <option>email</option>
                    </select>
                </form>
            </div>
        </div>
        <br>
        <br>
        <section class="container-fluid">
            <div class="card-header">
                All Users
                <span style="float: right;padding: 0px 8px"> All user : {{$alluserscount}} </span>
                <span style="float: right;padding: 0px 8px;background-color: red;color: white"> Banned User : {{$allbannedusercount}} </span>
            </div>
            <form method="get" action="{{route('showallWriter')}}">
                @csrf
                <button><span style="padding: 0px 8px;background-color: rgba(63,61,65,0.44);">All WRT : {{$allwriter}}</span></button>
            </form>
            <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email-Ver</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Description</th>
                    <th scope="col">Semat</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Status</th>
                    <th scope="col">comment</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Ban</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alluser as $user)
                    @php
                    $id = $user['id'];
                    $name = $user['name'];
                    $email = $user['email'];
                    $role = $user['role'];
                    $username = $user['username'];
                    $emailver = $user['email_verified_at'];
                    $profile = $user['profile'] ?? null;
                    $description = $user['description'];
                    $comment = $user['comment'];
            if ($comment == 'ok'){
                $p = 'open';
            }elseif ($comment == 'no'){
                $p = '<span style="color:white;background-color:red">Close<span>';
            }
                    $semat = $user['semat'];
                    $instagram = $user['instagram'];
                    $img = explode('public',$profile)[1] ?? null;
                    if (empty($img)){
                        $img = asset('default.png');
                    }
                    $hash = new \Hashids\Hashids();
                    $enhash = $hash->encode($id);
                    $status = $user['status'];
                     $vas = $id + 5456843;
            $envas = $hash->encode($vas);
                    @endphp
                <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{$name}}</td>
                    <td>{{$username}}</td>
                    <td>{{\Illuminate\Support\Str::limit($email,20)}}</td>
                    <td>{{$role}}</td>
                    <td>{{$emailver ?? 'null'}}</td>
                    <td><a target="_blank" href="{{$img}}"><img src="{{$img ?? 'null'}}" style="width: 50px;border-radius: 50%"></a></td>
                    <td>{{\Illuminate\Support\Str::limit($description,20)}}</td>
                    <td>{{$semat}}</td>
                    <td>{{$instagram}}</td>
                    <td>
                        @if($status == 0)
                            <p style="color: green">Ok</p>
                            @elseif($status == 1)
                        <p style="color:red;">Banned !</p>
                        @endif
                    </td>
                    <td>{!! $p !!}</td>
                    <td>
                        <form method="get" action="{{route('showuserinfo')}}">
                            @csrf
                            <input type="hidden" name="var" value="{{$enhash}}">
                            <button type="submit">show</button>
                        </form>
                    </td>
                    <td> <form style="float: right" method="get" action="{{route('edituser')}}">
                            @csrf
                            <button type="submit" style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: transparent;">Edit</button>
                            <input type="hidden" name="var" value="{{$enhash}}">
                        </form></td>
                    <td> @if($status == 0)
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
                        @endif</td>
                    <td>  <form style="float: right" method="post" action="{{route('deleteuser')}}">
                            @csrf
                            <input type="hidden" name="var" value="{{$enhash}}">
                            <button style="border: 1px solid lightgrey;box-shadow: none;outline: none;background-color: transparent;">Delete</button>
                        </form></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </section>
    </div>
</div>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
