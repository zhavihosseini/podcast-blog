<section class="container-fluid d-flex align-items-center" style="padding-top: 5px">
    <div class="container-fluid">
        <div class="row" id="contents">
            <div class="col-md-6" style="font-size: 28px;color: white;font-weight: bold;padding: 20px;line-height: 50px">
                به خانواده ما بپیوندید ما میبینیم ، میخونیم ، یاد میگیریم و حتما پیشرفت میکنیم .
                <br>
                <small style="font-size: 15px;font-weight: normal">اینجا کمکت میکنیم مثل ما پیشرفت کنی و نتایجت رو به اشتراک بزاری &#128293;</small>
                <br>
                <form method="get" action="{{route('register')}}">
                    @csrf
                    <button id="cardbutton" type="submit">ثبت نام</button>
                </form>
            </div>
            <div class="col-md-6" style="height: 80px;direction: ltr">
                <div class="card-body">
                    <div class="row ullist">
                        @php
                        $all = \Illuminate\Support\Facades\DB::table('content')->orderBy('id','desc')->limit(3)->get()->toArray();
                        @endphp
                        @foreach($all as $content)
                            @php
                                $id = $content->id;
             $title = $content->title;
  $description = $content->description;
  $category = $content->category;
  $img = $content->picture;
  $pic = explode('public',$img)[1];
  $slug = $content->slug;
  $time = $content->time;
  $userid = $content->userid;
  $user = \App\Models\User::find($userid);
  $name = $user->name;
 $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
  $exp = \Illuminate\Support\Carbon::now()->diffInDays($time);
  if ($exp <= 7){
                     $db = '<div style="position: absolute;top: 0px;right: 0px;background-color: gold;font-size: 12px;padding: 8px;color: #1a202c">جدید </div>';
                 }else{
                     $db = null;
                 }
  $hash = new \Hashids\Hashids();
  $hashid = $hash->encode($id);
                            @endphp
                            <a href="{{route('showcontent',['vals'=>$hashid,'title'=>$slug])}}">
                        <div class="row lilist" style="margin: 0px;padding: 0px">
                            <div class="col-md-9 ppod" style="direction: rtl">
                                <span>{{\Illuminate\Support\Str::limit($title,80)}}</span>
                                <br>
                                <span style="font-size: 10px;color: #2b2a2a">{{\Illuminate\Support\Str::limit($description,90)}}</span>
                                <hr style="margin-bottom: 2px">
                                <p style="direction: rtl;margin-bottom: 0px;margin-top: 5px"><span style="font-size: 12px">{{$name}}</span><i class="fas fa-circle" style="font-size: 3px;margin: 0px 5px"></i><span><span style="border-radius: 25px;background-color: #e9e9e2;padding: 5px;font-size: 10px">{{$category}}</span><i class="fas fa-crown" style="font-size: 8px;margin-right: 5px"></i><span style="font-size: 12px;float: left;margin-top: 6px">{{$date}}</span><i class="far fa-clock" style="float: left;margin-bottom: 0px;margin-top: 8px;font-size: 13px;margin-left: 5px"></i></p>
                            </div>
                            <div class="col-md-3 ppod" style="padding: 5px" id="ppof">
                                <div class="card-image" style="background-image: url({{$pic}});width: 100%;height: 100%" data-image-full="{{asset($pic)}}">
                                <img src="{{$pic}}" width="100%" height="100%" style="padding: 0px">
                                </div>
                            </div>
                        </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
