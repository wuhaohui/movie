<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

use App\Http\Requests;

class DetailController extends Controller
{

//    protected $layout = 'layouts.app';

    public function index($id)
    {
        $data['movie'] = Movie::find($id);
        $data['actors'] = Actor::where('movie_id',$id)->lists('actor');
        $data['movie']->min = preg_replace("/<.*?>|\n|&nbsp;/",'',$data['movie']->profile);
        $data['movie']->min = mb_strstr($data['movie']->min, 60) . '....';
       
        return view('detail',$data);
    }
}
