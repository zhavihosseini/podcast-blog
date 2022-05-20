<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hosseinhkj\Slug\Facades\Slug;
class links extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table='links';
    public $timestamps=false;
    const DB_Links=['id'=>'id','link'=>'link','status'=>'status','time'=>'time','name'=>'name','slug'=>'slug','description'=>'description','for'=>'for','list'=>'list'];
    public static function save_links($link,$status,$time,$name,$slug,$description,$for,$list){
        return self::InsertOrIgnore([
            self::DB_Links['link']=>$link,
            self::DB_Links['status']=>$status,
            self::DB_Links['time']=>$time,
            self::DB_Links['name']=>$name,
            self::DB_Links['slug']=>$slug,
            self::DB_Links['description']=>$description,
            self::DB_Links['for']=>$for,
            self::DB_Links['list']=>$list,
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
    public static function saveedit($id,$link,$status,$name,$slug,$description,$for,$list){
        return self::where(self::DB_Links['id'],$id)->update([
            self::DB_Links['link']=>$link,
            self::DB_Links['status']=>$status,
            self::DB_Links['name']=>$name,
            self::DB_Links['slug']=>$slug,
            self::DB_Links['description']=>$description,
            self::DB_Links['for']=>$for,
            self::DB_Links['list']=>$list,
        ]);
    }
    public static function deletelinks($id){
        return self::where(self::DB_Links['id'],$id)->delete();
    }
    public static function get_by_slug($slug){
        return self::where(self::DB_Links['slug'],$slug)->get();
    }
}
