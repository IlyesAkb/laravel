<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
