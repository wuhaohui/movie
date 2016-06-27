<?php

namespace App\Http\Controllers;

use App\Models\CloudDisk;
use Illuminate\Http\Request;

use App\Http\Requests;

class CloudDiskController extends Controller
{
    public function index($disk_id)
    {
        $cloudDisk = CloudDisk::find($disk_id);
        $movie = $cloudDisk->movie_info()->first();
        $links = $cloudDisk->disk_links()->get();
        return view('cloudDisk',compact('movie','links','cloudDisk'));
    }
}
