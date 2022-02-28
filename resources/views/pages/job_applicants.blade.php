@extends('pages.dash')

@section('content')

@include('includes.companysidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')

    {{-- postedjobs table --}}
  <div class="container">
    <div class="row">
   
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5" >Job Applicants</h2>
        </div>
        
      <table  class="table table-hover" >
          <thead>
            <tr>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Address</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Job Title</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
       
          <tbody>
            <tr>
        @foreach ($jobs as $jobs) 
              {{-- <td>{{$jobs->first_name}}</td> --}}
              <td>{{$jobs->applicant_id}}</td>
              {{-- <td>{{$jobs->company_name}}</td>
              <td>{{$jobs->job_location}}</td>
              <td>{{$jobs->salary_range}} </td>
              <td>{{$jobs->deadline}}</td>
              <td>{{$jobs->job_type}}</td> --}}
              <td> <button class="button"> <a class="buttona" href="/singlejob/{{$jobs->id}}">View</button></a>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
@endsection


