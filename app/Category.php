<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Category extends Model
{
    public static $all = [
        [
            'id' => 1,
            'name' => 'Хорошие новорсти'
        ],
        [
            'id' => 2,
            'name' => 'Плохие новости'
        ],
        [
            'id' => 3,
            'name' => 'Спорт'
        ],
        [
            'id' => 4,
            'name' => 'Политика'
        ],
        [
            'id' => 5,
            'name' => 'Мдецина(коронавирус)
            ']
    ];

    public static function getAll() {
        $file = Storage::disk('public')->get('DB/categories.json');
        return json_decode($file, true);
    }
}
