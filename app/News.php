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

    public static function getLimit($limit) {
        return News::query()
            ->select(['id', 'title', 'image', 'created_at'])
            ->limit($limit)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function validationRules() {
        $categories = (new Category)->getTable();
        return [
            "title" => "required|min:10|max:100",
            "category_id" => "required|exists:{$categories},id",
            "body" => "required",
            "image" => "mimes:jpeg,bmp,png|max:4000",
            "is_private" => "boolean|min:0|max:1"
        ];
    }

    public function attributeNames() {
        return [
            'title' => 'Заголовок',
            'category_id' => 'Категория',
            'body' => 'Текст',
            'image' => 'Изображение',
        ];
    }
}

