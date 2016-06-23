<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GvodUrl extends Model
{
    protected $table = 'gvod_url';

    public static function connectedUlr($movie_id)
    {
        $gvodUrl = GvodUrl::where('movie_id',$movie_id)->get();
        $link = '';
        foreach ($gvodUrl as $item){
            $link .= $item->link ;
        }
        return $link;
    }
}
