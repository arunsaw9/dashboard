<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Regularworkforce extends Eloquent
{
	protected $connection = 'mongodb';
    protected $collection = 'regularworkforces';
    
    protected $fillable = [
        'carcompany', 'model','price'
    ];
    protected $casts = [
         'data' => 'json',
     ];
     public $timestamps = false;

}
