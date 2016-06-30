<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    
//    protected $primaryKey = 'key';
    
    protected $fillable = ['value','key'];

    public $timestamps = false;
}
