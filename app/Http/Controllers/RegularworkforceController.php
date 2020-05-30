<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Regularworkforce;

class RegularworkforceController extends Controller
{
    public function index(){
        //return 'fdsfds';
    	$data = new Regularworkforce;
    	$data->data = [ 
    		'RW'=>[
	    		'P_staff' => "7000",
	    		'c_emp' => '5610',
	    		'vender' => '100',
	    		'other' => '300',
    		],
    		'humanData'=>[
	    		'Retirements' => "148",
	    		'attrition' => '1.2',
	    		'average_age' => '43.3',
	    		'women' => '7.2',
    		],
    		'target_achivement'=>[
	    		'excutive' => "1480",
	    		'attrition' => '5000',
    		],
    		'mou_target'=>[
	    		'PAR_completion' => "78%",
	    		'traning_in_CoE' => '68%',
    		],
    		'Medical'=> "295",
    		'Secondary_workforce'=> "22368",
    		'SW_manpower' => "73.4%",
    		'SWData'=>[
	    		'tenure_based' => "631",
	    		'term_based' => '15',
	    		'Contract_workers' => '21106',
	    		'casual_contingent' => '240',
    		],
    		'CSR_Achievement'=> "30%",
    		'NPS_Target'=> "38%",
    	];
    	$data->month = "Jan";
    	$data->year = "2020";
    	$data->save();
    	return 'fdsfdsf';
    }

    public function show(){
    	return Regularworkforce::all();
    }
}
