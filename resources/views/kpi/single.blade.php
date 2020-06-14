<?php //echo "<pre>";print_r($single);die;
	$single = $single->toArray();
	unset($single["_id"]);
	//echo "<pre>";	print_r($single);	die;

?>

@extends('layouts.myapp')

@section('headSection')

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
	      <section id="timeline-card">
	        <div class="row">
	          <div class="col-lg-8 col-sm-12 offset-2">
	            <div class="card">
	              <div class="card-header">
	                <h4 class="card-title">Single Information</h4>
	              </div>
	              <div class="card-content">
	                <div class="card-body">
	                  <ul class="activity-timeline timeline-left list-unstyled">
	                    <li>
	                      <div class="timeline-icon bg-success">
	                        <i class="feather icon-check font-medium-2"></i>
	                      </div>
	                      <div class="timeline-info">

	                      	@foreach($single as $key => $value)
								@if( is_array($value) )
			                      		@if( !is_array($value) )
			                      			<p class="font-weight-bold">{{ ucfirst($key) }}</p>
			                      			<span> {{ $value }}</span>
			                      		@endif
										{{-- Regular workforce --}}
			                      		@if($key  == 'Officers' OR $key  == 'Staff' OR $key == 'Contractors' )
											
		                      				@foreach($value as $key2 => $value2)
		                      					<p class="font-weight-bold">{{ ucfirst($key) }} -> {{ ucfirst($key2) }}</p>
		                      					<span> {{ $value2 }} </span>
		                      				@endforeach
		                      			@endif

		                      			{{-- CSR Target Achievement --}}
			                      		@if($key  == 'CSR_achievement_actual' OR $key  == 'CSR_achievement_target')
											
		                      				@foreach($value as $key2 => $value2)
		                      					<p class="font-weight-bold">{{ ucfirst($key) }} -> {{ ucfirst($key2) }}</p>
		                      					<span> {{ $value2 }} </span>
		                      				@endforeach
		                      			@endif
			                      		
										@if($key  == 'Execcutive' OR $key  == 'staff' OR $key == 'achievement' )
											
		                      				@foreach($value as $key2 => $value2)
		                      					<p class="font-weight-bold">{{ ucfirst($key2) }}</p>
		                      					<span> {{ $value2 }} </span>
		                      				@endforeach
		                      			@endif
								@else 
									<p class="font-weight-bold">{{ ucfirst($key) }}</p>
									<span> {{ $value }} </span>
								@endif
	                      	@endforeach

	                      </div>
	                    </li>
	                  </ul>
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
@endsection