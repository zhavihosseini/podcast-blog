<?php

namespace App\Http\Controllers;

use App\Http\Requests\Savecontent;
use App\Models\content;
use App\Models\like;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Vinkla\Hashids\Facades\Hashids;

/*class contentuser extends Controller
{
    public function savecontentuser(Savecontent $request){
        $res = $request->toArray();
        $title = $res['title'];
        $description = $res['description'];
        $sponser = $res['sponser'] ?? null;
        $sponserlink = $res['sponserlink'] ?? null;
        $category = $res['category'];
        $vip = $res['vip'] ?? null;
        $post = $res['post_content_fa'];
        $file = $res['picture'] ?? null;
        if($file !== null){
            $pathz = public_path() . '/userfile/';
            $file->move($pathz, time());
            $paths = $pathz . time();
        }
        $time = Carbon::now()->toArray()['formatted'];
        $userid = Auth::id();
        \App\Models\contentuser::save_contentuser($title,$description,$paths,$sponser,$sponserlink,$vip,$time,'',1,$category,$userid,$post);
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
        $content = DB::table('contentuser')->where('id',$idf)->get()->toArray();
        return view('user.editcontent',['content'=>$content,'allcategory'=>$all_category]);
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
        $title = $res['title'];
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
        \App\Models\contentuser::updateeditcontent($dehash,$title,$desc,$sponser,$sponserlink,$category,$paths,$content);
        return redirect(route('contentuser'));
    }
}*/
