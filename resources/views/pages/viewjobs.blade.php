@extends('pages.dash')

@section('content')

   @include('includes.jobseekersidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')

 

    {{-- postedjobs table --}}


  <div class="container">
    <div class="row">
   
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5" >Posted Jobs</h2>
        </div>
       <div class="table-resposivene"> 
      <table  class="table table-hover" >
          <thead>
            <tr>
              <th scope="col">Job Title</th>
              <th scope="col">Company Name</th>
              <th scope="col">Job Location</th>
              <th scope="col">Salary Range</th>
              <th scope="col">Deadline</th>
              <th scope="col">Job Type</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
       
          <tbody>
           
            <tr>
            
        @foreach ($jobs as $jobs) 
              <td>{{$jobs->job_title}}</td>
              <td>{{$jobs->company_name}}</td>
              <td>{{$jobs->job_location}}</td>
              <td>{{$jobs->salary_range}} </td>
              <td>{{$jobs->deadline}}</td>
              <td>{{$jobs->job_type}}</td>
              <td> <button class="button"> <a class="buttona" href="/singlejob/{{$jobs->id}}">View</button></a>
              
            </tr>
            @endforeach
              
          </tbody>
        </table>
      </div>
      </div>
    </div>
  
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>



@endsection


