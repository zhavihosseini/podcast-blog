<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;">
    Edit User
</div>
<br><br>
<div class="container">
    <div class="row col-md-12 text-center">
        @foreach($user as $usr)
            @php
            $id = $usr['id'];
            $name = $usr['name'];
$username = $usr['username'];
$description = $usr['description'];
$semat = $usr['semat'];
$instagram = $usr['instagram'];
$email = $usr['email'];
$hash = new \Hashids\Hashids();
$enhash = $hash->encode($id);
            @endphp
            @endforeach
        <form method="post" action="{{route('saveeditusers')}}">
            @csrf
            <label for="name">Name : </label>
            <input type="text" name="name" value="{{$name}}">
            <br><br>
            <label for="Username">Username : </label>
            <input type="text" name="username" value="{{$username}}">
            <br><br>
            <label for="email">Email : </label>
            <input type="email" name="email" value="{{$email}}">
            <br><br>
            <label for="description">description : </label>
            <input type="text" name="description" value="{{$description}}">
            <br><br>
            <label for="semat">semat : </label>
            <input type="text" name="semat" value="{{$semat}}">
            <br><br>
            <label for="instagram">instagram : </label>
            <input type="text" name="instagram" value="{{$instagram}}">
            <br><br>
            <input type="hidden" name="var" value="{{$enhash}}">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
