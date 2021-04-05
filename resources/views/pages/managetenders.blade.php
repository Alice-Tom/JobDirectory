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
            <h2 class="mb-5" >Manage Tenders</h2>
          </div>
          @if(Session::has('managetenders'))
            <div class="alert alert-success" role="alert">
              {{Session::get('managetenders')}}
            </div>
          @endif
        <table  class="table table-hover" >
            <thead>

              <tr>
                
                <th scope="col">Tender Title</th>
                <th scope="col">Company Name</th>
                <th scope="col">Tender Description</th>
                <th scope="col">File</th>
                <th scope="col">Tender Description</th>
                <th scope="col">Tender Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         
            <tbody>
             
              <tr>
                 @foreach ($tenders as $tenders)  
                <td>{{$tenders->tender_title}}</td>
                <td>{{$tenders->company_name}}</td>
                <td>{{$tenders->tender_description}}</td>
                <td><a href="{{$tenders->file}}" download>{{$tenders->file}}</td></a>
                <td>{{$tenders->tender_location}}</td>
                <td>{{$tenders->tender_type}}</td>
                <td> <button class="button"> <a class="buttona" href="/company/edittender/{{$tenders->id}}">Edit</button></a>
                  <br>
                  <br>  
                  <button class="button2"> <a class="buttona" onclick="return confirm('Are you sure you want to delete {{$tenders->tender_title}} in {{$tenders->company_name}} ?')" href="/company/deletetender/{{$tenders->id}}">Delete</button></a></td>
                 
              </tr>
              @endforeach
                
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
    @include('includes.dashfooter')
  </div> 









    <!-- Right Panel -->




@endsection


