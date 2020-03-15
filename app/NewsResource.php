<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsResource
 * @package App
 * @property string $link
 */
class NewsResource extends Model
{
    protected $table = 'resources';
    protected $fillable = ['link'];
}
