<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Kpi extends Eloquent
{
    protected $collection = 'kpis';
        
    protected $guarded = [ ];
   
    public $timestamps = false;
}
