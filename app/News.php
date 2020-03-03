<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 *
 * @property string title;
 * @property string image;
 * @property string body;
 * @property boolean isPrivate;
 * @property integer category_id;
 */
class News extends Model
{


    protected $fillable = [
        'title',
        'image',
        'body',
        'isPrivate',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id')->first();
    }

    public function getLimit($limit) {
        return $this::query()
            ->select(['id', 'title', 'image', 'created_at'])
            ->limit($limit)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

}
