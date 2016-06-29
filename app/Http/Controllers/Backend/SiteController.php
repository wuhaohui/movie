<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $setting = Setting::find('domain')->toArray();;
        return view('backend.admin',compact('setting'));
    }

    public function store(Request $request)
    {
        $this->validator($request);
        $value = [
            'siteUrl' => $request->input('siteUrl'),
            'siteName' => $request->input('siteName'),
            'keyword' => $request->input('keyword'),
            'siteDesc' => $request->input('siteDesc'),
        ];

        Setting::updateOrCreate(['key' => 'domain'], ['value' => serialize($value)]);

        return view('backend.admin');
    }

    protected function validator(Request $request)
    {
        $this->validate($request, [
            'siteUrl' => 'required|max:255',
            'siteName' => 'required|max:255',
            'keyword' => 'required|max:255',
            'siteDesc' => 'required|max:255',
        ]);
    }
}
