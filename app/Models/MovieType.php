<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    protected $table = 'movie_type';

    /**
     * 热门分类
     * @param int $limit
     * @return mixed
     */
    public static function hot($limit = 12)
    {
        return MovieType::limit($limit)->get()->toArray();
    }
}
