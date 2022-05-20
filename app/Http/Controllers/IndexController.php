<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadImageRequest;
use App\Http\Requests\username;
use App\Models\comment;
use App\Models\content;
use App\Models\like;
use App\Models\links;
use App\Models\saveduser;
use App\Models\User;
use Carbon\Carbon;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Jorenvh\Share\Share;
use Jorenvh\Share\ShareFacade;
use Morilog\Jalali\Jalalian;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
class IndexController extends Controller
{
    public function index(Request $request)
    {
/*        $b = Analytics::fetchMostVisitedPages(Period::days(7), 4);
        dd($b);*/
        $allcontents = DB::table('content')->orderBy('id', 'desc')->paginate(6);
        $alllink = DB::table('links')->get()->toArray();
        $random_link = Arr::random($alllink);
        $linkid = $random_link->id;
        $links = $random_link->link;
        $linkslug = $random_link->slug;
        SEOMeta::setTitle('ژاوی - صفحه اصلی');
        SEOMeta::setDescription('بهترین سرویس آموزش درآمد از اینترنت و کارآفرینی');
        SEOMeta::setCanonical('https://zhavi.ir/');

        OpenGraph::setDescription('بهترین سرویس آموزش درآمد از اینترنت و کارآفرینی');
        OpenGraph::setTitle('ژاوی - صفحه اصلی');
        OpenGraph::setUrl('https://zhavi.ir/');
        OpenGraph::addProperty('type', 'content');

        TwitterCard::setTitle('ژاوی - صفحه اصلی');
        TwitterCard::setSite('@zhavi');

        JsonLd::setTitle('ژاوی - صفحه اصلی');
        JsonLd::setDescription('بهترین سرویس آموزش درآمد از اینترنت و کارآفرینی');
        $givecontents = DB::table('content')->where('link',$linkid)->orderBy('id','desc')->limit(4)->get()->toArray();
        $data = '';
        if ($request->ajax()) {
            foreach ($allcontents as $contents) {
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
                $dez = Str::length($title);
                /*if ($dez < 80){
                    $description = Str::limit($description,130);
                    $title = Str::limit($title,105);
                }elseif ($dez > 80){
                    $description = Str::limit($description,85);
                    $title = Str::limit($title,220);
                }*/
                $data .= '
                    <div class="col-md-4">
                    <a href="' . route('showcontent', ['vals' => $ids, 'title' => $slug]) . '">
                        <div class="card" id="cefas" style="border: 1px solid lightgrey">
                            <div class="card-header" style="background-color: transparent;padding: 0px">
                                    <img src="' . $imgexp . '" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                    ' . $vips . '
                            </div>
                            <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                <p style="direction: rtl;text-align: right;font-size: 15px;padding: 0px;margin-bottom: 15px;font-weight: bold;line-height: 32px" id="fghhr">' . $title . '</p>
                                <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">' . $category . '</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>' . $date . '</span></p>
                        </div>
                        </div>
                        </a>
                    </div>
                   ';
            }
            return $data;
        }
        $biggestman = DB::table('biggestman')->get()->toArray();
        $randbiggestman = Arr::random($biggestman);
        $fivenewcontent = DB::table('content')->orderBy('id','desc')->limit(5)->get()->toArray();
        $allcontents = content::getAlls();
        $color = ['#fdeded','#e6e6ff','#f0f0f4','#ccccff','#f0f5f5','#e0ebeb','#ccffcc'];
        $colroshuffle = Arr::random($color,1);
        $givenewupdated = DB::table('content')->get()->toArray();
       /* foreach ($givenewupdated as $updatescont){
          $time = $updatescont->time_update ?? null;
          if (!empty($time)){
              $times = Carbon::now()->diffInDays($time);
              if ($times <= 8){
                  $gettime[] = $updatescont;
              }
          }
        }*/
        return view('new', compact('allcontents'),['allfivecontent'=>$fivenewcontent,'biggestman'=>$randbiggestman,'givecontents'=>$givecontents,'linkname'=>$links,'colorshuffle'=>$colroshuffle,'linkslug'=>$linkslug]);
        /*        $allcontents = content::getAlls();
                return view('test',['allcontent'=>$allcontents]);*/
    }
    public function dashboard(Request $request){
        $user = Auth::user();
        $vip = $user->vip;
        $exptime = $user->exptime;
        if (Auth::check()){
            if (!empty($vip) and $exptime > \Carbon\Carbon::now()->toArray()['formatted']){
                $data = DB::table('content')->where('vip','vip')->orderBy('id','desc')->limit(3)->get()->toArray();
                $title = 'ویژه';
            }else{
                $data = DB::table('content')->where('vip', null)->orderBy('id','desc')->limit(3)->get()->toArray();
                $title = 'رایگان';
            }
        }
        $color = ['#fdeded','#e6e6ff','#f0f0f4','#ccccff','#f0f5f5','#e0ebeb','#ccffcc'];
        $colroshuffle = Arr::random($color,1);
        return view('dashboard',['all'=>$data,'title'=>$title,'colorshuffle'=>$colroshuffle]);
    }
    public function content(Request $request)
    {
        return view('content');
    }
    public function searchbycategory(Request $request)
    {
        $categorys = $request->category;
        $cat = DB::table('category')->where('slug',$categorys)->get()->toArray();
        foreach ($cat as $item) {
            $catvalue = $item->name;
        }
        $allcate = DB::table('content')->where('category', $catvalue)->orderBy('id', 'desc')->paginate(9);
        $allcatecount = DB::table('content')->where('category', $catvalue)->count();
        $datas = '';
        if ($request->ajax()) {
            foreach ($allcate as $contentz) {
                $id = $contentz->id;
                $title = $contentz->title;
                $description = $contentz->description;
                $user = $contentz->userid;
                $getsuser = \App\Models\User::find($user);
                $picuser = $contentz->profile ?? null;
                $explodes = explode('public', $picuser)[1] ?? null;
                if (!empty($picuser)) {
                    $imgz = $explodes;
                } else {
                    $imgz = asset('prof.jpg');
                }
                $imgs = $contentz->picture;
                $imgexp = explode('public', $imgs)[1];
                $slug = $contentz->slug;
                $time = $contentz->time;
                $date = \Morilog\Jalali\Jalalian::forge($time)->ago();
                $hash = new \Hashids\Hashids();
                $ids = $hash->encode($id);
                $category = $contentz->category;
                $vip = $contentz->vip;
                if ($vip) {
                    $vips = '<i class="fas fa-star" style="font-size: 10px;padding: 5px;color: gold" title="ویژه"></i>';
                } else {
                    $vips = null;
                }
                $datas .= '<div class="col-md-4">
                    <a href="' . route('showcontent', ['vals' => $ids, 'title' => $slug]) . '">
                        <div class="card" id="cefas" style="border: 1px solid lightgrey">
                            <div class="card-header" style="background-color: transparent;padding: 0px">
                                    <img src="' . $imgexp . '" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                    ' . $vips . '
                            </div>
                            <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                <p style="direction: rtl;text-align: right;font-size: 15px;padding: 0px;margin-bottom: 15px;font-weight: bold;line-height: 32px" id="fghhr">' . $title . '</p>
                                <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">' . $category . '</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>' . $date . '</span></p>
                        </div>
                        </div>
                        </a>
                    </div>';
            }
            return $datas;
        }
        return view('showbycategory',['category'=>$catvalue,'categoryslug'=>$categorys,'allcatecount'=>$allcatecount],compact('allcate'));
    }
    public function showcontent(Request $request)
    {
        $userid = Auth::id();
        $vals = $request->vals;
        $titles = $request->title;
        $hash = new Hashids();
        $dehash = $hash->decode($vals);
        $getcontent = content::searchit($dehash, $titles)->toArray();
        $url = URL::full();
        foreach ($getcontent as $cons){
            $title = $cons['title'];
            $id = $cons['id'];
            $slug = $cons['slug'];
            $category = $cons['category'];
            $time = $cons['time'];
            $keyword = $cons['keyword'];
            $content = $cons['content'];
            $date = Carbon::parse($time)->format('Y-m-d');
            $description = $cons['description'];
            $shareButtons = \Share::page($url,$title)
                ->twitter()
                ->telegram()
                ->whatsapp();
        }
        Str::macro('readDuration', function(...$text) {
            $totalWords = str_word_count(implode(" ", $text));
            $minutesToRead = round($totalWords / 210);
            return (int)max(1, $minutesToRead);
        });
        $dv = Str::readDuration($content). ' دقیقه خواندن ';
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::addMeta('content:published_time', $date, 'property');
        SEOMeta::addKeyword([$keyword]);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($title);
        OpenGraph::setUrl('https://zhavi.ir/content/show/'.$vals.'/'.$titles);
        OpenGraph::addProperty('type', 'content');
        OpenGraph::addProperty('locale', 'fa-IR');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@zhavi');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);
        JsonLd::setType('content');
        $hash = new Hashids();
        $enhash = $hash->encode($id);
        $comments = DB::table('comment')->where('userid',$userid)->where('status',1)->where('postid',$id)->get()->toArray();
        $allcomment = DB::table('comment')->where('postid',$id)->where('status',2)->orderBy('id','desc')->paginate(5);
        $allcommentcount = DB::table('comment')->where('postid',$id)->where('status',2)->count();
        $previous = DB::table('content')->where('id','<',$id)->orderBy('id','desc')->first();
        $next = DB::table('content')->where('id','>',$id)->orderBy('id')->first();
        $data = '';
        if ($request->ajax()) {
            foreach ($allcomment as $contents) {
                $coment = $contents->content;
                $userid = $contents->userid;
                $user = User::find($userid)->profile ?? null;
                if (!empty($user)) {
                    $img = explode('public', $user)[1] ?? null;
                }else{
                    $img = asset('default.png');
                }
                $times = $contents->time;
                $name = User::find($userid)->name;
                $instagram = User::find($userid)->instagram ?? null;
                $dates = \Morilog\Jalali\Jalalian::forge($times)->ago();
                if (!empty($instagram)){
                    $insta = '<a href="https://www.instagram.com/'.$instagram.'/" title="اینستاگرام '.$name.'"><span style="float: left;margin-left: 10px;font-size: 14px"><i class="fab fa-instagram"></i></span></a>';
                }else{
                    $insta = null;
                }
                $data .= '<div class="row col-md-12" style="direction: rtl;margin-right: 0px">
                                <div class="row col-md-12" style="padding: 8px">
                                    <p><span><img src="'.$img.'" width="35px" height="35px" style="float: right;border-radius: 50%"></span><span style="float:right;margin-right:10px"> '.$name.' </span> '.$insta.' <br> <span style="float: right;margin-right: 10px;color: #3f3e3e;font-size: 12px;margin-top: 8px">'.$dates.'</span><span style="float: left"></span></p>
                                    <p style="font-size: 13px;line-height: 25px" title="'.$coment.'">'.$coment.'</p>
                                </div>
                            </div>
                            <hr>';
            }
            return $data;
        }
        if ($getcontent !== []) {
            $likecount = like::getcounts($dehash, 'content');
            return view('showcontent', ['text' => $getcontent, 'like' => $likecount,'commentcount'=>$allcommentcount,'allcomment'=>$allcomment,'categorys'=>$category,'usercomment'=>$comments,'next'=>$next,'previous'=>$previous,'post'=>$enhash,'vals'=>$vals,'slug'=>$slug,'timetoread'=>$dv],compact('shareButtons'));
        }else{
            abort(404);
        }
    }
    public function timetest()
    {
        dd($date = Carbon::now()->toArray()['formatted']);
    }

