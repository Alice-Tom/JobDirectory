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
    
    @include('includes.contact')
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Contact</h2>
        <p class="mb-0 unit-6"><span>How to reach us</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0">Dar es Salaam <br>  Lufungira</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Times</h2>
              <p class="mb-0">Mondays - Fridays <br>
             8:00am - 5:00pm</p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: info@yoursite.com <br>
            Phone: (123) 3240-345-9348 </p>
          </div>
        </div>
      </div>
    </div>


    


  @include('includes.footer')
  </div>

@endsection