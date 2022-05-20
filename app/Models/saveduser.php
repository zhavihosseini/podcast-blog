<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveduser extends Model
{
    use HasFactory;
    protected $table='saveduser';
    public $timestamps = false;
    const DB_saved_user=['id'=>'id','userid'=>'userid','contentid'=>'contentid','datatype'=>'datatype','time'=>'time'];
    public static function savedusercontent($userid,$contentid,$datatype,$time){
        self::InsertOrIgnore([
            self::DB_saved_user['userid']=>$userid,
            self::DB_saved_user['contentid']=>$contentid,
            self::DB_saved_user['datatype']=>$datatype,
            self::DB_saved_user['time']=>$time,
        ]);
    }
    public static function deletefromdb($id,$userid){
        return self::where(self::DB_saved_user['contentid'],$id)->where(self::DB_saved_user['userid'],$userid)->delete();
    }
    public static function saveduser($id){
        return self::where(self::DB_saved_user['userid'],$id)->orderBy('id','desc')->get();
    }
}
