<?php
	session_start();
	include "process/config.php";
	$id = $_POST["id"];
	$uid = $_SESSION["id"];
	$date = date('Y-m-d H:i:s');
	$query = "select clicks from tracker where bannerId = ".$id;
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	$count = 0;
	$count = $row["clicks"];
	$count++;
	$query = "update tracker set clicks = ".$count." where bannerId = ".$id;
	mysqli_query($con,$query);
	$query = "insert into `bannerhistory` (`uid`,`bannerId`,`clickedOn`) 
			  values ($uid,$id,'$date')";
	mysqli_query($con,$query);
	/*function logit($value) {
		$fp = fopen('click.txt', 'a');
		fwrite($fp,$value. "\n");
		fclose($fp);
	}
	$spent = $count;
	logit($spent);*/
?>