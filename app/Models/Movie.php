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
    public static function differentCategoryMovie($category_id = null, $limit = 12,  $orderType = 'updated_at', $orderBy = 'desc')
    {
        if ($category_id) {
            $movie = Movie::where('category_id', $category_id)
                ->orderBy($orderType, $orderBy)->take($limit)->get()->toArray();
        } else {
            $movie = Movie::orderBy($orderType, $orderBy)->take($limit)->get()->toArray();
        }

        return self::decorate($movie);
    }

    public static function decorate($movie)
    {
        $now_day = Carbon::now()->day;
        
        if (is_object($movie)){
            $movie = $movie->toArray();
        }
        
        foreach ($movie as $key => $item) {
            $date = Carbon::parse($item['updated_at']);
            $movie[$key]['year'] = $date->year;
            $movie[$key]['month'] = $date->month;
            $movie[$key]['day'] = $date->day;
            $movie[$key]['link'] = 'detail/'.$item['movie_id'].'.html';
            if ($item['now_episodes']){
                $movie[$key]['status'] = '更新到'.$movie[$key]['now_episodes'].'集';
            }
            if ($movie[$key]['day'] == $now_day) {
                $movie[$key]['is_new'] = true;
            } else {
                $movie[$key]['is_new'] = false;
            }
        }
        return $movie;
    }

//    public function differentCategoryMovie($category_ids,$orderType = '',$orderBy = '',$limit = '12')
//    {
//        if (is_array($category_ids)){
//            $movie = Movie::where('category_id', $category_ids)
//                ->orderBy($orderType, $orderBy)->take($limit)->get()->toArray();
//        }
//    }

    public function testc()
    {
        var_dump($this);exit;
    }

    public function disk()
    {
        return  $this->hasOne('App\Models\CloudDisk','movie_id','movie_id');
    }
}
