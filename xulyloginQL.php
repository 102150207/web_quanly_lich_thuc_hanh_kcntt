<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$user = $_REQUEST['t1'];
	$pass = $_REQUEST['t2'];
	
	if($user == "" || $pass =="")
	{
		header("location:formdangnhapQL.php");
	} else {
		$link  = mysql_connect("localhost","root","l") or die ("Khong the ket noi CSDL");
		//$db_selected = ;
		mysql_select_db("final",$link);
		//$sql = "select * from dangnhalgv";
		$result  = mysql_query("SELECT * FROM dangnhapgl Where username= '$user' and password = '$pass'"); 
		
		if(mysql_num_rows($result) == 0){
			header("location:formdangnhapQL.php");
		}else {
			header("location:qlxemqv.php");
		}
		mysql_free_result($result);
		mysql_close($link);
	}

?>
</body>
</html>

