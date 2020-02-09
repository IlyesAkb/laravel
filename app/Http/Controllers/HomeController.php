<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $news = [
        [
            'heading' => 'Срочная новось 1',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробности'
        ],
        [
            'heading' => 'Срочная новось 2',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробности'
        ],
        [
            'heading' => 'Срочная новось 3',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробности'
        ],
        [
            'heading' => 'Срочная новось 4',
            'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg',
            'description' => 'Подробности'
        ]
    ];

    public function index() {
        return view('welcome', ['news' => $this->news, 'page' => 'main']);
    }

    public function info() {
        return view('info', ['page' => 'info']);
    }
}
