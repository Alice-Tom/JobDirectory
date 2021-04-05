<!-- Header-->
<header id="header" class="header">

  <div class="header-menu">


      <div class="col-sm-7">
         
          <div class="header-left">
              <button class="search-trigger"><i class="fa fa-search"></i></button>
              <div class="form-inline">
                  <form class="search-form">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                      <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                  </form>
              </div>

          </div>
      </div>
      
      <div class="col-sm-5">
          <div class="user-area dropdown float-right">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->username }}   <img class="user-avatar rounded-circle" src="{{asset('images/user.png')}}" alt="User Avatar">
              </a>
             
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>

              <div class="user-menu dropdown-menu">
                  <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                  <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                  <a class="nav-link" href="logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
          </div>

          
     

      </div>
      
  </div>

</header><!-- /header -->
<!-- Header-->

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>