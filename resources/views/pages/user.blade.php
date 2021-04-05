<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Directory</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

   <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
  
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="">Job Directory</a>
            <a class="navbar-brand hidden" href="./">Job Directory</a>
        </div>
  
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="employerdash"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Employer</h3><!-- /.menu-title -->
  
                <li>
                    <a href="postjob"> <i class="menu-icon fa fa-laptop"></i>Post Job</a>
                </li>
  
                <li>
                    <a href="viewapplication"> <i class="menu-icon fa fa-table"></i>View Applicants</a>
                </li>
  
                <li>
                    <a href="companyprofile"> <i class="menu-icon fa fa-th"></i>Update Profile</a>
                </li>
  
                <li>
                  <a href="managejobs"> <i class="menu-icon fa fa-th"></i>Manage Jobs</a>
              </li>
  
              <li>
                <a href="manageapplications"> <i class="menu-icon fa fa-laptop"></i>Manage Applications</a>
            </li>
  
            <h3 class="menu-title">Consultants</h3><!-- /.menu-title -->
    
            <li>
                <a href="posttender"> <i class="menu-icon fa fa-table"></i>View Consultants</a>
            </li>
  
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->
  
  <!-- Left Panel -->
  
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/user.png" alt="User Avatar">
                </a>
  
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
  
       



   

<!--form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size:25px;">{{ __('Post a Job') }}</div>

                <div class="card-body">
                    <form>
                    

                         
                  
                       

                         <!-- company name -->
                        <div class="form-group row">
                            <label for="companyname" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('companyname') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="companyname">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- job location -->
                        <div class="form-group row">
                            <label for="joblocation" class="col-md-4 col-form-label text-md-right">{{ __('Job Location') }}</label>

                            <div class="col-md-6">
                                
                                
                                    <input id="joblocation" type="text" class="form-control @error('joblocation') is-invalid @enderror" name="address" value="{{$user->address }}" required autocomplete="joblocation">

                                @error('joblocation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       







                         <!-- register -->
                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    {{ __('Preview') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>







    <!-- Right Panel -->



