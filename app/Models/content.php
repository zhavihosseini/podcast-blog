<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use phpDocumentor\Reflection\Types\Self_;

class content extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table='content';
    public $timestamps=false;
    const DB_Content=['id'=>'id','title'=>'title','description'=>'description','category'=>'category','slug'=>'slug','picture'=>'picture','content'=>'content','vip'=>'vip','time'=>'time','userid'=>'userid','time_update'=>'time_update','sponser'=>'sponser','sponserlink'=>'sponserlink','link'=>'link','keyword'=>'keyword'];
    public static function save_content($title,$descripion,$category,$slug,$picture,$content,$vip,$time,$userid,$time_update,$sponser,$sponserlink,$link,$keyword){
        self::InsertorIgnore([
            self::DB_Content['title']=>$title,
            self::DB_Content['description']=>$descripion,
            self::DB_Content['category']=>$category,
            self::DB_Content['slug']=>$slug,
            self::DB_Content['picture']=>$picture,
            self::DB_Content['content']=>$content,
            self::DB_Content['vip']=>$vip,
            self::DB_Content['time']=>$time,
            self::DB_Content['userid']=>$userid,
            self::DB_Content['time_update']=>$time_update,
            self::DB_Content['sponser']=>$sponser,
            self::DB_Content['sponserlink']=>$sponserlink,
            self::DB_Content['link']=>$link,
            self::DB_Content['keyword']=>$keyword,
        ]);
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug'
            ]
        ];
    }
    public static function give_by_id($id){
        return self::where(self::DB_Content['id'],$id)->get();
    }
    public static function edit_by_id($id,$title,$description,$slug,$category,$sponser,$sponserlink,$pic,$content,$timeupdate,$links,$keyword){
        return self::where(self::DB_Content['id'],$id)->update([
            self::DB_Content['title']=>$title,
            self::DB_Content['description']=>$description,
            self::DB_Content['slug']=>$slug,
            self::DB_Content['category']=>$category,
            self::DB_Content['sponser']=>$sponser,
            self::DB_Content['sponserlink']=>$sponserlink,
            self::DB_Content['picture']=>$pic,
            self::DB_Content['content']=>$content,
            self::DB_Content['time_update']=>$timeupdate,
            self::DB_Content['link']=>$links,
            self::DB_Content['keyword']=>$keyword,
        ]);
    }
    public static function changevip($id,$vip){
        return self::where(self::DB_Content['id'],$id)->update([
            self::DB_Content['vip']=>$vip,
        ]);
    }
    public static function Deletecontent($id){
        return self::where(self::DB_Content['id'],$id)->delete();
    }
    public static function getAlls(){
        return self::all()->sortDesc();
    }
    public static function searchit($id,$title){
        return self::where(self::DB_Content['id'],$id)->where(self::DB_Content['slug'],$title)->get();
    }
}
