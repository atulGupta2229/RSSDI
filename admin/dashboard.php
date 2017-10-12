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
	<title>Admin | Dashboard</title>
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
						<span class="qsand" style="font-size: 20px;">Welcome, 
						<?php 
							$user=$_SESSION["uname"];
							echo $user;
						?>.</span>
					</div>
					 <div class="row">
					 	<div class="col-sm-12">
					 		<div class="row">
					 	<div class="col-sm-12 login-head text-left">
					 		<span class="h2 qsand">Dashboard</span>
					 	</div>
					 </div>
					 <div class="row">
					 	<div class="col-sm-4" style="padding: 5%;">
					 		<img src="img/news.png" width="70%"><br>
					 		<a href="news.php"><button class="btn qsand" style="font-size: 14px;">Manage News</button></a>
					 	</div>
					 	<div class="col-sm-4" style="padding: 5%">
					 		<img src="img/gallery.png" width="70%"><br>
					 		<a href="#"><button class="btn qsand" style="font-size: 14px;">Manage Gallery</button></a>
					 	</div>

					 	<div class="col-sm-4" style="padding: 5%">
					 		<img src="img/researchGrant.png" width="70%"><br>
					 		<a href="manageRg.php"><button class="btn qsand" style="font-size: 14px;">Research Grant</button></a>
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