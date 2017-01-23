<!--
	File: index.php
	Index page for home directory
-->

<?php
	// Checks if user is logged in
	session_start();
	if (!isset($_SESSION['valid'])) {
	 	header("Location: ../app/unauthorized_error.php");
	 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Team404</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-light" style="background-color: #B74934;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">University of Hawaii at Hilo</a>
			</div><!-- end navbar-header -->

	<!-- main menu items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.html">Home</a>
					</li>
					 <!--drop down menu -->

					 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">MyUH <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://myuh.hawaii.edu/cp/home/displaylogin">MyUH Portal</a></li>
								<li><a href="https://laulima.hawaii.edu/portal">Laulima</a></li>
								<li><a href="https://www.sis.hawaii.edu/uhdad/avail.classes?i=HIL">Class Schedule</a></li>
							</ul>
					 </li>

					 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://hilo.hawaii.edu/admissions/">Admission Office</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/apply.php">Apply Now</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/forms/request_info.php">Request Information</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/forms/">Admission Forms</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/international_instructions.php">International Students</a></li>
							</ul>
					 </li>
					 <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://hilo.hawaii.edu/catalog/degrees-and-certificates-offered.html">Majors/Degree Offered</a></li>
								<li><a href="https://www.sis.hawaii.edu/uhdad/avail.classes?i=HIL">Classes Offered</a></li>
								<li><a href="https://hilo.hawaii.edu/registrar/currentterm.php">Admission Calender</a></li>
							</ul>
					 </li>
					<li>
						<a href="https://hilo.hawaii.edu/directory/view/174">Contact Us </a>
							<!--<ul class="dropdown-menu">
								<li><a href="#">Phone</a></li>
								<li><a href="#">Email</a></li>
								<li><a href="#">Set Appointment</a></li>
							</ul>-->
					</li>
				</ul>
				<!-- right align -->
				<ul class="nav navbar-right">
					<li><a href="../../app/login/logout.php">Logout</a></li>
				</ul>
		</div> <!--end mainNavBar-->
	</nav> <!--end navbar-->

	<!--jumbotron-->
	<div class="jumbotron">
		<div class="container text-center">
		<h1>UH Hilo Graduate Student Application</h1>
		<p>Graduate students can now apply online to study at University of Hawaii at Hilo. Folllow all the instructions given in this site and submit your application.</p>
			<div class="btn-group-vertical">
				<a href="status.php" class="btn btn-lag btn-danger"> Check Your Status</a>
				<a href="https://hilo.hawaii.edu/registrar/documents/GradAppInstructions_Dec2015.pdf" class="btn btn-lag btn-danger"> Application Instructions</a>
				<a href="https://hilo.hawaii.edu/academics/graduate/index.php" class="btn btn-lag btn-danger"> Donwload Application Forms</a>
				<a href="https://hilo.hawaii.edu/catalog/graduation-requirements" class="btn btn-lag btn-danger"> Graduate Requirements</a>
			</div>
		</div>
	</div><!-- end jumbotron -->

		<!-- Latest updates/announcements -->
		<div class="col-offset-2">
    	<div class="col-lg-6">
     	 <h4> Latest Announcements </h4>
     	 <p> News and updates will be posted here </p>
    	</div>
    	<div class="col-lg-6">
     	 <h4> Questions and Answers of the frequently asked </h4>
      	<p> Technical and application questions will be posted here </p>
    	</div>
		</div> <!--end col-offset-2 -->
	</div>
</div> <!-- end container -->

	<!--footer-->
	<div class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="container">
				<div class="navbar-text pull-left">
					
						<ul>
							<li>
								<a href="https://hilo.hawaii.edu/admissions/forms/request_info.php">Request Information </a>
							</li>
							<li>
								<a href="https://plus.google.com/115720611169656291881/?prsrc=3">UH Hilo on Google+</a>
							</li>
							<li>
								<a href="https://www.facebook.com/UHHilo">UH Hilo on Facebook</a>
							</li>
							<li>
								<a href="https://www.twitter.com/UHHilo">UH hilo on Twitter</a>
							</li>
						</ul>
					</div><!--end left-->
				<div class="navbar-text pull-center">

						<ul>
							<li>
								<a href="https://hilo.hawaii.edu/studentaffairs/uds/" class="disability">Disability Service</a>
							</li>
							<li>
								<a href="https://hilo.hawaii.edu/social/">Social Media Steam</a>
							</li>
							<li>
								<a href="https://hilo.hawaii.edu/uhh/ehso/EmergencyPreparednessInformaion.php">Emergency Info</a>
							</li>
							<li>
								<a href="https://hilo.hawaii.edu/help/website-policies.php">Website Privacy & Policies</a>
							</li>
						</ul>
				</div>
     			<div class="navbar-text pull-right">
     			</div>
			</div>
	</div>
</div>


</body>
</html>


