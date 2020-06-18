<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kpi;

class DashboardController extends Controller
{
	public function index(){

	    $RW = Kpi::where('name', 'Regular Workforce')->get()->toArray();
	    $rw_data_array = [];
	    $totalvalue = 0;
	    foreach ($RW as $key => $value) {
	        foreach ($value as $innerKey => $innerValue) {
	        	if ($innerKey == 'Officers' OR $innerKey == 'Staff' OR $innerKey == 'Contractors') {
	        		foreach ($innerValue as $datakey => $datavalue) {
	        			$rw_data_array[$innerKey] = $datavalue;
	        			$totalvalue += $datavalue;
	        		}
	        	}
	        }
	    }


	    $rw_array = array($RW, $rw_data_array, $totalvalue);

	    $HTA = Kpi::where('name', 'Hiring Target Achievement')->get()->toArray();
		$HTA_array = array_shift($HTA);

	    $CSR = Kpi::where('name', 'CSR Target Achievement')->get();
	    $CSR = json_decode($CSR, true);
	    $Training = Kpi::where('name', 'Training')->get()->toArray();

	    $Secondary_Workforce = Kpi::where('name', 'Secondary Workforce')->get()->toArray();

	    $Secondary_Workforce_total = $Secondary_Workforce[0]['Tenure Based']+$Secondary_Workforce[0]['Term Based']+$Secondary_Workforce[0]['Casual/Contingent']+$Secondary_Workforce[0]['Contract Workers'];
	    $Secondary_Regular = sprintf('%0.1f', ($Secondary_Workforce_total*100) / $totalvalue);

	    $MoU = Kpi::where('name', 'MoU Target')->get()->toArray();

	    $Retirements = Kpi::where('Retirements', 148)->get();
	    $RetirementsData =json_decode($Retirements);
	    $removedArray = array_shift($RetirementsData);
	    $Retirements_array = json_decode(json_encode($removedArray), true);
	    unset($Retirements_array["_id"]);

	    return view('kpi.index', compact('rw_array', 'Retirements_array', 'HTA_array', 'CSR', 'Training', 'Secondary_Workforce', 'Secondary_Workforce_total','Secondary_Regular', 'MoU'));

	}
}
