@extends('pages.main')
@section('content')
    
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    @include('includes.about')
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">About Us</h2>
        <p class="mb-0 unit-6"> <span>Who we are</span></p>
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

            <p class="mb-4 h5 font-italic lineheight1-5">We're the perfect destination for companies looking for the best candidates and; for candidates to search for jobs and tenders, and build a better career. With us, you reach candidates, employers and tenderers everywhere! </p>
           
           
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <!-- <div class="col-md-7 text-center"> -->
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
              <h2 class="mb-5">The Team</h2>
              
            </div>
            
          <!-- </div> -->
        
        </div>
        <div class="row team">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="100">
            <a href="#" class="person">
              <img src="images/person_4.jpg" alt="Image placeholder">
              <h2>Habil Raphael</h2>
              <p>Developer</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="200">
            <a href="#" class="person">
              <img src="images/person_2.jpg" alt="Image placeholder">
              <h2>Alice Tom</h2>
              <p>Developer</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="300">
            <a href="#" class="person">
              <img src="images/person_3.jpg" alt="Image placeholder">
              <h2>Stan Lee</h2>
              <p>SYstem Analyst</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="400">
            <a href="#" class="person">
              <img src="images/person_4.jpg" alt="Image placeholder">
              <h2>Valence</h2>
              <p>Project Manager</p>
            </a>
          </div>
        
        </div>
      </div>
    </div>
    <!-- END section -->

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Most people ask what is the name of the company they are registering to. Mske sure you know the name of the company that you are applying to as a candidate. </p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>The pay of a particular job deoends on the employer and how you decide to negotiate with one another</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>For you to be able to apply for a job, post a job or ist a tender; ofcourse you need to register. This allows the user to be able to acces different functionalities available in the system.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>In case of any problem, go to "CONTACT" on the navigation bar and contact our support group. </p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>

    


    @include('includes.footer')
   
  </div>
  @endsection