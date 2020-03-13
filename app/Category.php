<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 * @property string $name
 * @property int $id
 */
class Category extends Model
{
    public function news() {
        return $this->hasMany(News::class, 'category_id')->get();
    }
}
