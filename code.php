<?php
include(connect.php);
			$query="select * from news";
			$res=mysqli_query($query) or die("error in query!!");
			$data=mysqli_fetch_array($res);





$flag=$_REQUEST['flag'];
switch($flag)
{




}






?>