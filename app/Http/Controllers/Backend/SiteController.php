<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('backend.admin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'siteUrl' =>  'required|max:255',
            'siteName' =>  'required|max:255',
            'keyword' =>  'required|max:255',
            'siteDesc' =>  'required|max:255',
        ]);
        var_dump($request->all());
    }
}
