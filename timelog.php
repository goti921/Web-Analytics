<?php
	session_start();
	include "process/config.php";
	function logit($value) {
		$fp = fopen('log.txt', 'a');
		fwrite($fp,$value. "\n");
		fclose($fp);
	}
	$spent = $_POST['spent'];
	$pageNo = $_POST['pageNo'];
	$end = $_POST['start'] + $_POST['spent'];
	$start = $_POST['start'];
	$uid = $_SESSION['id'];
	$seconds = $start / 1000;
	$sdate = date("Y-m-d H:i:s",$seconds);
	$seconds = $end / 1000;
	$edate = date("Y-m-d H:i:s",$seconds);
	$query = "INSERT INTO `userbehavior`(`uid`, `pageNo`, `enteredAt`, `leftAt`, `timeSpent`) VALUES ($uid,$pageNo,'$sdate','$edate',$spent)";
	mysqli_query($con,$query);
	$query = "select `timeSpent` from `page` where `pageNo`=$pageNo";
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	$timeSpent = $row["timeSpent"];
	$timeSpent += $spent;
	$query = "update `page` set `timeSpent`=$timeSpent where `pageNo`=$pageNo";
	mysqli_query($con,$query);
	$spent = $_POST['pageNo'] . ",". $_POST['spent'].",".$sdate.",".$edate.",".$start.",".$end.",".$spent.",".$uid;
	logit($spent);
?>