<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';

    public static function category_movie($category_id ,$orderType = 'updated_at', $limit = 12 , $orderBy = 'desc' )
    {
        return Movie::where('category_id', $category_id)
            ->orderBy($orderType , $orderBy)
            ->limit($limit)
            ->get();
    }
}
