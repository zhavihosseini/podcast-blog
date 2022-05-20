<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table='category';
    public $timestamps=false;
    Const DB_Category=['id'=>'id','name'=>'name','slug'=>'slug'];
    public static function save_category($name,$slug){
        self::InsertorIgnore([
            self::DB_Category['name']=>$name,
            self::DB_Category['slug']=>$slug,
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
    public static function saveeditby_id($id,$name,$slug){
        return self::where(self::DB_Category['id'],$id)->update([
            self::DB_Category['name']=>$name,
            self::DB_Category['slug']=>$slug,
        ]);
    }
    public static function deleteby_id($id){
        return self::where(self::DB_Category['id'],$id)->delete();
    }
}
