<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index($type,$param)
    {
        $paginate = Movie::where($type,$param)->orderBy('updated_at','desc')->paginate(12)->toArray();
        $movies =  Movie::decorate($paginate['data']);
        return view('show',compact('paginate','movies'));
    }

    /**
     * 搜索
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $keyword = $request->input('wd');
        if (isset($keyword)){
            $paginate = Movie::where('name','like','%'.$keyword.'%')
               ->orWhere('actors','like','%'.$keyword.'%')
                ->orderBy('updated_at','desc')
                ->paginate(12)->toArray();
            $movies =  Movie::decorate($paginate['data']);
        }
        return view('show',compact('movies','paginate'));
    }
}
