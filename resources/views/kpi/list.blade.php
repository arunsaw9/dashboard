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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="mb-0">Dispatched Orders</h4>
                    <h4 class="mb-0"><a href="{{ route('kpis.create') }}" class="btn btn-primary mr-1 mb-1">Create</a></h4>
                  </div>
                  <div class="card-content">
                    <div class="table-responsive mt-1">
                      <table class="table table-hover-animation mb-0">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Update</th>
                            <th> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($lists as $list)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>{{$list->name}}</td>
                            <td>{{ $list->month }}</td>
                            <td>{{ $list->year }}</td>
                            <td><a href="{{ route('kpis.edit',$list->_id) }}" class="btn  btn-outline-primary mr-1"><span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                            <td>
                              <form id="delete-form-{{ $list->_id }}" method="post" action="{{ route('kpis.destroy',$list->_id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" class="btn btn-outline-warning mr-1 " onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $list->_id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span>Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
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

