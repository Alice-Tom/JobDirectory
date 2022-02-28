<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css2/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css2/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css2?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
@extends('pages.main')
@section('content')


@include('includes.about')
<br>
<br>
<br>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Registration Form</h2>
			<form action="tenderer" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Username</p>
					<input type="text" name="username" placeholder="" required=""/>
            </div>

           
            
				<div class="gaps">	
				<p>Company Name</p>
					<input type="text" name="cname" placeholder="" required=""/>
                </div>

                <div class="gaps">
                    <p>Email</p>
                            <input type="email" name="email" placeholder="" required="" />
                    </div>
	
                    <div class="gaps">
                        <p>Address</p>
                                <input type="text" name="address" placeholder="" required="" />
                        </div>
			</div>
			<div class="right-agileinfo same">
        
                <div class="gaps">
                    <p>Password</p>		
                        <input type="password" name="password" required="">	
                </div>	

                   
                <div class="gaps">
                    <p>Company profile</p>
                            <textarea name="cprofile" placeholder="" required="" ></textarea>
                    </div>

				
            
				<div class="gaps">
                    <p>Contacts</p>
                            <input type="text" name="contacts" placeholder="" required="" />
                    </div> 

                    
				
			<div class="gaps">
				<p>Role</p>	
					<select class="form-control">
						<option></option>
						<option>Employer</option>
						<option>Tenderer</option>
					
					</select>
			</div>
			
			
			</div>
			<div class="clear"></div>
                         <div> <input type="submit" value="Register">
                          
			</form>
		</div>
   </div>
   
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>
@endsection