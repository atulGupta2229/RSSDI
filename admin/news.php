<?php
error_reporting(0);
$msg=$_REQUEST["msg"];
$conn=mysqli_connect("localhost","root","","rssdi");
$query="select * from news";
$res=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Manage News</title>
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
			<div class="col-sm-12">
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-8 text-center" style="padding-top: 3%;">
					<div class="row">
						<div class="col-sm-12 container" style="border: 2px solid #666;"><br>
							<span class="qsand h1">News</span><br><br>
							<?php
								while($data=mysqli_fetch_array($res)){
									?>

					<div class="row rw">
						<div class="text-center" style="float: left; text-align: center; width: 40%">
							<span class="h4"><?php echo $data["newsdata"]; ?></span>
						</div>
						<div class="text-center" style="float: left; text-align: center;">
							<span class="h4"><?php echo $data["date"]; ?></span>
						</div>
						<div class="text-center" style="float: left; text-align: center;">
							<span class="h4"><?php echo $data["status"]; ?></span>
						</div>
						<div class="text-center" style="float: left; text-align: center;">
							<a title="Delete" href="code.php?act=3&id=<?php echo $data["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title="edit" href="editnews.php?id=<?php echo $data["id"] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						</div>
					</div>
					<?php
						}
					?>
						</div>
					</div>
					<?php
								if($msg==1){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #C6FF00;">
											<span class="qsand">News added Successfully!!</span>
										</div>
									</div>
									<?php
								}
							?>

					<?php
								if($msg==2){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #C6FF00;">
											<span class="qsand">News Updated Successfully!!</span>
										</div>
									</div>
									<?php
								}
							?>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
	</div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" style="margin-bottom: 80px;">
    <a href="addNews.php" class="plus" title="Add News" style="text-decoration: none; color: #eee"><i class="fa fa-plus" aria-hidden="true"></i></a>
  </div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="index.php" class="plus" title="Logout" style="text-decoration: none; color: #eee"><i class="fa fa-power-off" aria-hidden="true"></i></a>
  </div>
</body>
</html>