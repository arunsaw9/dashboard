

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
                              <h4 class="card-title">Update Information</h4>
                          </div>
                          

                          <div class="card-content">
                              <div class="card-body">
                                  <form class="form form-horizontal" action="{{ route('kpis.update', $editkpis->_id) }}" method="post">
                                    @csrf
                                    {{ method_field('PUT') }}
                                      <div class="form-body">
                                          <div class="row">
                                              <div class=" col-12">
                                                  <div class="form-group row">
                                                      <div class="col-md-4">
                                                      <span>Name</span>
                                                    </div>
                                                      <div class="col-md-8">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="fname-icon" class="form-control" name="name" value="{{$editkpis->name }}">
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
    <?php if ($editkpis->name == 'Regular Workforce') { ?>
      <div id="inputFormRow">
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="rwf[officers][actual]" class="form-control m-input" value="{{ $editkpis->officers['actual'] }}" placeholder="officers" autocomplete="off">
          </div>
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="rwf[staff][actual]" class="form-control m-input" value="{{ $editkpis->staff['actual']  }}" placeholder="staff" autocomplete="off">
          </div>
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="rwf[contractors][actual]" class="form-control m-input" value="{{ $editkpis->contractors['actual']  }}" placeholder="contractors" autocomplete="off">
          </div>
      </div>
    <?php } else if($editkpis->name == 'Hiring Target Achievement') { ?>
    <div id="inputFormRow">
        <input type="hidden" id="custId" name="HTA" value="HTA">
        <div class="input-group " style="margin: 10px 0;">
            <input type="text" name="Execcutive" class="form-control m-input" value="{{ $editkpis->Execcutive  }}" placeholder="Execcutive" autocomplete="off">
        </div>
        <div class="input-group " style="margin: 10px 0;">
            <input type="text" name="staff" class="form-control m-input" value="{{ $editkpis->staff }}" placeholder="Staff" autocomplete="off">
        </div>
    </div>
     <?php } else if($editkpis->name == 'CSR Target Achievement') { ?>
      <div id="inputFormRow">
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="title2[staff][actual]" class="form-control m-input" value="{{ $editkpis->achievement['actual']  }}" placeholder="actual" autocomplete="off">
          </div>
           <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="title2[staff][actual]" class="form-control m-input" value="{{ $editkpis->achievement['target']  }}" placeholder="target" autocomplete="off">
          </div>
      </div>
    <?php } else { ?>
      <div id="inputFormRow">
          <p style="margin-top: 12px;"> Traning Days </p>
          <input type="hidden" id="custId" name="Traning" value="Traning">
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="TraningDays[actual]" class="form-control m-input" value="{{$editkpis->TraningDays['actual']  }}" placeholder="actual" autocomplete="off">
          </div>
           <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="TraningDays[target]" class="form-control m-input" value="{{ $editkpis->TraningDays['target']  }}" placeholder="target" autocomplete="off">
          </div>

          <p> Participants </p>
          <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="Participants[actual]" class="form-control m-input" value="{{ $editkpis->Participants['actual']  }}" placeholder="actual" autocomplete="off">
          </div>
           <div class="input-group " style="margin: 10px 0;">
              <input type="text" name="Participants[target]" class="form-control m-input" value="{{ $editkpis->Participants['target']  }}" placeholder="target" autocomplete="off">
          </div>
      </div>
    <?php } ?>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
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

