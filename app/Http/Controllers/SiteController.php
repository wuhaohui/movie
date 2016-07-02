<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieType;

use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;


class SiteController extends Controller
{
    public function index()
    {
        $data = array();

        if (!Cache::has('recentMovieData'))
        {
            //最新动漫电影$animation_movie
            $data['recentAnimationMovie'] = Movie::differentCategoryMovie(24,14);
            //最新综艺节目$variety_show
            $data['recentVarietyShow'] = Movie::differentCategoryMovie(25,14);
            //最新连续剧 $series_movie  13
            $data['recentSeriesMovie'] = Movie::differentCategoryMovie(13,14);
            $data['recentFilm'] = Movie::differentCategoryMovie(1,14);
            Cache::put('recentMovieData',json_encode($data),10);
            //最新预告片 //  $trailer = Movie::category_movie(12);
        }else{
            $data = json_decode(Cache::get('recentMovieData'),true);
        }

        $data['hotMovies'] = Movie::orderBy('clicks','desc')->take(12)->get()->toArray();
        $data['hotMovies'] = Movie::decorate($data['hotMovies']);

        $data['seriesMovie'] = Movie::differentCategoryMovie(13);
        $data['animationMovie'] = Movie::differentCategoryMovie(24);
        $data['varietyShow'] = Movie::differentCategoryMovie(25);
        $data['movies'] = Movie::differentCategoryMovie(1);
        $data['recentMovie'] = Movie::differentCategoryMovie('',14);
        $data['movieType'] = MovieType::hot();
        
        return view('site',$data);
    }


}
