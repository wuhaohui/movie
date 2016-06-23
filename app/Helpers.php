<?php
/**
 * Created by PhpStorm.
 * User: haohui
 * Date: 2016/6/21
 * Time: 15:08
 */


use App\Models\MovieType;

function header_common_data()
{
    return $data['movie_type'] = MovieType::hot();   
}

function nav()
{
    return [
        '1' => '电影',
        '13' => '电视',
        '24' => '动漫',
        '25' => '综艺',
        '12' => '影视预告',
    ];
}