    public function saveinfouser(username $request)
    {
        $res = $request->toArray();
        $username = $res['username'];
        $name = $res['name'];
        $semat = $res['semat'] ?? null;
        $user = User::findOrFail(Auth::id());
        $time = Carbon::now()->toArray()['formatted'];
        $user->name = $name;
        $user->timeupdate = $time;
        $user->semat = $semat ?? null;
        $user->username = $username;
        $user->save();
            return redirect()->back()->with('complete', 'با موفقیت ذخیره شد');
        }
    public function saveduserdescription(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'ADM' or Auth::user()->role == 'WRT') {
                $user = Auth::user();
                $res = $request->toArray();
                $description = $res['description'];
                $user->description = $description;
                $user->save();
                return redirect()->back();
            } else {
                abort(404);
            }
        }
    }

    public function usereditprofile()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'ADM' or Auth::user()->role == 'WRT') {
                return view('user.editprofile');
            } else {
                abort(404);
            }
        }
    }

    public function saveinstagram(Request $request)
    {
        $res = $request->toArray();
        $insta = $res['instagram'];
        $user = Auth::user();
        $user->instagram = $insta;
        $user->save();
        return redirect()->back();
    }

    public function savepictures(UploadImageRequest $request)
    {
        $res = $request->toArray();
        $file = $res['file'] ?? null;
        $user = User::findOrFail(Auth::id());
        $alluser = User::findOrFail(Auth::id())->toArray()['profile'] ?? null;
        if (!empty($alluser)) {
            $prof = $alluser;
        }
        if ($file !== null) {
            if ($alluser !== null) {
                unlink($alluser);
            }
            $pathz = public_path() . '/profile/';
            $file->move($pathz, time());
            $paths = $pathz . time();
        } else {
            $paths = $prof;
        }
        $time = Carbon::now()->toArray()['formatted'];
        $user->profile = $paths;
        $user->save();
        return redirect()->back()->with('complete', 'با موفقیت ذخیره شد');
    }

    public function deleteprofilephoto(Request $request)
    {
        $userid = Auth::id();
        $profile = Auth::user()->profile ?? null;
        if (!empty($profile)) {
            unlink($profile);
            $user = Auth::user();
            $user->profile = null;
            $user->save();
        }
        return redirect()->back();
    }

    public function showpodcast()
    {
        return view('showpodcast');
    }

    public function savelike(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::id();
            $ids = $request->vals;
            $hash = new Hashids();
            $dehash = $hash->decode($ids);
            foreach ($dehash as $items) {
                $idsc = $items;
            }
            $categroy = $request->category;
            $time = Carbon::now()->toArray()['formatted'];
            $check = like::check($user, 'content', $idsc)->count();
            if ($check >= 1) {
                like::checkdelete($user, 'content', $idsc);
            } else {
                like::saveitlike($categroy, $idsc, $time, $user);
            }
            return redirect()->back();
        } else {
            return redirect(route('login'));
        }
    }

    public function newss()
    {
        return view('newversion');
    }
    public static function getscons(Request $request)
    {
        $var = $request->var;
        $sort = $request->sort;
        $give = links::get_by_slug($var)->toArray();
        if ($give !== []){
        foreach ($give as $slus) {
            $id = $slus['id'];
            $name = $slus['link'];
            $desc = $slus['description'];
            $list = $slus['list'] ?? null;
            if ($var == 'vip-content'){
                if ($sort == 'newest') {
                    $givedata = DB::table('content')->where('vip', "vip")->orderBy('id', 'desc')->paginate(9);
                }elseif ($sort == 'oldest'){
                    $givedata = DB::table('content')->where('vip', "vip")->orderBy('id', 'asc')->paginate(9);
                }else{
                    abort(404);
                }
            }else{
            if ($sort == 'newest') {
                $givedata = DB::table('content')->where('link', $id)->orderBy('id', 'desc')->paginate(9);
            }elseif ($sort == 'oldest'){
                $givedata = DB::table('content')->where('link', $id)->orderBy('id', 'asc')->paginate(9);
            }else{
                abort(404);
            }
        }
            if ($var == 'free-content-for-you'){
                $vars = null;
                if ($sort == 'newest') {
                    $givedata = DB::table('content')->where('vip', $vars)->orderBy('id', 'desc')->paginate(9);
                }elseif ($sort == 'oldest'){
                    $givedata = DB::table('content')->where('vip', $vars)->orderBy('id', 'asc')->paginate(9);
                }else{
                    abort(404);
                }
            }
        }
                $data = '';
                if ($request->ajax()) {
                    foreach ($givedata as $contents) {
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
                        $data .= '
                    <div class="col-md-4">
                    <a href="' . route('showcontent', ['vals' => $ids, 'title' => $slug]) . '">
                        <div class="card" id="cefas" style="border-radius: 2px;border: 1px solid lightgrey">
                            <div class="card-header" style="background-color: transparent;padding: 0px">
                                    <img src="' . $imgexp . '" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                    ' . $vips . '
                            </div>
                            <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                <p style="direction: rtl;text-align: right;font-size: 17px;padding: 0px;margin-bottom: 3px;font-weight: bold;line-height: 32px" id="fghhr">' . Str::limit($title, 95) . '</p>
                                <br>
                                <p style="direction: rtl;text-align: right;font-size: 13px;padding: 0px;">' . Str::limit($description, 100) . '</p>
                                <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">' . $category . '</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>' . $date . '</span></p>
                        </div>
                        </div>
                        </a>
                    </div>';
                    }
                    return $data;
                }
            return view('gets', ['gives' => $give, 'var' => $var,'sort'=>$sort,'linkname'=>$name], compact('givedata'));
            }else{
            abort(404);
        }
    }
    public function searchinte(Request $request){
       $var = $request->names;
       $search = $request->search;
        $give = links::get_by_slug($var)->toArray();
        if ($give !== []){
            foreach ($give as $slus) {
                $id = $slus['id'];
                $name = $slus['link'];
            }
                if ($var == "vip-content"){
                        $givedata = DB::table('content')->where('vip', 'vip')->where('title','LIKE', "%{$search}%")->orderBy('id', 'desc')->paginate(9);
                }else{
                    $givedata = DB::table('content')->where('title','LIKE', "%{$search}%")->orderBy('id', 'desc')->paginate(9);
                }
            $data = '';
            if ($request->ajax()) {
                foreach ($givedata as $contents) {
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
                        $vips = '<i class="fas fa-star" style="font-size: 10px;padding: 5px;color: gold" title="ویژه"></i>';
                    } else {
                        $vips = null;
                    }
                    $data .= '
                 <a href="'.route('showcontent',['vals'=>$ids,'title'=>$slug]).'">
            <div class="row col-md-8 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;border-radius: 20px;padding: 10px 5px;">
                <div class="col-md-3">
                    <div class="card-image" style="background-image: url('.$imgexp.');height: 100%;width: 100%;padding-top: 0px;border-radius: 20px;filter: none;">
                        <img src="'.$imgexp.'" alt="Psychopomp" id="imcontent" />
                    </div>
                </div>
                <div class="col-md-9">
                    <i class="fas fa-align-right" style="float: left;font-size: 30px;color: #0c63e4;padding: 8px"></i>
                    <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                       '.Str::limit($title,90).'
                    </div>
                    <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                        <p>'.\Illuminate\Support\Str::limit($description,150).'</p>
                    </div>
                    <p style="font-size: 12px;text-align: right;color: #1e2125"> '.$date.' <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">'.$category.'</span> '.$vips.' </p>
                </div>
            </div>
                </a>
                <br>';
                }
                return $data;
            }
            return view('searchint',['gives'=>$give,'varsz'=>$var,'search'=>$search,'name'=>$name],compact('givedata'));
/*            return view('searchint',['gives'=>$give,'varsz'=>$var,'search'=>$search,'name'=>$name,'givedatacount'=>$givedatacount],compact('givedata'));*/
            }else{
            abort(404);
        }
    }
    public function getinallsnow(Request $request){
        $q = $request->q;
        $all = content::query()->where('title','LIKE', "%{$q}%")->paginate(1);
        $data = '';
        if ($request->ajax()) {
            foreach ($all as $contents) {
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
                    $vips = '<i class="fas fa-star" style="font-size: 10px;padding: 5px;color: gold" title="ویژه"></i>';
                } else {
                    $vips = null;
                }
                $data .= '
                 <a href="'.route('showcontent',['vals'=>$ids,'title'=>$slug]).'">
            <div class="row col-md-8 text-center" style="margin: 5px auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;border-radius: 20px;padding: 10px 5px;">
                <div class="col-md-3">
                    <div class="card-image" style="background-image: url('.$imgexp.');height: 100%;width: 100%;padding-top: 0px;border-radius: 20px;filter: none;">
                        <img src="'.$imgexp.'" alt="Psychopomp" id="imcontent" />
                    </div>
                </div>
                <div class="col-md-9">
                    <i class="fas fa-align-right" style="float: left;font-size: 30px;color: #0c63e4;padding: 8px"></i>
                    <div class="card-title" style="direction: rtl;text-align: right;font-weight: bold;margin-top: 8px;font-size: 20px;color: #1e2125">
                       '.Str::limit($title,90).'
                    </div>
                    <div class="card-body" id="carddesc" style="direction: rtl;padding-right: 0px;padding-left: 0px;font-size: 15px;padding-top: 5px;text-align: right;color: #495057">
                        <p>'.\Illuminate\Support\Str::limit($description,150).'</p>
                    </div>
                    <p style="font-size: 12px;text-align: right;color: #1e2125"> '.$date.' <i class="fas fa-circle" style="font-size: 4px;padding: 8px"></i> <span style="border-radius: 25px;background-color: #e9e9e2;padding: 4px;font-size: 12px;color: #1e2125">'.$category.'</span> '.$vips.' </p>
                </div>
            </div>
                </a>
                <br>';
            }
            return $data;
        }
        return view('searchresult',['name'=>$q],compact('all'));
    }
    public function savedcomment(Request $request){
       $res = $request->toArray();
       $comment = $res['comment'];
       $time = Carbon::now()->toArray()['formatted'];
       $postid = $res['post'];
       $dec = Crypt::decrypt($postid);
       $hash = new Hashids();
       $dehash = $hash->decode($dec);
       foreach ($dehash as $item){
           $ids = $item;
       }
       $postcat = 'content';
       $userid = Auth::id();
       comment::save_all_comments($comment,'1',$userid,$ids,$postcat,$time);
       return redirect()->back();
    }
    public function getbyusername(Request $request){
        $username = $request->us;
        $user = DB::table('users')->where('username',$username)->get()->toArray();
        if ($user) {
            foreach ($user as $usr) {
                $ids = $usr->id;
                $description = $usr->description;
                $semat = $usr->semat;
                $name = $usr->name;
                $instagram = $usr->instagram;
                $pic = $usr->profile ?? null;
                if (empty($pic)) {
                    $pic = asset('default.png');
                }
            }
            $all[] = ['desc' => $description, 'semat' => $semat, 'name' => $name, 'insta' => $instagram, 'pic' => $pic];
            $content = DB::table('content')->where('userid', $ids)->orderBy('id', 'desc')->paginate(9);
            $allcontentcount = DB::table('content')->where('userid', $ids)->count();
            $data = '';
            if ($request->ajax()) {
                foreach ($content as $contents) {
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
                    $data .= '
                    <div class="col-md-4">
                    <a href="' . route('showcontent', ['vals' => $ids, 'title' => $slug]) . '">
                        <div class="card" id="cefas" style="border-radius: 2px;border: 1px solid lightgrey">
                            <div class="card-header" style="background-color: transparent;padding: 0px">
                                    <img src="' . $imgexp . '" alt="Psychopomp" width="100%" class="lazy" id="bg-image" />
                                    ' . $vips . '
                            </div>
                            <div class="card-body" style="padding-bottom: 1px;padding-top: 2px;direction: rtl;color: #1a202c">
                                <p style="direction: rtl;text-align: right;font-size: 15px;padding: 0px;margin-bottom: 3px;font-weight: bold;line-height: 32px" id="fghhr">' . Str::limit($title, 90) . '</p>
                              <br>
                                <p class="row"><span class="col-md-6" style="text-align: right;font-size: 12px;font-weight: bold"><span id="borderbutt">' . $category . '</span></span><span class="col-md-6" style="text-align: left;font-size: 12px;font-weight: bold;"><i class="far fa-clock" style="padding: 5px;font-weight: bold"></i>' . $date . '</span></p>
                        </div>
                        </div>
                        </a>
                    </div>';
                }
                return $data;
            }
            return view('getbyusername',['all'=>$all,'username'=>$username,'allcontentcount'=>$allcontentcount],compact('content'));
        }else{
            abort(404);
        }
    }
    public function deletethiscomments(Request $request){
        $value= $request->value;
        $userid = Auth::id();
        $hash = new Hashids();
        $decodevalue = $hash->decode($value);
        foreach ($decodevalue as $commentid){
            $itemid = $commentid;
        }
        $give = DB::table('comment')->where('id',$itemid)->where('userid',$userid)->delete();
        return redirect()->back();
    }
}
/*public function savedcontents(Request $request){
        $userid = Auth::id();
        $saveduser = saveduser::saveduser($userid)->toArray();
        if (!empty($saveduser)) {
            foreach ($saveduser as $saves) {
                $contentid = $saves['contentid'];
                $time = $saves['time'];
                $dates = Jalalian::forge($time)->ago();
                $ddf = [1,2,5,48,9,7];
                $alls[] = DB::table('content')->where('id','=',$ddf)->paginate(1);
            }
            dd($alls);
            $allscontentcount = DB::table('saveduser')->where('userid',$userid)->count();
            return view('savedcontent',['alls'=>$allcons,'contentusercount'=>$allscontentcount]);
        }else {
            return view('savedcontent');
        }
    }
public function usersaveds(Request $request){
$val = $request->values;
$dec = Crypt::decrypt($val);
$hash = new Hashids();
$dehash = $hash->decode($dec);
    foreach ($dehash as $item) {
        $ids = $item;
}
    $userid = Auth::id();
    $time = Carbon::now()->toArray()['formatted'];
    if (DB::table('saveduser')->where('userid',$userid)->where('contentid',$ids)->count() >= 1){
        saveduser::deletefromdb($ids,$userid);
    }else {
        saveduser::savedusercontent($userid, $ids, "content", $time);
    }
    return redirect()->back();
}
}*/
