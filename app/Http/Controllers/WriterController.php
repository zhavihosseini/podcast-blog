<?php

namespace App\Http\Controllers;

use App\Http\Requests\Savecontent;
use App\Models\content;
use App\Models\contentuser;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WriterController extends Controller
{
   /* public function writecontents(Request $request){
        $allcontnetcount = DB::table('contentuser')->where('id',Auth::id())->count();
        $allcontentvipcount = DB::table('contentuser')->where('id',Auth::id())->where('vip','vip')->count();
        $allcategory = DB::table('category')->get()->toArray();
        $allcontent = DB::table('contentuser')->where('id',Auth::id())->orderBy('id','desc')->get()->toArray();
        return view('writer.contentuser',['allcontentcount'=>$allcontnetcount,'allcontentvip'=>$allcontentvipcount,'allcontent'=>$allcontent,'allcategory'=>$allcategory]);
    }*/
    public function savecontentuser(Savecontent $request){
        $res = $request->toArray();
        $title = $res['title'];
        $description = $res['description'];
        $sponser = $res['sponser'] ?? null;
        $sponserlink = $res['sponserlink'] ?? null;
        $category = $res['category'];
        $vip = $res['vip'] ?? null;
        $post = $res['post_content_fa'];
        $keyword = $res['keyword'];
        $file = $res['picture'] ?? null;
        $link = $res['link'];
        if($file !== null){
            $pathz = public_path() . '/userfile/';
            $file->move($pathz, time());
            $paths = $pathz . time();
        }
        $time = Carbon::now()->toArray()['formatted'];
        $userid = Auth::id();
        \App\Models\contentuser::save_contentuser($title,$description,$paths,$sponser,$sponserlink,$vip,$time,'',1,$category,$userid,$post,'',$link,$keyword);
        return redirect()->back();
    }
    public function changevipcontent(Request $request){
        $ids = $request->vals;
        $status = $request->var;
        if ($status == 0){
            $bb = null;
        }
        if ($status == 1){
            $bb = 'vip';
        }
        $hash = new \Hashids\Hashids();
        $dec = $hash->decode($ids);
        foreach ($dec as $item) {
            $cv = $item;
        }
        \App\Models\contentuser::changevip($cv,$bb);
        return redirect()->back();
    }
    public function showtestuser(Request $request){
        $var = $request->vals;
        $dec = Crypt::decrypt($var);
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $item) {
            $idf = $item;
        }
        $content = \App\Models\contentuser::get_by_id($idf)->toArray();
        return view('user.showtest',['text'=>$content]);
    }
    public function editcontentuser(Request $request){
        $var = $request->vals;
        $dec = Crypt::decrypt($var);
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $item) {
            $idf = $item;
        }
        $all_category = DB::table('category')->get()->toArray();
        $link = DB::table('links')->get()->toArray();
        $content = DB::table('contentuser')->where('id',$idf)->get()->toArray();
        return view('user.editcontent',['content'=>$content,'allcategory'=>$all_category,'alllinks'=>$link]);
    }
    public function saveeditcontentuser(Savecontent $request){
        $ids = $request->val;
        $hash = new \Hashids\Hashids();
        $cr = Crypt::decrypt($ids);
        $dehash = $hash->decode($cr);
        $find = \App\Models\contentuser::findOrFail($dehash)->toArray();
        foreach ($find as $cons){
            $pics = $cons['banner'] ?? null;
        }
        $res = $request->toArray();
        $link = $res['link'];
        $title = $res['title'];
        $keyword = $res['keyword'];
        $desc = $res['description'];
        $sponser = $res['sponser'];
        $sponserlink = $res['sponserlink'];
        $category = $res['category'];
        $pic = $res['picture'] ?? null;
        if ($pic !== null){
            if ($pics !== null){
                unlink($pics);
            }
            $pathz = public_path() . '/userfile/';
            $pic->move($pathz, time());
            $paths = $pathz . time();
        }else{
            $paths = $pics;
        }
        $content = $res['post_content_fa'];
        $time = Carbon::now()->toArray()['formatted'];
        \App\Models\contentuser::updateeditcontent($dehash,$title,$desc,$sponser,$sponserlink,$category,$paths,$content,$link,$keyword);
        return redirect(route('contentuser'));
    }
    public function contentuser(Request $request){
        $all_category = DB::table('category')->get()->toArray();
        $allcontentsend = DB::table('contentuser')->where('userid',Auth::id())->paginate(10);
        $allcontent = DB::table('content')->where('userid',Auth::id())->paginate(10);
        $alllink = DB::table('links')->get()->toArray();
        $data = '';
        if ($request->ajax()) {
            foreach ($allcontent as $contents) {
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
                $hash = new \Hashids\Hashids();
                $cr = $hash->encode($id);
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
                        <div class="card" id="cefas" style="border-radius: 25px;">
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
                        <a href="'.route('updatecontent',['val'=>$cr]).'">آپدیت</a>
</div>
</div>
                        </div>
                        </a>
                    </div>
                   ';
            }
            return $data;
        }
        $allcontentcount = DB::table('contentuser')->where('userid',Auth::id())->count();
        $allcontentvip = DB::table('contentuser')->where('userid',Auth::id())->where('vip','vip')->count();
        $allsetcontent = DB::table('content')->where('userid',Auth::id())->count();
        return view('writer.contentuser',['allcategory'=>$all_category,'allcontent'=>$allcontent,'allcontentcount'=>$allcontentcount,'allcontentvip'=>$allcontentvip,'allsetcontent'=>$allsetcontent,'allcontentuser'=>$allcontentsend,'alllinks'=>$alllink],compact($allcontent));
    }
    public function changestatustosends(Request $request){
        $ids = $request->vals;
        $hash = new \Hashids\Hashids();
        $cr = Crypt::decrypt($ids);
        $dehash = $hash->decode($cr);
        \App\Models\contentuser::changestatus($dehash,'1');
        return redirect()->back();
    }
    public function updatecontent(Request $request){
        $ids = $request->val;
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($ids);
        $get = content::give_by_id($dehash)->toArray();
        $all_category = DB::table('category')->get()->toArray();
        $alllinks = DB::table('links')->get()->toArray();
        return view('writer.updatethiscontent',['content'=>$get,'allcategory'=>$all_category,'alllinks'=>$alllinks]);
    }
    public function deletethiscontent(Request $request){
        $ids = $request->var;
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($ids);
        foreach ($dehash as $id) {
            $df = $id;
        }
        $givebyid = contentuser::findOrFail($df)->banner;
        unlink($givebyid);
        contentuser::deletecontentuser($dehash);
        return redirect()->back();
    }
    public function changesavedituser(Savecontent $request){
        $res = $request->toArray();
        $vals = $res['val'];
        $dehahs = new Hashids();
        $dec = Crypt::decrypt($vals);
        $dehashs = $dehahs->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 8799645;
        $givebyid = content::findOrFail($ss)->picture;
        $giveslugs = content::findOrFail($ss)->slug;
        if (!empty($givebyid)) {
            $pro = $givebyid;
        }
        $title = $res['title'];
        $desc = $res['description'];
        $slug = $res['slug'];
        $link = $res['link'];
        $keyword = $res['keyword'];
        if ($slug !== $giveslugs) {
            $slugs = SlugService::createSlug(content::class, 'slug', $slug);
        } else {
            $slugs = $giveslugs;
        }
        $sponsor = $res['sponser'];
        $pics = $res['picture'] ?? null;
        $sponserlink = $res['sponserlink'];
        $category = $res['category'];
        $content = $res['post_content_fa'];
        if ($pics !== null) {
            $pathz = public_path() . '/contentpicture/';
            $pics->move($pathz, time());
            $paths = $pathz . time();
        } else {
            $paths = $pro;
        }
        $timeupdate = Carbon::now()->toArray()['formatted'];
        content::edit_by_id($ss, $title, $desc, $slugs, $category, $sponsor, $sponserlink, $paths, $content, $timeupdate,$link,$keyword);
        return redirect(route('contentuser'));
    }
}
