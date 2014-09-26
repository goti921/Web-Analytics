<?php
	include "config.php";
	session_start();
	$username = $_POST["uname"];
	$password = $_POST["password"];
	$query = "select * from user where username = '".$username."' and password = '".$password."'";
	$res = mysqli_query($con,$query);
	$count = mysqli_num_rows($res);
	$row = mysqli_fetch_assoc($res);
	$_SESSION["id"] = $row["uid"];
	if($count == 1)
	{
		$level = $row["level"];
		if($level == 1)
			header("location:../page1.php?source=0");
		else
			header("location:../admin.php");
	}		
	else
		header("location:../index.php");
?>