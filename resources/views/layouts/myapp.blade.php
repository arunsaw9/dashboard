<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<head>
    @include('layouts.head')

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body--> 
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->

    @include('layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    
    @include('layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->


    @section('content')



    @show



    @include('layouts.footer')

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 11:13:26 GMT -->
</html>

