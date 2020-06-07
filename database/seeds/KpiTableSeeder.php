<?php

use Illuminate\Database\Seeder;
use App\kpi;
class KpiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         	kpi::create(
	            [
	                'name' => "Regular Workforce",
	                "month" => 'Jan',
	                "year" => "2021",
	                "officers"=>[
	                	"actual"=> 110
	                ],
	                "staff"=>[
	                	"actual"=>120
	                ],
	                "contractors"=>[
	                	"actual"=>200
	                ],
	            ]	            
	        );

	        kpi::create([
	                'Retirements' => 148,
	                "Attrition" => '1.2%',
	                "Average Age" => '43.3 yrs',
	                "Women" => '7.2%'
	            ]);

	        kpi::create([
	            	"name"=>'Hiring Target Achievement',
	            	"month"=>'May',
	            	"year"=> 2020,
	            	"Execcutive"=> 200,
	            	"staff"=>100
	            ]);

	        kpi::create([
	            	"name"=>'MoU Target',
	            	"month"=>'June',
	            	"year"=> 2020,
	            	"PAR Completion"=> '78%',
	            	"Training in CoE"=>'68%'
	            ]);

	        kpi::create([
	            	"name"=>'Secondary Workforce',
	            	"month"=>'June',
	            	"year"=> 2020,
	            	"Tenure Based "=> 631,
	            	"Term Based  "=> 15	,
	            	"Contract Workers"=>21106,
	            	"Casual/Contingent"=>240
	            ]);

	        kpi::create([
	            	"name"=>'CSR Target Achievement',
	            	"month"=>'June',
	            	"year"=> 2020,
	            	"achievement "=> [
	            		"actual"=>85,
	            		"target"=>100
	            	]
	            ]);

	        kpi::create([
	            	"name"=>'NAPS Target',
	            	"month"=>'June',
	            	"year"=> 2020,
	            	"achievement "=> [
	            		"actual"=>85,
	            		"target"=>100
	            	]
	            ]);

	        kpi::create([
	            	"name"=>'Training',
	            	"month"=>'June',
	            	"year"=> 2020,
	            	"traning days "=> [
	            		"actual"=>45,
	            		"target"=>100
	            	],
	            	"participants"=> [
	            		"actual"=>75,
	            		"target"=>100
	            	]
	            ]);
    }
}
