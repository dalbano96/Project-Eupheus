<!--
	File: index.html
	Welcome page of website
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
	<!--jumbotron-->
	<div class="jumbotron">
		<div class="container text-center">
			<h1>University of Hawaii at Hilo</h1>
			<h2>Keep Track of Your Application Status</h2>
			<p>Login with an existing account or register</p>
			<div class="btn-group"></div>
					<a href="app/login/login.php" class="btn btn-lag btn-danger"> Login </a>
					<a href="app/login/register.php" class="btn btn-lag btn-danger"> Create an account</a>	
		</div>
		<div class="jumbotron jumbotron-right">
			<div class="btn-group"></div>
		</div> <!-- end jubmotron-right -->
	</div><!--end jumbotron-->
		
</div><!--end container-->

</body>
</html>
