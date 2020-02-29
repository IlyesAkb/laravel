<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;
use Illuminate\Http\Resources\Json;
use DB;
class News extends Model
{


    public static function getAll() {
        return DB::table('news')->get();
    }

    public static function getLimit($limit) {
        return DB::table('news')
            ->orderBy('created_at', 'DESC')
            ->limit($limit)
            ->get();
    }

    public static function getOne($id) {
        return DB::table('news')->find($id) ;
    }

    public static function getByCategory($category) {
        return DB::table('news')->get()->where('category_id', $category);
    }

    public static function insert($data) {

        DB::table('news')->insert($data);
        return true;
    }
}
