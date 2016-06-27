<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudDisk extends Model
{
    protected $table = 'cloud_disk';
    
    protected $primaryKey = 'disk_id';
    
    public function movie_info()
    {
        return $this->hasOne('App\Models\Movie','movie_id','movie_id');
    }
    
    public function disk_links()
    {
        return $this->hasOne('App\Models\CloudDiskLink','disk_id','disk_id');
    }
}
