<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function index($type,$param)
    {
        $paginate = Movie::where($type,$param)->orderBy('updated_at','desc')->paginate(12)->toArray();
        $movies =  Movie::decorate($paginate['data']);
        return view('show',compact('paginate','movies'));
    }

    public function test()
    {
        var_dump(__CLASS__);
    }
}
