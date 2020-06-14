<?php 

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

//------------------------------------------------------------
$RetirementsData =json_decode($Retirements);
$removedArray = array_shift($RetirementsData);
$arrayData = json_decode(json_encode($removedArray), true);
unset($arrayData["_id"]);
//-------------------------------------------------------------
$HTA = $HTA->toArray();
$HTA_array = array_shift($HTA);
//-------------------------------------------------------------


?>

@extends('layouts.myapp')

@section('headSection')
	<link rel="stylesheet" type="text/css" href="{{ asset('kpi/css/dashboard.css')}}">
@endsection

@section('content')


	
	<!-- BEGIN: Content-->
	<div class="app-content content">
	  <div class="content-overlay"></div>
	  <div class="header-navbar-shadow"></div>
	  <div class="content-wrapper">
	    <div class="content-header row">
	    </div>
	    <div class="content-body">
	      <!-- Dashboard Analytics Start -->
	      <section id="dashboard-analytics">
	        <div class="row">
	        	
	            <div class="col-lg-3 col-md-6 col-12" >
	              <div class="card" style="">
					<h4 style="text-align: center; margin-top: 8px;">{{ $RW[0]['name'] }}</h4>
					<div class="donut-wrapper">
						<div id="donutchart" style=" padding-left: 10px;"></div>
						<div class="inner-content">{{ $totalvalue}}</div>
				    </div>
	                
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	            		@foreach($arrayData as $innerkey => $innervalue)
	            			<div class="card cardbox" style="width: 67%;">
				              	<div class="box1">{{ $innerkey }} <br>
									<strong>{{ $innervalue }}</strong>
				              	</div>
				            </div>
	            		@endforeach
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	              <div class="card">
	                    
	                    <h4 class="text-bold-700 mt-1 mb-25" style="margin-left: 15%;" >Hiring Target Achievement</h4>
	                    <div class="verticalChart">

	                      <div class="singleBar">
	                        <div class="bar">
	                          <div class="value" style="height: 37%;">
	                            <span style=" display: inline;">{{  $HTA_array['Execcutive']['Execcutive'] }}</span>
	                          </div>
	                        </div>
	                        <div class="title">Executive</div>
	                      </div>

	                      <div class="singleBar">
	                        <div class="bar">
	                          <div class="value" style="height: 50%;">
	                            <span style=" display: inline;">{{  $HTA_array['staff']['staff'] }}</span>
	                          </div>
	                        </div>
	                        <div class="title">Staff</div>
	                      </div>
	                      <div class="clearfix"></div>

	                    </div>
						<br>
	              </div>
	            </div>

	            

	            <div class="col-lg-3 col-md-6 col-12">
	              <div class="card">
	                  <div class="card-header d-flex flex-column align-items-start pb-0">
	                      <h4 class="text-bold-700 mt-1 mb-25">MoU Target</h4>
	                      <p class="mb-0">PAR Completion: <span style="color: red">78%</span></p>
	                      <p class="mb-0">Training in CoE: <span style="color: red">68%</span></p>
	                      <br>
	                      <strong class="otherp">Other Parameters</strong>
	                  </div>
	                  
	                  <div class="card-header d-flex flex-column align-items-start pb-0">
	                      <h4 class="text-bold-700 mt-1 mb-25">HR Scorecard</h4>
	                      <strong class="otherp">Other Parameters</strong>
	                      <br>
	                  </div>
	              </div>
	            </div>

	        </div>

            <div class="row">
            	
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <h4 class="text-bold-700 mt-1 mb-25">Secondary Workforce </h4>
                        <h2 class="text-bold-700 mt-1 mb-25">22386</h2>
                        <p style="color: red">73.4% of manpower</p>
                        <br>
                        <span>Tenure Based              631</span>
                    <span>Term Based 	               15</span>
                    <span>Contract Workers      21106</span>
                    <span>Casual/Contingent    240</span>
                    </div>
                    
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        
                        <h4 class="text-bold-700 mt-1 mb-25">Hiring Target Achievement</h4>
                        <p class="mb-0">Subscribers Gained</p>
                    </div>
                    <p></p>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                        <p class="mb-0">Subscribers Gained</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                  <div class="card">
                      <div class="card-header d-flex flex-column align-items-start pb-0">
                          <div class="avatar bg-rgba-warning p-50 m-0">
                              <div class="avatar-content">
                                  <i class="feather icon-package text-warning font-medium-5"></i>
                              </div>
                          </div>
                          <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                          <p class="mb-0">Orders Received</p>
                      </div>
                      <div class="card-content">
                          <div id="orders-received-chart"></div>
                      </div>
                  </div>
                </div>

            </div>
	        
	       
	      </section>
	      <!-- Dashboard Analytics end -->

	    </div>
	  </div>
	</div>
	<!-- END: Content-->


@endsection

@section('footerSection')
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/charts/chart-apex.min.js')}}"></script>
<script src="{{ asset('app-assets/js/scripts/charts/loader.js')}}"></script>

<script type="text/javascript">

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
              ['Language', 'Rating'],
              <?php
	              if(is_array($rw_data_array)){
	              	foreach ($rw_data_array as $key => $value) {
	              		echo "['".$key."', ".$value."],";
	              	}
	              }
              ?>
            ]);


        var options = {
          title: 'My Daily Activities',
          height: 200,
          width: 200,
          pieHole: 0.5,
          showLables: 'true',
          pieSliceText: 'value',
          pieSliceTextStyle: {
              color: 'white',
              fontSize:14
          },
          legend: {
              position: 'bottom',
              alignment: 'center'
          },
          chartArea: { 
              left: 0, 
              top: 10, 
              width: '130%', 
              height: '80%'
          },
          tooltip: {
              trigger: true
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
</script>
@endsection