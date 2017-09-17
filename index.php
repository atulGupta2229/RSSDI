<?php
/*include("connect.php");*/
$conn=mysqli_connect("localhost","root","","rssdi");
$query="select * from news";
$res=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Education Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(window).scroll(function(){
				if($(window).width()>480){
				if(this.pageYOffset>=60){
					$("#nav").attr("style","height:60px; background: rgba(63,81,181, 1);");
					$("#heading").attr("style","margin-top: 10px;");
					$("li").attr("style","padding: 18px 9px 22px 9px;");
				}
				if(this.pageYOffset<60){
					$("#nav").attr("style","height:80px");
					$("#heading").attr("style","margin-top: 20px;");
					$("li").attr("style","padding: 25px 9px 35px 9px;");
				}
			}
			});
		});
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12" id="nav">
			<div id="heading">
				<span class="hd">RSSDI U.P. Chapter</span>
			</div>
			<div class="menu">
				<ul>
					<a href="index.php">
						<li class="active">
							Home
						</li>
					</a>
					<a href="membership.php">
						<li>
						Membership
					</li>
					</a>
					<a href="researchgrant.php">
						<li>
							Research Grant
						</li>
					</a>
					<a href="gallery.php">
						<li>
							gallery
						</li>
					</a>
					<li>
						about us
					</li>
					<li>
						contact us
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 banner" >
			<center style="padding-top: 160px">
				<img src="assets/images/RSSDI.png" width="15%" style="box-shadow: 2px 2px 10px #333; border-radius: 100%;">
				<br><br>
				<span class="banner-text">
					Research Society for the Study of Diabetes in India
				</span>
			</center>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" style="padding-top: 0.4%;background: rgba(63,81,181, 1);color: #fff;">
			<marquee scrollamount="7">
				<span><i class="fa fa-stethoscope" aria-hidden="true"></i> Welcome to RSSDI, U.P. Chapter</span>
			</marquee>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 links text-center" style="padding: 2%;">
			<span style="font-size: 25px;">Links to RSSDI National Chapter & other Chapters</span><br>
			<br>
			<div class="row">
				<div class="col-sm-12 text-center">		
							<div class="col-sm-3 link-img">
								<img src="assets/images/delhi.jpg" width="180px" class="img-responsive img-circle" style="display: inline-block; margin-left: 1%; margin-right: 1%;">
								<div class="link" style="margin-top: -60px; margin-bottom: 70px;">
									<span style="position: relative; z-index: 999;"><a href="http://www.rssdidelhi.com/rssdi2016/
" target="blank">RSSDI Delhi</a></span>
								</div>
							</div>
							<div class="col-sm-3 link-img">
								<img src="assets/images/wb.jpg" width="180px" class="img-responsive img-circle" style="display: inline-block; margin-left: 1%; margin-right: 1%">
								<div class="link" style="margin-top: -60px; margin-bottom: 70px;">
									<span style="position: relative; z-index: 999;"><a href="http://www.rssdiwb.org
" target="blank">RSSDI West Bengal</a></span>
								</div>
							</div>
							
							<div class="col-sm-3 link-img">
								<img src="assets/images/orissa.jpg" width="180px" class="img-responsive img-circle" style="display: inline-block; margin-left: 1%; margin-right: 1%">
								<div class="link" style="margin-top: -60px; margin-bottom: 70px;">
									<span style="position: relative; z-index: 999;"><a href="http://rssdiodisha.com/
" target="blank">RSSDI Odisha</a></span>
								</div>
							</div>

							<div class="col-sm-3 link-img">
								<img src="assets/images/aurangabad.jpg" width="180px" class="img-responsive img-circle" style="display: inline-block; margin-left: 1%; margin-right: 1%">
								<div class="link" style="margin-top: -60px; margin-bottom: 70px;">
									<span style="position: relative; z-index: 999;"><a href="http://www.rssdiaurangabad.com
" target="blank">RSSDI Aurangabad</a></span>
								</div>
							</div>
				</div> 
			</div>
		</div> 
	</div>

	<div class="row msg">
		<div class="col-sm-12">
			<div class="col-sm-1">
				
			</div>
			<div class="col-sm-10">
				<div class="msg-box">
				<span class="h1" style="color: #333">News</span><br><br>
					<center>
						<div class="news">
								<?php
								while($data=mysqli_fetch_array($res)){
								?>
								<div class="headline col-sm-12">
								<div style="float: left;width: 50%;">
									<?php
										echo $data["newsdata"];
									?>
								</div>
								<div style="float: left;width: 50%;">
									<?php
										echo $data["date"];
									?>
								</div>
								</div>
								<?php
								}
								?>
								
						</div>
					</center>
				</div>
			</div>
			<div class="col-sm-1">
				
			</div>
		</div>
	</div>
	<div class="row find-us">
		<div class="col-sm-12">
			<div class="col-sm-4" style="padding-top: 50px;">
				<span class="h2">RSSDI, U.P. Chapter</span><br><br>
				<p>
					Lucknow ,UP<br>
					Postcode/zip<br>
					Tel: 0522-xxxxxxx<br>
					Email:dev.xxx-xxx@gmail.com
				</p>
				<br>
				<p>
					<span class="h2">Follow us:</span><br>
				<span class="social-icon">
					<i class="fa fa-google-plus-square" aria-hidden="true"></i>
				</span>
				<span class="social-icon">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
				</span>
				<span class="social-icon">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</span>
				<span class="social-icon">
					<i class="fa fa-whatsapp" aria-hidden="true"></i>
				</span>
				</p>
			</div>
			<div class="col-sm-2 text-center">
				
			</div>
			<div class="col-sm-6" style="">
				<iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAcpfxjqVr2xkI92qJ_Ypmd5gZpvOWP3Qw&q=RSSDI,+Lucknow,+Uttar+pradesh" height="300" width="100%"></iframe>
			</div>
		</div>
	</div>
	<div class="row ftr">
		<div class="col-sm-12" style="padding-top: 15px;">
			<div class="text-left" style="float: left;" >
				<span style="font-size: 10px;">&copy; 2017 RSSDI | U.P. Chapter</span>
			</div>
			<div class="text-right" style="float: right;" >
				<span style="font-size: 10px;">Designed and Developed by <a href="#">K.J. Digitals</a></span>
			</div>
		</div>
	</div>
</div>
</body>
</html>