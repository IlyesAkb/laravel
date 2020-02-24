<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;
use Illuminate\Http\Resources\Json;
class News extends Model
{
    public static $all = [
        [
            'id' => 1,
            'heading' => 'Срочная новось 1',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.',
            'category' => 1,
            'isPrivate' => false
        ],
        [
            'id' => 2,
            'heading' => 'Срочная новось 2',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.',
            'category' => 2,
            'isPrivate' => false
        ],
        [
            'id' => 3,
            'heading' => 'Срочная новось 3',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.',
            'category' => 3,
            'isPrivate' => false
        ],
        [
            'id' => 4,
            'heading' => 'Срочная новось 4',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.',
            'category' => 4,
            'isPrivate' => false
        ],
        [
            'id' => 5,
            'heading' => 'Срочная новось 4',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.',
            'category' => 5,
            'isPrivate' => false
        ]
    ];

    public static function getAll() {
        $file = Storage::disk('public')->get('DB/news.json');
        return json_decode($file, true);
    }

    public static function insert($data) {
        $newsArr = News::getAll();
        foreach ($data as $prop) {
            if ($prop == null) {
                return false;
            }
        }
        if (!isset($news['isPrivate'])) {
            $data['isPrivate'] = false;
        }
        $data['newsImg'] = "https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg";
        $data['id'] = count($newsArr) + 1;
        $newsArr[] = $data;

        $data = json_encode($newsArr, JSON_UNESCAPED_UNICODE);
        Storage::disk('public')->put('DB/news.json', $data);
        return true;
    }
}
