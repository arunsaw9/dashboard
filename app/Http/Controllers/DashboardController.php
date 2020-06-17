<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kpi;

class DashboardController extends Controller
{
	public function index(){

		    $RW = Kpi::where('name', 'Regular Workforce')->get();
		    $HTA = Kpi::where('name', 'Hiring Target Achievement')->get();
		    $CSR = Kpi::where('name', 'CSR Target Achievement')->get();
		    $CSR = json_decode($CSR, true);
		    $Training = Kpi::where('name', 'Training')->get();
		    $Secondary_Workforce = Kpi::where('name', 'Secondary Workforce')->get()->toArray();
		    $Retirements = Kpi::where('Retirements', 148)->get();
		    return view('kpi.index', compact('RW', 'Retirements', 'HTA', 'CSR', 'Training', 'Secondary_Workforce'));
	}
}
