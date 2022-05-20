<?php

namespace App\Http\Controllers;

use App\Http\Requests\Savecontent;
use App\Http\Requests\UploadImageRequest;
use App\Models\biggestman;
use App\Models\category;
use App\Models\comment;
use App\Models\content;
use App\Models\contentuser;
use App\Models\links;
use App\Models\tabs;
use App\Models\User;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Hosseinhkj\Slug;
use Illuminate\Support\Str;
use Leshkens\LaravelReadTime\ReadTime;
use Morilog\Jalali\Jalalian;

class AdminController extends Controller
{
    public function Adminhome()
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $allusers = User::all()->sortDesc()->toArray();
            $alluserscount = User::all()->count();
            $allbannedusercount = DB::table('users')->where('status',1)->count();
            $allwrt = DB::table('users')->where('role','WRT')->count();
            return view('admin.dashboard',['alluserscount'=>$alluserscount,'alluser'=>$allusers,'allbannedusercount'=>$allbannedusercount,'allwriter'=>$allwrt]);
        } else {
            abort(404);
        }
    }
    public function category(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $categorys = DB::table('category')->get()->toArray();
            $category_count = DB::table('category')->count();
            return view('admin.category', ['categorys' => $categorys, 'category_count' => $category_count]);
        } else {
            abort(404);
        }
    }

    public function savecategory(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $res = $request->toArray();
            $name = $res['name'];
            $slug = SlugService::createSlug(category::class, 'slug', $name);
            category::save_category($name, $slug);
            return redirect()->back()->with('save', 'Success Saved !');
        } else {
            abort(404);
        }
    }

    public function editcategory(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $res = $request->toArray();
            $vals = $res['vals'];
            $dehahs = new Hashids();
            $dec = Crypt::decrypt($vals);
            $dehashs = $dehahs->decode($dec);
            foreach ($dehashs as $items) {
                $adad = $items;
            }
            $ss = $adad - 65498498;
            $give = DB::table('category')->where('id', $ss)->get()->toArray();
            return view('admin.editcategory', ['give' => $give]);
        } else {
            abort(404);
        }
    }

    public function saveeditcategory(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $res = $request->toArray();
            $name = $res['name'];
            $slug = $res['slug'];
            $vals = $res['vals'];
            $dehash = new Hashids();
            $cr = Crypt::decrypt($vals);
            $hash = $dehash->decode($cr);
            foreach ($hash as $item) {
                $idf = $item - 548864;
            }
            category::saveeditby_id($idf, $name, $slug);
            return redirect(route('category'))->with('save', 'Success Saved !');
        } else {
            abort(404);
        }
    }

    public function deletecategory(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $res = $request->toArray();
            $vals = $res['vals'];
            $dehahs = new Hashids();
            $dec = Crypt::decrypt($vals);
            $dehashs = $dehahs->decode($dec);
            foreach ($dehashs as $items) {
                $adad = $items;
            }
            $ss = $adad - 65498498;
            category::deleteby_id($ss);
            return redirect()->back()->with('delete', 'Successfuy Deleted !!');
        } else {
            abort(404);
        }
    }

    public function savecontent()
    {
        $all_category = DB::table('category')->get()->toArray();
        $content_count = DB::table('content')->count();
        $alllink = DB::table('links')->get()->toArray();
        $all_content = DB::table('content')->orderBy('id', 'desc')->get()->toArray();
        $allvip = DB::table('content')->where('vip', 'vip')->count();
        return view('admin.savecontent', ['allcategory' => $all_category, 'contentcount' => $content_count, 'all_content' => $all_content, 'vip' => $allvip,'alllinks'=>$alllink]);
    }

    public function savecontents(Request $request)
    {
        $res = $request->toArray();
        $title = $res['title'];
        $desc = $res['description'];
        $slug = SlugService::createSlug(content::class, 'slug', $res['slug']);
        $sponser = $res['sponser'];
        $sponserlink = $res['sponserlink'];
        $category = $res['category'];
        $keyword = $res['keyword'];
        $content = $res['post_content_fa'];
        $link = $res['link'];
        $picture = $res['picture'] ?? null;
        if ($picture !== null) {
            $pathz = public_path() . '/contentpicture/';
            $picture->move($pathz, time());
            $paths = $pathz . time();
        }
        $vip = $res['vip'] ?? null;
        $date = Carbon::now()->toArray()['formatted'];
        $userid = Auth::id();
        content::save_content($title, $desc, $category, $slug, $paths, $content, $vip, $date, $userid, '', $sponser, $sponserlink,$link,$keyword);
        return redirect()->back()->with('save', 'saved !');
    }

    public function editcontent(Request $request)
    {
        $res = $request->toArray();
        $vals = $res['vals'];
        $dehahs = new Hashids();
        $dec = Crypt::decrypt($vals);
        $dehashs = $dehahs->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 514684;
        $getit = content::give_by_id($ss);
        $alllink = DB::table('links')->get()->toArray();
        $all_category = DB::table('category')->get()->toArray();
        return view('admin.editcontent', ['all' => $getit, 'allcategory' => $all_category,'alllink'=>$alllink]);
    }

    public function saveeditcontent(Request $request)
    {
        $res = $request->toArray();
        $vals = $res['vals'];
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
        $keyword = $res['keyword'];
        $link = $res['link'];
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
        return redirect(route('savecontent'))->with('save', 'successfully Edited !');
    }

    public function setvip(Request $request)
    {
        $res = $request->toArray();
        $vals = $res['vals'];
        $dehahs = new Hashids();
        $dec = Crypt::decrypt($vals);
        $dehashs = $dehahs->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 514684;
        $var = $res['var'];
        if ($var == 1) {
            $vr = 'vip';
        }
        if ($var == 0) {
            $vr = null;
        }
        content::changevip($ss, $vr);
        return redirect()->back()->with('save', 'changed Vip !');
    }

    public function testshow(Request $request)
    {
        $vals = $request->vals;
        $dehahs = new Hashids();
        $dehashs = $dehahs->decode($vals);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 514684;
        $get = content::give_by_id($ss)->toArray();
        return view('admin.showtestcontent', ['get' => $get]);
    }

    public function Deletecontent(Request $request)
    {
        $res = $request->toArray();
        $vals = $res['vals'];
        $dehahs = new Hashids();
        $dec = Crypt::decrypt($vals);
        $dehashs = $dehahs->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 514684;
        $give = content::find($ss)->picture;
        unlink($give);
        content::Deletecontent($ss);
        return redirect()->back()->with('delete', 'Successfully Deleted !');
    }

    public function Tabs()
    {
        $alltabs = DB::table('tabs')->orderBy('id', 'desc')->get()->toArray();
        $tabscount = DB::table('tabs')->count();
        $allstarted = DB::table('tabs')->where('status', '2')->count();
        $allstoped = DB::table('tabs')->where('status', '3')->count();
        return view('admin.tabs', ['alltab' => $alltabs, 'tabcount' => $tabscount, 'allstarted' => $allstarted, 'allstoped' => $allstoped]);
    }

    public function savetabs(Request $request)
    {
        $res = $request->toArray();
        $name = $res['name'];
        $verlink = $res['verticlalink'];
        $price = $res['price'];
        $verticaltab = $res['verticlatab'] ?? null;
        $adad = random_int(5455, 80454);
        if ($verticaltab !== null) {
            $pathz = public_path() . '/tabs/';
            $verticaltab->move($pathz, time() * $adad);
            $verpaths = $pathz . time() * $adad;
        }
        $createtime = Carbon::now()->toArray()['formatted'];
       tabs::save_tab($name,$verpaths,$verlink,$createtime,'1',$price);
        return redirect()->back()->with('save', 'Succesfully Saved !');
    }

    public function starttabs(Request $request)
    {
        $res = $request->toArray();
        $var = $res['var'];
        $hash = new Hashids();
        $dec = Crypt::decrypt($var);
        $dehashs = $hash->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 684894;
        $status = $res['val'];
        tabs::changestart($ss, $status);
        return redirect()->back()->with('save', 'Succesfully changed !');
    }

    public function deletetab(Request $request)
    {
        $res = $request->toArray();
        $var = $res['var'];
        $hash = new Hashids();
        $dec = Crypt::decrypt($var);
        $dehashs = $hash->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 684894;
        $give = tabs::find($ss)->verticaltab;
        unlink($give);
        tabs::deletetab($ss);
        return redirect()->back()->with('delete', 'Deleted !');
    }

    public function edittabs(Request $request)
    {
        $res = $request->toArray();
        $var = $res['var'];
        $hash = new Hashids();
        $dec = Crypt::decrypt($var);
        $dehashs = $hash->decode($dec);
        foreach ($dehashs as $items) {
            $adad = $items;
        }
        $ss = $adad - 684894;
        $gettab = tabs::get_by_id($ss)->toArray();
        return view('admin.edittabs', ['alltab' => $gettab]);
    }

    public function saveedittab(UploadImageRequest $request)
    {
        $res = $request->toArray();
        $cal = $request->cal;
        $dec = Crypt::decrypt($cal);
        $hash = new Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $item) {
            $ids = $item - 254987;
        }
        $giveitverticla = tabs::find($ids)->verticaltab;
        $time = tabs::find($ids)->time;
        if (!empty($giveitverticla)) {
            $verticlas = $giveitverticla;
        }
        $name = $res['name'];
        $verlink = $res['verticlalink'];
        $price = $res['price'];
        $verticaltab = $res['verticlatab'] ?? null;
        $adad = random_int(5455, 80454);
        if ($verticaltab !== null) {
            $pathz = public_path() . '/tabs/';
            $verticaltab->move($pathz, time() * $adad);
            $verpaths = $pathz . time() * $adad;
            if (!empty($verticlas)) {
                unlink($verticlas);
            }
        } else {
            $verpaths = $verticlas;
        }
        tabs::updatenow($ids,$name,$verpaths,$verlink,$price,$time);
        return redirect(route('Tabs'))->with('save', 'Successfully Edited !');
    }

    public function usersend()
    {
        $allcontent = DB::table('contentuser')->where('status', '1')->get()->toArray();
        $allcontentcount = DB::table('contentuser')->where('status', '1')->count();
        return view('admin.allcontent', ['allcontent' => $allcontent, 'allcontentcount' => $allcontentcount]);
    }

    public function submituserpost(Request $request)
    {
        $val = $request->val;
        $var = $request->var;
        $dalil = $request->dalil ?? null;
        $hash = new Hashids();
        $cr = Crypt::decrypt($var);
        $dec = $hash->decode($cr);
        if ($val == 1) {
            $st = 2;
            $gets = contentuser::find($dec)->toArray();
            foreach ($gets as $get) {
                $id = $get['id'];
                $title = $get['title'];
                $desc = $get['description'];
                $banner = $get['banner'];
                $sponser = $get['sponser'] ?? null;
                $sponserlink = $get['sponserlink'] ?? null;
                $vip = $get['vip'] ?? null;
                $time = $get['time'];
                $category = $get['category'];
                $content = $get['content'];
                $userid = $get['userid'];
                $link = $get['link'];
                $slug = SlugService::createSlug(content::class, 'slug', $title);
            }
            content::save_content($title,$desc,$category,$slug,$banner,$content,$vip,$time,$userid,'',$sponser,$sponserlink,$link);
           contentuser::deletecontentuser($id);
            return redirect()->back();
        }
        if ($val == 0) {
            $st = 3;
            \App\Models\contentuser::save_dalil($dec, $dalil);
        }
        \App\Models\contentuser::changestatus($dec, $st);
        return redirect()->back();
    }

    public function deletecontentwriter(Request $request)
    {
        $val = $request->vals;
        $hash = new Hashids();
        $cr = Crypt::decrypt($val);
        $dec = $hash->decode($cr);
        $get = content::find($dec)->toArray();
        foreach ($get as $item) {
            $pic = $item['picture'];
        }
        unlink($pic);
        \App\Models\contentuser::deletecontentuser($dec);
        return redirect()->back();
    }

    public function changevipcontentsadmin(Request $request)
    {
        $ids = $request->vals;
        $status = $request->var;
        if ($status == 0) {
            $bb = null;
        }
        if ($status == 1) {
            $bb = 'vip';
        }
        $hash = new \Hashids\Hashids();
        $dec = $hash->decode($ids);
        foreach ($dec as $item) {
            $cv = $item;
        }
        \App\Models\contentuser::changevip($cv, $bb);
        return redirect()->back();
    }

    public function showtestuseradmin(Request $request)
    {
        $var = $request->vars;
        $dec = Crypt::decrypt($var);
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $item) {
            $idf = $item;
        }
        $content = \App\Models\contentuser::get_by_id($idf)->toArray();
        return view('user.showtest', ['text' => $content]);
    }

    public function editcontentuseradmin(Request $request)
    {
        $var = $request->vals;
        $dec = Crypt::decrypt($var);
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $item) {
            $idf = $item;
        }
        $all_category = DB::table('category')->get()->toArray();
        $alllink = DB::table('links')->get()->toArray();
        $content = DB::table('contentuser')->where('id', $idf)->get()->toArray();
        return view('user.editcontent', ['content' => $content, 'allcategory' => $all_category,'alllinks'=>$alllink]);
    }

    public function saveeditcontentuseradmin(Savecontent $request)
    {
        $ids = $request->val;
        $hash = new \Hashids\Hashids();
        $cr = Crypt::decrypt($ids);
        $dehash = $hash->decode($cr);
        $find = \App\Models\contentuser::findOrFail($dehash)->toArray();
        foreach ($find as $cons) {
            $pics = $cons['banner'] ?? null;
        }
        $res = $request->toArray();
        $title = $res['title'];
        $desc = $res['description'];
        $link = $res['link'];
        $sponser = $res['sponser'];
        $sponserlink = $res['sponserlink'];
        $category = $res['category'];
        $pic = $res['picture'] ?? null;
        if ($pic !== null) {
            if ($pics !== null) {
                unlink($pics);
            }
            $pathz = public_path() . '/userfile/';
            $pic->move($pathz, time());
            $paths = $pathz . time();
        } else {
            $paths = $pics;
        }
        $content = $res['post_content_fa'];
        $time = Carbon::now()->toArray()['formatted'];
        \App\Models\contentuser::updateeditcontent($dehash, $title, $desc, $sponser, $sponserlink, $category, $paths, $content,$link);
        return redirect(route('usersend'));
    }

    public function showuserinfo(Request $request)
    {
        $ids = $request->var;
        $hash = new \Hashids\Hashids();
        $dehash = $hash->decode($ids);
        $user = User::find($dehash)->toArray();
        foreach ($user as $items) {
            $userid = $items['id'];
            $role = $items['role'];
        }
            $allsend = DB::table('contentuser')->orderBy('id', 'desc')->get()->toArray();
            $allcontentsz = DB::table('content')->where('userid',$userid)->orderBy('id', 'desc')->paginate(9);

        return view('admin.showuser', ['user' => $user,'allsend'=>$allsend,'allcontentsz'=>$allcontentsz]);
    }
    public function links(Request $request)
    {
        if (Auth::user()->id == 1 and Auth::user()->role == 'ADM') {
            $links = DB::table('links')->get()->toArray();
            $linkscount = DB::table('links')->count();
            return view('admin.links', ['links' => $links, 'linkscount' => $linkscount]);
        } else {
            abort(404);
        }
    }
    public function savelinks(Request $request){
        $res = $request->toArray();
        $links = $res['links'];
        $name = $res['name'];
        $status = $res['status'];
        $for = $res['for'];
        $list = $res['list'] ?? null;
        $description = $res['post_content_fa'];
        $time = Carbon::now()->toArray()['formatted'];
        $slug = SlugService::createSlug(links::class, 'slug', $name);
        links::save_links($links,$status,$time,$name,$slug,$description,$for,$list);
        return redirect()->back()->with('save','با موفقیت ذخیره شد');
    }
    public function editlink(Request $request){
        $val = $request->vals;
        $dec = Crypt::decrypt($val);
        $hash = new Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $items) {
            $ids = $items - 65498498;
       }
        $get = DB::table('links')->where('id',$ids)->get()->toArray();
        return view('admin.editlink',['get'=>$get]);
    }
    public function saveeditlinks(Request $request){
        $res = $request->toArray();
        $val = $request->vals;
        $dec = Crypt::decrypt($val);
        $hash = new Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $items) {
            $ids = $items - 548864;
        }
        $links = $res['links'];
        $name = $res['name'];
        $for = $res['for'] ?? null;
        $status = $res['status'];
        $lists = $res['list'] ?? null;
        $description = $res['post_content_fa'];
        $slug = Str::slug($name);
        links::saveedit($ids,$links,$status,$name,$slug,$description,$for,$lists);
        return redirect(route('links'))->with('save','با موفقیت ویرایش شد');
    }
    public function deletelinks(Request $request){
        $res = $request->toArray();
        $val = $request->vals;
        $dec = Crypt::decrypt($val);
        $hash = new Hashids();
        $dehash = $hash->decode($dec);
        foreach ($dehash as $items) {
            $ids = $items - 65498498;
        }
        links::deletelinks($ids);
        return redirect()->back()->with('delete','با موفقیت حذف شد');
    }
    public function edituser(Request $request){
        $val = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        $user = User::find($dehash)->toArray();
        return view('admin.edituser',['user'=>$user]);
    }
    public function saveeditusers(Request $request){
        $res = $request->toArray();
        $name = $res['name'];
        $username = $res['username'];
        $email = $res['email'];
        $desc = $res['description'];
        $semat = $res['semat'];
        $instagram = $res['instagram'];
        $val = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $items) {
            $ids = $items;
        }
        $user = User::findOrFail($ids);
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->description = $desc;
        $user->semat = $semat;
        $user->instagram = $instagram;
        $user->save();
        return redirect()->back();
    }
    public function banneduser(Request $request){
        $var = $request->envas;
        $hash = new Hashids();
        $dehash = $hash->decode($var);
        foreach ($dehash as $items) {
            $ids = $items - 5456843;
        }
        $res = $request->toArray();
        $status = $res['value'];
        $user = User::findOrFail($ids);
        $user->status = $status;
        $user->save();
        return redirect()->back();
    }
    public function deleteuser(Request $request){
        $var = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($var);
        foreach ($dehash as $items) {
            $ids = $items;
        }
        $user = User::find($ids);
        $user->delete();
        return redirect(route('Adminhome'));
    }
    public function searchinuser(Request $request){
        $res = $request->toArray();
        $select = $res['select'];
        $search = $res['search'];
            $get = DB::table('users')->where($select, 'LIKE', "%{$search}%")->orderBy('id', 'desc')->paginate(30)->appends(['select'=>$select,'search'=>$search]);
        $getresultcount = DB::table('users')->where($select,'LIKE', "%{$search}%")->count();
        return view('admin.searchinuser',['get'=>$get,'getresultcount'=>$getresultcount]);
    }
    public function showallWriter(Request $request){
        $getwrt = DB::table('users')->where('role', 'WRT')->orderBy('id', 'desc')->paginate(30);
        $getresultcountwrt = DB::table('users')->where('role','WRT')->count();
        return view('admin.showallwriter',['getwrt'=>$getwrt,'getresultcountwrt'=>$getresultcountwrt]);
    }
    public function allcommentfromusers(Request $request){
        $allnowcomment = DB::table('comment')->where('status',1)->orderBy('id','desc')->get()->toArray();
        $allnowcommentcount = DB::table('comment')->where('status',1)->count();
        $allcomment = DB::table('comment')->where('status',2)->count();
        return view('admin.comment',['allcomment'=>$allnowcomment,'allnowcommentcount'=>$allnowcommentcount,'allcommentcount'=>$allcomment]);
    }
    public function showthiscomment(Request $request){
        $val = $request->vals;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $dehash) {
            $ids = $dehash - 846321;
        }
        $getcomment = DB::table('comment')->where('id',$ids)->get()->toArray();
        $notacceptcount = DB::table('comment')->where('id',$ids)->count();
        if ($getcomment !== []) {
            foreach ($getcomment as $cmnt) {
                $userid = $cmnt->userid;
                $getfromuser = DB::table('comment')->where('userid', $userid)->where('status',2)->orderBy('id', 'desc')->get()->toArray();
                $getfromusernotaccept = DB::table('comment')->where('userid', $userid)->where('status', 1)->get()->toArray();
                $getfromusercount = DB::table('comment')->where('userid', $userid)->where('status', 2)->count();
                $alluser [] = $getfromuser;
                $allnotaccept [] = $getfromusernotaccept;
            }
            return view('admin.showcomment',['commnet'=>$getcomment,'alluser'=>$alluser,'getfromusercount'=>$getfromusercount,'notacceptcount'=>$notacceptcount,'allnoaccpt'=>$allnotaccept,'userid'=>$userid]);
        }else{
    abort(404);
        }
    }
    public function okthiscommnet(Request $request){
        $val = $request->val;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $dehash) {
            $ids = $dehash - 8846321;
        }
        $var = $request->var;
        comment::okthiscomment($ids,$var);
        return redirect()->back();
    }
    public function deletethiscomment(Request $request){
        $val = $request->val;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $dehash) {
            $ids = $dehash - 8846321;
        }
        comment::delete_this_comment($ids);
        return redirect()->back();
    }
    public function closecomment(Request $request){
        $val = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $dehash) {
            $ids = $dehash;
        }
        $val = $request->val;
        $user = User::findOrFail($ids);
        $user->comment = $val;
        $user->save();
        return redirect()->back();
    }
    public function deleteallcomment(Request $request){
        $val = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $dehash) {
            $ids = $dehash;
            comment::deleteallcomment($ids);
        }
        return redirect(route('allcommentfromusers'));
    }
    public function showallnowcomment(Request $request){
        $allcomment = DB::table('comment')->where('status',2)->orderBy('id','desc')->paginate(200);
        $allcommentcount = DB::table('comment')->where('status',2)->count();
        return view('admin.showallnowcomment',['allcomment'=>$allcomment,'allcommentcount'=>$allcommentcount]);
    }
    public function biggestman(Request $request){
        $allbiggestmancount = DB::table('biggestman')->count();
        $allbiggest = DB::table('biggestman')->get()->toArray();
        return view('admin.biggestman',['biggestmancount'=>$allbiggestmancount,'all'=>$allbiggest]);
    }
    public function savebiggestman(Request $request){
        $res = $request->toArray();
        $content = $res['content'];
        $name = $res['name'];
        $pic = $res['file'];
        $desc = $res['desc'] ?? null;
        $time = Carbon::now()->toArray()['formatted'];
        if ($pic !== null) {
            $pathz = public_path() . '/biggestman/';
            $pic->move($pathz, time());
            $paths = $pathz . time();
        }
        biggestman::save_biggestman($content,$name,$paths,$desc,$time);
        return redirect()->back();
    }
    public function deletebiggman(Request $request){
        $val = $request->var;
        $hash = new Hashids();
        $dehash = $hash->decode($val);
        foreach ($dehash as $item) {
            $ids = $item;
        }
        $give = biggestman::find($ids)->picture;
        unlink($give);
        biggestman::deletebyid($dehash);
        return redirect()->back();
    }
}
