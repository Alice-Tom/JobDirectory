
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
  
                        <li><a href="viewconsultant">VIEW CONSULTANTS</a>
                        </li>
                        <li class="has-children">
                          <a>Employers</a>
                          <ul class="dropdown arrow-top">
                            <li><a href="postjob">Post Job</a></li>
                            <li><a href="#">View applicants</a></li>
                            <li><a href="new-post.html">Update profile</a></li>
                            <li><a href="#">Manage Jobs</a></li>
                            <li><a href="#">Manage Applicantions</a></li>
                            
  
                          </ul>
                        </li>
  
                        <li class="has-children">
                          <a>Tenderers</a>
                          <ul class="dropdown arrow-top">
                            <li><a href="posttender">Post Tender</a></li>
                            <li><a href="#">View Tender Seekers</a></li>
                            <li><a href="new-post.html">Update Profile</a></li>
                            <li><a href="#">Manage Tenders</a></li>
                            <li><a href="#">Manage Applications</a></li>
                            
  
                          </ul>
                        </li>

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