<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShowController extends Controller
{
    public function index()
    {
        $paginate = Movie::orderBy('updated_at','desc')->paginate(12)->toArray();
        $movies =  Movie::decorate($paginate['data']);
        return view('show',compact('paginate','movies','custom_page'));
    }
}
