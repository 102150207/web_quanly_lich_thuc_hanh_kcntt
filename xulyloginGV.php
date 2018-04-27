<!DOCTYPE HTML>
<?php 
	session_start();
?>
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
		header("location:formdangnhapGV.php");
	} else {
		$link  = mysql_connect("localhost","root","") or die ("Khong the ket noi CSDL");
		//$db_selected = ;
		mysql_select_db("final",$link);
		$sql = "select * from giaovien";
		$result  = mysql_query("SELECT * FROM dangnhapgv Where username= '$user' and password = '$pass'"); 
		
		if(mysql_num_rows($result) == 0){
			header("location:formdangnhapGV.php");
		}else {
			header("location: trangcanhanGV.php?");
			session_start();// Khởi tạo Session
            $_SESSION['id']= $user;
   
		}
		mysql_free_result($result);
		mysql_close($link);
	}

?>
</body>
</html>