<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class tabs extends Model
{
    use HasFactory;
    protected $table='tabs';
    public $timestamps=false;
    const DB_TAb=['id'=>'id','name'=>'name','verticaltab'=>'verticaltab','verticlalink'=>'verticlalink','time'=>'time','status'=>'status','price'=>'price'];
    public static function save_tab($name,$verticaltab,$verticlalink,$time,$status,$price){
        self::insertOrIgnore([
            self::DB_TAb['name']=>$name,
            self::DB_TAb['verticaltab']=>$verticaltab,
            self::DB_TAb['verticlalink']=>$verticlalink,
            self::DB_TAb['status']=>$status,
            self::DB_TAb['price']=>$price,
            self::DB_TAb['time']=>$time,
        ]);
    }
    public static function changestart($id,$status){
        return self::where(self::DB_TAb['id'],$id)->update([
            self::DB_TAb['status']=>$status,
        ]);
    }
    public static function deletetab($id){
        return self::where(self::DB_TAb['id'],$id)->delete();
    }
    public static function changeexptime($id,$time,$status){
        return self::where(self::DB_TAb['id'],$id)->update([

            self::DB_TAb['status']=>$status,
        ]);
    }
    public static function get_by_id($id){
        return self::where(self::DB_TAb['id'],$id)->get();
    }
    public static function updatenow($id,$name,$verticaltab,$verticlalink,$price){
        return self::where(self::DB_TAb['id'],$id)->update([
            self::DB_TAb['name']=>$name,
            self::DB_TAb['verticaltab']=>$verticaltab,
            self::DB_TAb['verticlalink']=>$verticlalink,
            self::DB_TAb['price']=>$price,
        ]);
    }
}
