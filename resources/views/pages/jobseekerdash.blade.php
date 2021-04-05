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
  



@endsection


