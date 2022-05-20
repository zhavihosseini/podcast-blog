<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biggestman extends Model
{
    use HasFactory;
    protected $table='biggestman';
    public $timestamps=false;
    const Db_table_biggestman=['id'=>'id','content'=>'content','name'=>'name','time'=>'time','picture'=>'picture','desc'=>'desc'];
    public static function save_biggestman($content,$name,$picture,$desc,$time){
        self::InsertOrIgnore([
            self::Db_table_biggestman['content']=>$content,
            self::Db_table_biggestman['name']=>$name,
            self::Db_table_biggestman['picture']=>$picture,
            self::Db_table_biggestman['desc']=>$desc,
            self::Db_table_biggestman['time']=>$time,
        ]);
    }
    public static function deletebyid($id){
        return self::where(self::Db_table_biggestman['id'],$id)->delete();
    }
}
