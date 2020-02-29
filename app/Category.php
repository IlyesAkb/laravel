<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;
use DB;

class Category extends Model
{
    public static function getAll() {
        return DB::table('categories')->get();
    }

    public static function getOne($id) {
        return DB::table('categories')->find($id);
    }
}
