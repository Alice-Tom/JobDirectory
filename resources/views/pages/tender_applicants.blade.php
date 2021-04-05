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
            <h2 class="mb-5" >Tender Applicants</h2>
          </div>
          
        <table  class="table table-hover" >
            <thead>

              
              <tr>
                
         
                <th scope="col">Tender Title</th>
                <th scope="col">Company Name</th>
                <th scope="col">Tender Location</th>
                <th scope="col">File</th>
                <th scope="col">Tender Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         
            <tbody>
             
              <tr>
                 @foreach ($tenders as $tenders)  
                <td>{{$tenders->tender_id}}</td>
                {{-- <td>{{$tenders->company_name}}</td>
                <td>{{$tenders->tender_location}}</td>
                <td><a href="{{$tenders->file}}" download>{{$tenders->file}}</td></a>
                <td>{{$tenders->tender_type}}</td> --}}
                <td> <button class="button"> <a class="buttona" href="/singletender/{{$tenders->id}}">View</button></a>
              </tr>
              @endforeach
                
            </tbody>
          </table>
          


          

        </div>
      </div>
    </div>
  









    @include('includes.dashfooter')


@endsection


