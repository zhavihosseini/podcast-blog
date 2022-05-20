<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Send | Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <link href="{{asset('css/sort.css')}}" rel="stylesheet">

</head>
<body>
<div class="container-fluid" style="background-color: #1e2125;color: white;font-weight: bold">
    User Send
</div>
<br>
<div class="container">
    <h3>All User Send<span style="float: right">{{$allcontentcount}}</span></h3>
    <hr>
</div>
<div class="container-fluid" style="direction: rtl">
    <div class="row" style="border: 1px solid lightgrey;padding: 20px;border-radius: 20px;max-width: 1500px;overflow-y: auto">
        <table class="table">
            <thead>
            <tr style="font-size:14px;font-weight: normal">
                <th scope="col">نام</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">بنر</th>
                <th scope="col">اسپانسر</th>
                <th scope="col">لینک اسپانسر</th>
                <th scope="col">دسته بندی</th>
                <th scope="col">وی آی پی</th>
                <th scope="col">ثبت</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مشاهده</th>
                <th scope="col">تغییر وی آی پی</th>
                <th scope="col">تغییر</th>
                <th scope="col">یوزر</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allcontent as $content)
                @php
                    $id = $content->id;
$title = $content->title;
$description = $content->description;
$sponser = $content->sponser;
$sponserlink = $content->sponserlink;
$vip = $content->vip ?? null;
$banner = $content->banner;
$category = $content->category;
$time = $content->time;
$dateup = \Morilog\Jalali\Jalalian::forge($time)->ago();
$up = $content->update ?? null;
$status = $content->status;
$hash = new \Hashids\Hashids();
$cr = $hash->encode($id);
$vb = \Illuminate\Support\Facades\Crypt::encrypt($cr);
$userid = $content->userid;
$userhash = new \Hashids\Hashids();
$hashus = $userhash->encode($userid);
$info = \App\Models\User::find($userid)->name;
                @endphp
                <tr style="font-size: 14px;direction: rtl">
                    <th scope="row">{{$info}}</th>
                    <th scope="row" style="font-weight: normal">{{\Illuminate\Support\Str::limit($title,10)}}</th>
                    <td>{{\Illuminate\Support\Str::limit($description,10)}}</td>
                    <td style="color: green">@if($banner)
                            دارد
                        @endif</td>
                    <td>{{\Illuminate\Support\Str::limit($sponser,10)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($sponserlink,10)}}</td>
                    <td>{{\Illuminate\Support\Str::limit($category,10)}}</td>
                    <td>
                        @if($vip)
                            <p style="background-color: #c7fbd9;color: #1e2125;padding: 4px;border-radius: 12px">وی آی پی</p>
                        @else
                            <p style="background-color: #fb9e9f;color: #1e2125;padding: 4px;border-radius: 12px">نیست</p>
                        @endif
                    </td>
                    <td>{{$dateup}}</td>
                    <td>
                        <form method="get" action="{{route('editcontentuseradmin')}}">
                            @csrf
                            <input type="hidden" name="vals" value="{{$vb}}">
                            <button id="virayesh">ویرایش</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route('deletecontentwriter')}}">
                            @csrf
                            <input type="hidden" name="vals" value="{{$vb}}">
                            <button type="submit" id="deletet">حذف</button>
                        </form>
                    </td>
                    <td>
                        @if($status == 1)
                            <p style="color: orange">ارسال شد</p>
                        @elseif($status == 2)
                            <p style="color: green">ثبت شد</p>
                        @elseif($status == 3)
                            <p style="color: red">اخطار</p>
                        @endif
                    </td>
                    <td>
                        <form method="get" action="{{route('showtestuseradmin',['vars'=>$vb])}}">
                            @csrf
                            <button id="seehfa">مشاهده</button>
                        </form>
                    </td>
                    <th scope="row">
                        @if(empty($vip))
                            <form method="post" action="<?php echo route('changevipcontentsadmin')?>">
                                @csrf
                                <input type="hidden" name="vals" value="{{$cr}}">
                                <input type="hidden" value="1" name="var">
                                <button type="submit" id="btnedit" style="border: 1px solid lightgrey;outline: none;background-color: #0c63e4;padding:4px;border-radius: 20px;font-size: 14px;color: white">وی آی پی</button>
                            </form>
                        @else
                            <form method="post" action="<?php echo route('changevipcontentsadmin')?>">
                                @csrf
                                <input type="hidden" name="vals" value="{{$cr}}">
                                <input type="hidden" value="0" name="var">
                                <button type="submit" id="btnedit" style="border: 1px solid lightgrey;outline: none;background-color: transparent;padding:4px;border-radius: 20px;font-size: 14px">برداشتن وی آی پی </button>
                            </form>
                        @endif
                    </th>
                    <th>
                        <form method="post" action="{{route('submituserpost')}}">
                            @csrf
                            <input type="hidden" name="val" value="1">
                            <input type="hidden" name="var" value="{{$vb}}">
                        <button>تایید</button>
                        </form>
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                            اخطار
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">دلیل اخطار رو بنویسید : </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{route('submituserpost')}}">
                                        @csrf
                                        <input type="hidden" name="val" value="0">
                                        <input type="hidden" name="var" value="{{$vb}}">
                                    <div class="modal-body">
                                        <textarea name="dalil" style="width: 100%" required></textarea>
                                    </div>
                                    <div class="modal-footer text-right">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </th>
                    <th>
                        <form method="get" action="{{route('showuserinfo')}}">
                            @csrf
                            <input type="hidden" name="var" value="{{$hashus}}">
                        <button >یوزر</button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

