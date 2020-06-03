<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kpi;
class KpiController extends Controller
{
        public function index(){

            return kpi::create([
                'name' => "Regular Workforce",
                "month" => 'Jan',
                "year" => "2021",
                "data" => [
                    "NPS_Target"=>"39%"
                ],
                "officers"=>[
                	"actual"=> 110
                ],
                "staff"=>[
                	"actual"=>120
                ]
            ]);

        }

        public function show(){
        	return kpi::all();
        }
}
