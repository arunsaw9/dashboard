@extends('layouts.myapp')

@section('headSection')
	#donut-chart {
	  max-width: 300px;
	  margin: 200px auto;
	}
@endsection

<style>
.box1 {
  background-color: lightgrey;
  width: 150px;
  border: 5px solid green;
  padding: 6px;
  margin: 6px;
  text-align: center;

  -moz-box-shadow:    inset 0 0 10px #000000;
    -webkit-box-shadow: inset 0 0 10px #000000;
    box-shadow:         inset 0 0 4px #000000;
}
.cardbox{margin-bottom: 0.2rem !important;    width: 76%;}
.otherp{
    border: 1px solid #ccc;
    width: 160px;
    text-align: center;
    padding: 3px 0;
    box-shadow: -10px 10px 5px rgba(0,0,0,0.6);
    -moz-box-shadow: -10px 10px 5px rgba(0,0,0,0.6);
    -webkit-box-shadow: -5px 5px 1px rgba(0,0,0,0.6);
    -o-box-shadow: -10px 10px 5px rgba(0,0,0,0.6);
}
</style>

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
					<h4 style="margin: 10px 0 0 15px;">Regular Workforce</h4>
	                <div id="donutchart" style=" padding-left: 15px;"></div>
	              </div>
	            </div>

	            <div class="col-lg-3 col-md-6 col-12">
	              <div class="card cardbox">
	              	<div class="box1">Retirements 
						<strong>148</strong>
	              	</div>
	              </div>
	              <div class="card cardbox">
	              	<div class="box1">Attrition 
						<strong>1.2 %</strong>
	              	</div>
	              </div>

	              <div class="card cardbox">
	              	<div class="box1">Average Age
						<strong>43.3</strong>
	              	</div>
	              </div>
	              
	              <div class="card cardbox">
	              	<div class="box1">Women
						<strong>7.2 %</strong>
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

	        <div class="row">
	            <div class="col-md-6 col-12">
	              <div class="card">
	                  <div class="card-header">
	                    <h4 class="card-title">Donut Chart</h4>
	                  </div>
	                  <div class="card-content">
	                    <div class="card-body">
	                      <div id="donut-chart" class="mx-auto"></div>
	                    </div>
	                  </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-12">
	              <div class="card">
	                <div class="card-header d-flex justify-content-between pb-0">
	                    <h4 class="card-title">Support Tracker</h4>
	                    <div class="dropdown chart-dropdown">
	                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4"
	                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                          Last 7 Days
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
	                          <a class="dropdown-item" href="#">Last 28 Days</a>
	                          <a class="dropdown-item" href="#">Last Month</a>
	                          <a class="dropdown-item" href="#">Last Year</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="card-content">
	                    <div class="card-body pt-0">
	                        <div class="row">
	                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
	                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
	                                <small>Tickets</small>
	                            </div>
	                            <div class="col-sm-10 col-12 d-flex justify-content-center">
	                                <div id="support-tracker-chart"></div>
	                            </div>
	                        </div>
	                        <div class="chart-info d-flex justify-content-between">
	                            <div class="text-center">
	                                <p class="mb-50">New Tickets</p>
	                                <span class="font-large-1">29</span>
	                            </div>
	                            <div class="text-center">
	                                <p class="mb-50">Open Tickets</p>
	                                <span class="font-large-1">63</span>
	                            </div>
	                            <div class="text-center">
	                                <p class="mb-50">Response Time</p>
	                                <span class="font-large-1">1d</span>
	                            </div>
	                        </div>
	                    </div>
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
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['1',     11],
          ['2',      2],
          ['3', 2],
          ['4',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          height: 200,
          width: 200,
          pieHole: 0.4,
          showLables: 'true',
          pieSliceText: 'value',
          pieSliceTextStyle: {
              color: 'white',
              fontSize:14
          },
          legend: {
              position: 'right',
              alignment: 'center'
          },
          chartArea: { 
              left: 0, 
              top: 10, 
              width: '130%', 
              height: '65%'
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