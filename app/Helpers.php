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
