<?php
	session_start();
	$logval=$_SESSION["logval"];
	if($logval==0){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Research Grant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-8 panell text-center">

					<div class="row" style="background-color: white; padding: 2%;font-weight: bold;">
					</div>
					 <div class="row">
					 	<div class="col-sm-12">
					 		<div class="row">
					 	<div class="col-sm-12 login-head text-left">
					 		<span class="h2 qsand">Manage Research Grants</span>
					 	</div>
					 </div>
					 <div class="row">
					 	<div class="col-sm-4" style="padding: 5%;">
					 		<img src="img/availableRg.png" width="70%"><br>
					 		<a href="#"><button class="btn qsand" style="font-size: 14px;">Available R.G.</button></a>
					 	</div>
					 	<div class="col-sm-4" style="padding: 5%">
					 		<img src="img/recRg.png" width="70%"><br>
					 		<a href="recRg.php"><button class="btn qsand" style="font-size: 14px;">Recipents of R.G.</button></a>
					 	</div>

					 	<div class="col-sm-4" style="padding: 5%">
					 		<img src="img/ugProjects.png" width="70%"><br>
					 		<a href="manageUgp.php"><button class="btn qsand" style="font-size: 14px;">Undergoing Projects</button></a>
					 	</div>
					 </div>
					 	</div>
					 </div>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
	</div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="index.php" class="plus" title="Logout" style="text-decoration: none; color: #eee"><i class="fa fa-power-off" aria-hidden="true"></i></a>
  </div>
</body>
</html>