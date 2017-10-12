<?php
	$conn=mysqli_connect("localhost","root","","rssdi");
	$action=$_REQUEST["act"];
	switch($action){
		case 1:
				session_start();
				$un=$_POST["uid"];
				$pw=$_POST["pw"];
				$query="select password, name from tbl_admin where username='$un'";
				$res=mysqli_query($conn, $query);
				if($data=mysqli_fetch_array($res)){
					if($pw==$data["password"]){
						$_SESSION["logval"]=1;
						$_SESSION["uname"]=$data["name"];
						header("Location: dashboard.php");
					}
					else{
					$_SESSION["logval"]==0;	
					header("Location: index.php?msg=1");
				}
				}
				else{
					$_SESSION["logval"]==0;
					header("Location: index.php?msg=1");
				}
				break;
		case 2:
				$news=$_POST["news"];
				$date=$_POST["date"];
				$status=$_POST["status"];
				$query="INSERT INTO `news`(`newsdata`, `date`, `status`) VALUES ('$news','$date','$status')";
				$res=mysqli_query($conn, $query);
				if($res){
					header("Location: news.php?msg=1");
				}
				else{
					header("Location: addNews.php?msg=1");
				}
				break;
		case 3:
				$id=$_REQUEST["id"];
				$query="delete from news where id='$id'";
				$res=mysqli_query($conn, $query);
				header("Location: news.php");
				break;
		case 4:
				$id=$_REQUEST["id"];
				$news=$_POST["news"];
				$date=$_POST["date"];
				$status=$_POST["status"];
				$query="update news set newsdata='$news', date='$date', status='$status' where id='$id'";
				$res=mysqli_query($conn, $query);
				if($res){
					header("Location: news.php?msg=2");
				}
				else{
					header("Location: editnews.php?msg=1");
				}
				break;
		case 5:
				$title=$_POST["title"];
				$author=$_POST["author"];
				$institute=$_POST["institute"];
				$city=$_POST["city"];
				$year=$_POST["year"];
				$query="INSERT INTO `rec_rg`(`title`, `author`, `institute`, `city`, `year`) VALUES ('$title','$author','$institute','$city','$year')";
				$res=mysqli_query($conn, $query);
				header("Location: recRg.php?msg=1");
				break;
		case 6:	
				$sno=$_REQUEST["sno"];
				$query="delete from rec_rg where sno='$sno'";
				$res=mysqli_query($conn, $query);
				if($res){
					header("Location: recRg.php?msg=2");
				}
				else{
					header("Location: recRg.php?msg=3");
				}
				break;
		case 7:
				$sno=$_REQUEST["sno"];
				$title=$_POST["title"];
				$author=$_POST["author"];
				$institute=$_POST["institute"];
				$city=$_POST["city"];
				$year=$_POST["year"];
				$query="update rec_rg set title='$title', author='$author', institute='$institute', city='$city', year='$year'";
				$res=mysqli_query($conn, $query);
				if($res){
					header("Location: recRg.php?msg=4");
				}
				else{
					header("Location: recRg.php?msg=5");
				}
		case 8:
				$title=$_POST["title"];
				$date=$_POST["date"];
				$query="INSERT INTO `ug_porjects`(`title`, `date`) VALUES ('$title','$date')";
				if($res=mysqli_query($conn, $query)){
					header("Location: manageUgp.php?msg=1");
				}
				else{
					header("Location: addUpg.php?msg=1");	
				}
				break;
			}

?>