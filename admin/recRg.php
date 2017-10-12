<?php
session_start();
$logval=$_SESSION["logval"];
if($logval==0){
		header("Location: index.php");
	}
error_reporting(0);
$msg=$_REQUEST["msg"];
$conn=mysqli_connect("localhost","root","","rssdi");
$query="select * from rec_rg";
$res=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Recipents of Research Grant</title>
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
						<div class="col-sm-12 container"><br>
							<span class="qsand h2">Recipents of Research Grant</span><br><br>
							
						<div class="col-sm-12" style="overflow-x: scroll;">
							<table class="table table-responsive">
							<thead class="thead">
								<tr>
									<th>S.no.</th>
									<th>Title</th>
									<th>Author</th>
									<th>Institute</th>
									<th>City</th>
									<th>Year</th>
									<th colspan="2">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while($data=mysqli_fetch_array($res)){
									?>
								<tr>
									<td><?php echo $data["sno"]; ?></td>
									<td><?php echo $data["title"]; ?></td>
									<td><?php echo $data["author"]; ?></td>
									<td><?php echo $data["institute"]; ?></td>
									<td><?php echo $data["city"]; ?></td>
									<td><?php echo $data["year"]; ?></td>
									<td><a href="code.php?act=6&sno=<?php echo $data["sno"] ?>"><i class="fa fa-trash" aria-hidden="true"></a></td>
									<td><a href="editRecRg.php?sno=<?php echo $data["sno"] ?>"><i class="fa fa-pencil" aria-hidden="true"></a></td>
								</tr>
								
					<?php
						}
					?>
							</tbody>
						</table>
						</div>
						<?php
								if($msg==1){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #C6FF00;">
											<span class="qsand">Recipent added Successfully!!</span>
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
											<span class="qsand">Recipent Deleted Successfully!!</span>
										</div>
									</div>
									<?php
								}
							?>
							<?php
								if($msg==3){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #F44336;">
											<span class="qsand">Recipent Not Deleted!!</span>
										</div>
									</div>
									<?php
								}
							?>
							<?php
								if($msg==4){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #C6FF00;">
											<span class="qsand">Recipent Updated Successfully!!</span>
										</div>
									</div>
									<?php
								}
							?>

							<?php
								if($msg==5){
									?>
									<div class="row">
										<div class="col-sm-12 ribnn" style="background: #F44336;">
											<span class="qsand">Recipent Not Updated!!</span>
										</div>
									</div>
									<?php
								}
							?>
					</div>
						</div>
					</div>
					
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
	</div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" style="margin-bottom: 80px;">
    <a href="addRecRg.php" class="plus" title="Add News" style="text-decoration: none; color: #eee"><i class="fa fa-plus" aria-hidden="true"></i></a>
  </div>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
    <a href="index.php" class="plus" title="Logout" style="text-decoration: none; color: #eee"><i class="fa fa-power-off" aria-hidden="true"></i></a>
  </div>
</body>
</html>