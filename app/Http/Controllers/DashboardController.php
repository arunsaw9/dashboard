<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kpi;

class DashboardController extends Controller
{
	public function index(){

	    $RW = Kpi::where('name', 'Regular Workforce')->get();
	    $rw_data_array = [];
	    $totalvalue = 0;
	    foreach ($RW->toArray() as $key => $value) {
	        foreach ($value as $innerKey => $innerValue) {
	        	if ($innerKey == 'Officers' OR $innerKey == 'Staff' OR $innerKey == 'Contractors') {
	        		foreach ($innerValue as $datakey => $datavalue) {
	        			$rw_data_array[$innerKey] = $datavalue;
	        			$totalvalue += $datavalue;
	        		}
	        	}
	        }
	    }

	    $HTA = Kpi::where('name', 'Hiring Target Achievement')->get()->toArray();
		$HTA_array = array_shift($HTA);

	    $CSR = Kpi::where('name', 'CSR Target Achievement')->get();
	    $CSR = json_decode($CSR, true);
	    $Training = Kpi::where('name', 'Training')->get()->toArray();
	    $Secondary_Workforce = Kpi::where('name', 'Secondary Workforce')->get()->toArray();

	    $MoU = Kpi::where('name', 'MoU Target')->get()->toArray();

	    $Retirements = Kpi::where('Retirements', 148)->get();
	    $RetirementsData =json_decode($Retirements);
	    $removedArray = array_shift($RetirementsData);
	    $arrayData = json_decode(json_encode($removedArray), true);
	    unset($arrayData["_id"]);

	    return view('kpi.index', compact('RW','rw_data_array', 'totalvalue', 'arrayData', 'HTA_array', 'CSR', 'Training', 'Secondary_Workforce', 'MoU'));

	}
}
