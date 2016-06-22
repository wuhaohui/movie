<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieType;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index()
    {
        //动漫电影
        $animation_movie = Movie::category_movie(24);
        //综艺节目
        $variety_show = Movie::category_movie(25);
        //连续剧
        $series_movie = Movie::category_movie(13);
        //预告片
//        $trailer = Movie::category_movie(12);
        $movies = Movie::category_movie(1);

        $recent_movie = Movie::category_movie('','updated_at',14);

        $hot_film = Movie::category_movie(1,'updated_at',14);

        $movieType = MovieType::hot();

        return view('site',compact(
            'animation_movie','variety_show','series_movie','trailer','movies','recent_movie',
            'hot_film' ,'movieType'
        ));
    }
}
