<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie';

    protected $primaryKey = 'movie_id';

    /**
     * 获取电影类型
     * @param $category_id
     * @param string $orderType
     * @param int $limit
     * @param string $orderBy
     * @return mixed
     */
    public static function category_movie($category_id, $orderType = 'updated_at', $limit = 12, $orderBy = 'desc')
    {
        if ($category_id) {
            $movie = Movie::where('category_id', $category_id)
                ->orderBy($orderType, $orderBy)->take($limit)->get()->toArray();
        } else {
            $movie = Movie::orderBy($orderType, $orderBy)->take($limit)->get()->toArray();
        }

        if ($movie) {
            $now_day = Carbon::now()->day;
            foreach ($movie as $key => $item) {
                $movie[$key]['month'] = Carbon::parse($item['updated_at'])->month;
                $movie[$key]['day'] = Carbon::parse($item['updated_at'])->day;
                if ($movie[$key]['day'] == $now_day) {
                    $movie[$key]['is_new'] = true;
                } else {
                    $movie[$key]['is_new'] = false;
                }
            }
        }
        return $movie;
    }


}
