@extends('pages.dash')

@section('content')

@include('includes.companysidebar')
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

@include('includes.topnav')
   
    
{{-- posted tenders --}}
<div class="site-section bg-light">
    <div class="container">
      <div class="row">
     
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5" >Available Consultants</h2>
          </div>
          
        <table  class="table table-hover" >
            <thead>

              
              <tr>
                
         
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Experience</th>
                <th scope="col">Profession</th>
                <th scope="col">Portfolio</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         
            <tbody>
             
              <tr>
                 @foreach ($consultants as $consultants)  
                <td>{{$consultants->fname}} {{$consultants->lname}}</td>
                <td>{{$consultants->pnumber}}</td>
                <td>{{$consultants->email}}</td>
                <td>{{$consultants->experience}}</td>
                <td>{{$consultants->profession}}</td>
                <td>{{$consultants->portfolio}}</td>
                <td> <button class="button"> <a class="buttona" href="">Request</button></a>
              </tr>
              @endforeach
                
            </tbody>
          </table>
          


          

        </div>
      </div>
    </div>
  






    <!-- Right Panel -->

   @endsection


