<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table='comment';
    public $timestamps=false;
    const all_comments=['id'=>'id','content'=>'content','status'=>'status','time'=>'time','userid'=>'userid','postid'=>'postid','post'=>'post'];
    public static function save_all_comments($content,$status,$userid,$postid,$post,$time){
        self::InsertOrIgnore([
            self::all_comments['content']=>$content,
            self::all_comments['status']=>$status,
            self::all_comments['userid']=>$userid,
            self::all_comments['postid']=>$postid,
            self::all_comments['post']=>$post,
            self::all_comments['time']=>$time,
        ]);
    }
    public static function okthiscomment($id,$status){
        return self::where(self::all_comments['id'],$id)->update([
            self::all_comments['status']=>$status,
        ]);
    }
    public static function delete_this_comment($id){
        return self::where(self::all_comments['id'],$id)->delete();
    }
    public static function deleteallcomment($userid){
        return self::where(self::all_comments['userid'],$userid)->delete();
    }
}
