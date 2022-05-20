<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    protected $table='like';
    public $timestamps=false;
    const Db_like = ['id'=>'id','userid'=>'userid','categroy'=>'category','time'=>'time','postid'=>'postid'];
    public static function saveitlike($category,$postid,$time,$userid){
        self::InsertOrIgnore([
            self::Db_like['userid']=>$userid,
            self::Db_like['categroy']=>$category,
            self::Db_like['time']=>$time,
            self::Db_like['postid']=>$postid,
        ]);
    }
    public static function getcounts($id,$category){
        return self::where(self::Db_like['postid'],$id)->where(self::Db_like['categroy'],$category)->count();
    }
    public static function check($userid,$category,$postid){
        return self::where(self::Db_like['userid'],$userid)->where(self::Db_like['categroy'],$category)->where(self::Db_like['postid'],$postid)->get();
    }
    public static function checkdelete($userid,$category,$postid){
        return self::where(self::Db_like['userid'],$userid)->where(self::Db_like['categroy'],$category)->where(self::Db_like['postid'],$postid)->delete();
    }
}
