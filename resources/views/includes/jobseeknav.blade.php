
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
        <div class="container">
          <div class="site-navbar bg-light">
            <div class="py-1">
              <div class="row align-items-center">
                <div class="col-2">
                  <h2 class="mb-0 site-logo"><a href="index.html">Job<strong class="font-weight-bold">Directory</strong> </a></h2>
                </div>
                <div class="col-10">
                  <nav class="site-navigation text-right" role="navigation">
                    <div class="container">
                      <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
                      <ul class="site-menu js-clone-nav d-none d-lg-block">
  
                        {{-- <li><a href="tenderseeker">HOME</a></li> --}}
                        <li><a href="viewjobs">VIEW JOBS</a></li>
                        <li><a href="jobseekprofile">SET PROFILE</a></li>
                        <li><a href="uploadcv">UPLOAD CV</a></li>
  
                     
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <span class="bg-primary text-white py-3 px-4 rounded"><span></span>  {{ __('Logout') }}</span>
                           
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                       
                      </li>
                       
                     
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>