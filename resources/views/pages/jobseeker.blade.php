@extends('pages.main')
@section('content')
    




    <!-- .site-mobile-menu -->

   
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    @include('includes.jobseeknav');
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Best place to search for Jobs</h2>
        <p class="mb-0 unit-6"> <span></span></p>
      </div>
    </div>

    
    
    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>Why Choose Us</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">More Jobs and Tenders Every Day</h2>
            <p>Find Tenders easily. Connect with other Tenderes on the way</p>
            
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Creative Tenders</h2>
            <p>Find a creative and dedicated consultants. Get help on any IT stuck  </p>
           
          </div>
        </div>
       
      </div>
    </div>


    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                
                  <img src="images/hero_1.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>About Us</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">Job seeking and application is made easier now. With Job Directory you can now apply for jobs and tenders which are posted by different companies and tenderers. </p>
            <p class="mb-4 h5 font-italic lineheight1-5">In need of a consultant? We got that covered too!</p>
           
           
          </div>
        </div>
      </div>
    </div>
    

    

   



    


    @include('includes.jobseeknav')
   
  </div>
  @endsection
