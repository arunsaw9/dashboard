@extends('layouts.myapp')

<style>

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
          
          <section id="basic-horizontal-layouts">
              <div class="row match-height">
                  
                  <div class="col-md-10 col-12 offset-1">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Create Information</h4>
                          </div>
                          <div class="card-content">
                              <div class="card-body">
                                @include('includes.messages')
                                  <form class="form form-horizontal" action="{{ route('kpis.store') }}" method="post">
                                    @csrf
                                      <div class="form-body">
                                          <div class="row">
                                              <div class=" col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                      <span>Name</span>
                                                    </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="fname-icon" class="form-control" name="name" placeholder="Name">
                                                              <div class="form-control-position">
                                                             <i class="feather icon-user"></i>
                                                        </div>
                                                      </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>Month</span>
                                                        </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                            <select id="year" class="select2 form-control" name="month">
                                                                <option value=''>--Select Month--</option>
                                                                  <option selected value='Janaury'>Janaury</option>
                                                                  <option value='February'>February</option>
                                                                  <option value='March'>March</option>
                                                                  <option value='April'>April</option>
                                                                  <option value='5'>May</option>
                                                                  <option value='May'>June</option>
                                                                  <option value='July'>July</option>
                                                                  <option value='August'>August</option>
                                                                  <option value='September'>September</option>
                                                                  <option value='October'>October</option>
                                                                  <option value='November'>November</option>
                                                                  <option value='December'>December</option>
                                                                  </select> 
                                                              <div class="form-control-position">
                                                                <i class="feather icon-calendar"></i>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>Year</span>
                                                        </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                            <select id="year" class="select2 form-control" name="year">
                                                                <?php 
                                                                    for ($year = 2020; $year < 2025 ; $year++) { 
                                                                        echo '<option value="'.$year.'">'.$year.'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-calendar"></i>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                          <span>Input</span>
                                                        </div> 
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                                <select name="data_value" class="select2 form-control">
                                                                    <option >Please Select One</option>
                                                                    <option value="RW">Regular Workforce</option>
                                                                    <option value="HTA">Hiring Target Achievement</option>
                                                                    <option value="CSR">CSR Target Achievement</option>
                                                                    <option value="TR">Training</option>
                                                                </select>
                                                            </div>
                                                            <div id="newRow"></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- 
                                              <div class="form-group col-md-8 offset-md-4">
                                                  <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                      <input type="checkbox">
                                                      <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                          <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                      </span>
                                                      <span class="">Remember me</span>
                                                    </div>
                                                  </fieldset>
                                                </div> -->
                                            <div class="col-md-8 offset-md-4">
                                                  <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                  
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


@endsection

@section('footerSection')
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/charts/chart-apex.min.js')}}"></script>
<script src="{{ asset('app-assets/js/dashboard.js')}}"></script>

@endsection

