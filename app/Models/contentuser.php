<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class contentuser extends Model
{
    use HasFactory;
    protected $table='contentuser';
    public $timestamps=false;
    const DB_contentuser=['id'=>'id','title'=>'title','description'=>'description','banner'=>'banner','sponser'=>'sponser','sponserlink'=>'sponserlink','vip'=>'vip','time'=>'time','update'=>'update','status'=>'status','category'=>'category','userid'=>'userid','content'=>'content','dalil'=>'dalil','link'=>'link','keyword'=>'keyword'];
    public static function save_contentuser($title,$description,$banner,$sponser,$sponserlink,$vip,$time,$update,$status,$category,$userid,$content,$dalil,$link,$keyword){
        self::InsertOrIgnore([
            self::DB_contentuser['title']=>$title,
            self::DB_contentuser['description']=>$description,
            self::DB_contentuser['banner']=>$banner,
            self::DB_contentuser['sponser']=>$sponser,
            self::DB_contentuser['sponserlink']=>$sponserlink,
            self::DB_contentuser['vip']=>$vip,
            self::DB_contentuser['time']=>$time,
            self::DB_contentuser['update']=>$update,
            self::DB_contentuser['status']=>$status,
            self::DB_contentuser['category']=>$category,
            self::DB_contentuser['userid']=>$userid,
            self::DB_contentuser['content']=>$content,
            self::DB_contentuser['dalil']=>$dalil,
            self::DB_contentuser['link']=>$link,
            self::DB_contentuser['keyword']=>$keyword,
        ]);
    }
    public static function changevip($id,$status){
        return self::where(self::DB_contentuser['id'],$id)->update([
            self::DB_contentuser['vip']=>$status,
        ]);
    }
    public static function get_by_id($id){
        return self::where(self::DB_contentuser['id'],$id)->get();
    }
    public static function updateeditcontent($id,$title,$description,$sponser,$sponserlink,$category,$banner,$content,$link,$keyword){
        return self::where(self::DB_contentuser['id'],$id)->update([
            self::DB_contentuser['title']=>$title,
            self::DB_contentuser['description']=>$description,
            self::DB_contentuser['sponser']=>$sponser,
            self::DB_contentuser['sponserlink']=>$sponserlink,
            self::DB_contentuser['category']=>$category,
            self::DB_contentuser['banner']=>$banner,
            self::DB_contentuser['content']=>$content,
            self::DB_contentuser['link']=>$link,
            self::DB_contentuser['keyword']=>$keyword,
        ]);
    }
    public static function changestatus($id,$status){
        return self::where(self::DB_contentuser['id'],$id)->update([
            self::DB_contentuser['status']=>$status,
        ]);
    }
    public static function deletecontentuser($id){
        return self::where(self::DB_contentuser['id'],$id)->delete();
    }
    public static function save_dalil($id,$content){
        return self::where(self::DB_contentuser['id'],$id)->update([
            self::DB_contentuser['dalil']=>$content,
        ]);
    }
}
