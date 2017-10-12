<?php
error_reporting(0);
$msg=$_REQUEST["msg"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | News | Add News</title>
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
			<div class="col-sm-12 text-center" style="padding-top: 5%;">
				<span class="h2 qsand">Add News</span><br><br>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-4">
							
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12 add-news">
									<form action="code.php?act=2" method="post">
								<textarea placeholder="News..." class="inp qsand" rows="10" cols="20" style="height: 70px;background: #fff; resize: none;" name="news" required=""></textarea><br>
								<input type="date" class="inp qsand" name="date" style="background: rgba(254,254,254,1);" placeholder="date" required=""><br><br>
								<input type="radio" name="status" checked="" value="enable"> <span class="qsand">Enable</span> <input type="radio" name="status" value="disable"> <span class="qsand">Disable</span> <br>
								<button class="btn qsand">Add News</button>
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