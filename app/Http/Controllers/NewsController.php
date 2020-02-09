<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        [
            'heading' => 'Срочная новось 1',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'heading' => 'Срочная новось 2',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'heading' => 'Срочная новось 3',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ],
        [
            'heading' => 'Срочная новось 4',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробное описание новости.'
        ]
    ];
    private $categoriesArr = [
        'Хорошие новорсти',
        'Плохие новости',
        'Спорт',
        'Политика',
        'Мдецина(коронавирус)'
    ];

    public function index() {
        return view('news', ['news' => $this->news, 'page' => 'news']);
    }

    public function categories(){
        return view('categories',
            ['categories' => $this->categoriesArr, 'page' => 'categories']
        );
    }

    public function getCategory($id = null) {
        if (isset($this->categoriesArr[$id])) {
            return view('news',
                [
                    'category' => $this->categoriesArr[$id],
                    'news' => $this->news,
                    'page' => 'categories'
                ]
            );
        }

        return redirect('/categories');
    }

    public function getOne($id) {
        if (isset($this->news[$id])) {
            return view('newsOne', ['news' => $this->news[$id], 'page' => 'news']);
        }

        return redirect('/news');
    }


}
