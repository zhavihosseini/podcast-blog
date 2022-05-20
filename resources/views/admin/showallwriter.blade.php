<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Search in WRT</title>
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white">
    Search in WRT {{$getresultcountwrt}}
</div>
<section class="container-fluid">
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
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Ban</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getwrt as $user)
                @php
                    $id = $user->id;
                    $name = $user->name;
                    $email = $user->email;
                    $role = $user->role;
                    $username = $user->username;
                    $emailver = $user->email_verified_at;
                    $profile = $user->profile ?? null;
                    $description = $user->description;
                    $semat = $user->semat;
                    $instagram = $user->instagram;
                    $img = explode('public',$profile)[1] ?? null;
                    if (empty($img)){
                        $img = asset('default.png');
                    }
                    $hash = new \Hashids\Hashids();
                    $enhash = $hash->encode($id);
                    $status = $user->status;
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
        @if(!empty($get))
            <div class="d-flex justify-content-center">
                {!! $get->appends(['sort'=>'department'])->links() !!}
            </div>
        @endif
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
