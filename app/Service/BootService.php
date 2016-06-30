<?php
/**
 * Created by PhpStorm.
 * User: haohui
 * Date: 2016/6/30
 * Time: 10:13
 */
namespace App\Service;

use App\Models\Setting;

class BootService
{
    public function domainSetting()
    {
        $data = Setting::all()->toArray();
        $setting = [];
        foreach ($data as $key => $item) {
            $setting[$item['skey']] = $item['svalue'];
        }
        return $setting;
    }
}