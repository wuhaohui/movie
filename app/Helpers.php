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

function nav($category = '')
{
    $nav = [
        '1' => '电影',
        '13' => '电视',
        '24' => '动漫',
        '25' => '综艺',
        '12' => '影视预告',
    ];
    if (!empty($category)) {
        return $nav[$category];
    }
    return $nav;
}

if (!function_exists('setting')) {
    function setting()
    {
        $data = \App\Models\Setting::all()->toArray();
        foreach ($data as $item) {
            \Illuminate\Support\Facades\Config::set('setting.' . $item['key'], unserialize($item['value']));
        }

    }
}