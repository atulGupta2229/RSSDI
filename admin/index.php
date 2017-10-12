<?php
session_start();
$_SESSION["logval"]=0;
error_reporting(0);
$msg=$_REQUEST["msg"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".ribn").delay(4000);
			$(".ribn").fadeOut(1000);
		});
	</script>
</head>
<body background="img/banner2.jpg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4">
					
				</div> 	
				<div class="col-sm-4 login text-center">
					<div class="row">
						<div class="col-sm-12 login-head text-left">
							<span class="h2 qsand" style="color: #f9f9f9">Admin Login</span>
						</div>
					</div>
					<form action="code.php?act=1" method="post">
						<input type="text" name="uid" class="inp qsand" placeholder="Username" required="">
						<input type="password" name="pw" class="inp qsand" placeholder="Password" required="">
						<button type="submit" class="btn qsand">Login</button>
					</form>
					<?php
						if($msg==1){
					?>
					<div class="row">
						<div class="col-sm-12 ribn">
							<span class="qsand">Wrong username or password!</span>
						</div>
					</div>
				</div>
				<?php
					}
				?>
				<div class="col-sm-4">
					
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-12 ftr text-center">
				<span class="qsand">&copy; RSSDI, 2017</span>
			</div>
		</div>
</body>
</html>