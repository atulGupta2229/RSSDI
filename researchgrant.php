<!DOCTYPE html>
<html>
<head>
	<title>Education Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
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

			$("#arg").click(function(){
				$("#avail-RG").css("display","block");
				$("#recp-RG").css("display","none");
				$("#under-pro").css("display","none");
				$(this).addClass("active-rg");
				$("#up").removeClass("active-rg");
				$("#rrg").removeClass("active-rg");
			});
			$("#rrg").click(function(){
				$("#avail-RG").css("display","none");
				$("#recp-RG").css("display","block");
				$("#under-pro").css("display","none");
				$(this).addClass("active-rg");
				$("#up").removeClass("active-rg");
				$("#arg").removeClass("active-rg");

			});
			$("#up").click(function(){
				$("#avail-RG").css("display","none");
				$("#recp-RG").css("display","none");
				$("#under-pro").css("display","block");
				$(this).addClass("active-rg");
				$("#rrg").removeClass("active-rg");
				$("#arg").removeClass("active-rg");
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
						<li>
							Home
						</li>
					</a>
					<a href="membership.php">
						<li>
							Membership
						</li>
					</a>
					<a href="researchgrant.php">
						<li class="active">
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
	 
		<div class="row rg-body">
			<div class="col-sm-12">
				<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-10 rgnav">
					<div class="row">
							<div class="col-sm-4 text-center rgnav-tab active-rg" id="arg" style="padding-top: 1.5%">
								<span style="cursor: default;">
									Available Research Grants
								</span>
							</div>
							<div class="col-sm-4 text-center rgnav-tab" id="rrg" style="padding-top: 1.5%">
								<span style="cursor: default;">
									Recipients of Research Grant
								</span>
							</div>
							<div class="col-sm-4 text-center rgnav-tab" id="up" style="padding-top: 1.5%">
								<span style="cursor: default;">
									Undergoing Projects
								</span>
							</div>
				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-1">
							
						</div>
						<div class="col-sm-10 rg-content">
							<div id="avail-RG" style="display: block;">
								dfsdfd
							</div>
							<div id="recp-RG" style="display: none;">
								wferfg
							</div>
							<div id="under-pro" style="display: none;">
								dgsfg
							</div>
						</div>
						<div class="col-sm-1">
							
						</div>
					</div>
				</div>
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