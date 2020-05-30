@extends('layouts.myapp')

@section('headSection')
	#donut-chart {
	  max-width: 300px;
	  margin: 200px auto;
	}
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
	                <div id="donutchart" style="    margin-left: 30px;"></div>
	              </div>
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	              <div class="card">
	                <div class="card-header d-flex flex-column align-items-start pb-0">
	                    
	                    <h4 class="text-bold-700 mt-1 mb-25">Hiring Target Achievement</h4>
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