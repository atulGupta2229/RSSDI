<?php
error_reporting(0);
$msg=$_REQUEST["msg"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Research Grant | Add R.G.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".ribnn").delay(3000);
			$(".ribnn").fadeOut(1000);
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center" style="padding-top: 2%;">
				<span class="h2 qsand">Add Recipent of Research Grant</span><br><br>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-4">
							
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12 add-news" style="height: 465px;">
									<form action="code.php?act=5" method="post">
								<input type="text" class="inp qsand" name="title" style="background: rgba(254,254,254,1);" placeholder="Title" required=""><br>
								<input type="text" class="inp qsand" name="author" style="background: rgba(254,254,254,1);" placeholder="Author" required=""><br>
								<input type="text" class="inp qsand" name="institute" style="background: rgba(254,254,254,1);" placeholder="Institute" required=""><br>
								<input type="text" class="inp qsand" name="city" style="background: rgba(254,254,254,1);" placeholder="City" required=""><br>
								<input type="number" min="1990" max="2050" class="inp qsand" name="year" style="background: rgba(254,254,254,1);" placeholder="Year" required=""><br>
								
								<button class="btn qsand">Add</button>
							</form>
								</div>
							</div>
							<?php
								if($msg==1){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn">
											<span class="qsand">News not added!!</span>
										</div>
									</div>
									<?php
								}
							?>
						</div>
						<div class="col-sm-4">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="index.php" class="plus" title="Logout" style="text-decoration: none; color: #eee"><i class="fa fa-power-off" aria-hidden="true"></i></a>
  </div>
</body>
</html>