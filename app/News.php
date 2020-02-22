<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static $all = [
        [
            'id' => 1,
            'heading' => 'Срочная новось 1',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'id' => 2,
            'heading' => 'Срочная новось 2',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'id' => 3,
            'heading' => 'Срочная новось 3',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'id' => 3,
            'heading' => 'Срочная новось 4',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ]
    ];
}
