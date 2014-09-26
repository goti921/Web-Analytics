<?php
	include 'process/config.php';
	$spent = 180262;
	$pageNo = 1;
	$end = 1408359814896;
	$start = 1408359634634;
	$uid = 1;
	$seconds = $start / 1000;
	$sdate = date("d-m-Y H:i:s",$seconds);
	$seconds = $end / 1000;
	$edate = date("d-m-Y H:i:s",$seconds);
	$query = "INSERT INTO `userbehavior`(`uid`, `pageNo`, `enteredAt`, `leftAt`, `timeSpent`) VALUES ($uid,$pageNo,'$sdate','$edate',$spent)";
	$res = mysqli_query($con,$query);
	if($res==false)
		echo "wtf1";
	$query = "select `timeSpent` from `page` where `pageNo`=$pageNo";
	$res = mysqli_query($con,$query);
	if($res==false)
		echo "wtf2";
	$row = mysqli_fetch_assoc($res);
	$timeSpent = $row["timeSpent"];
	$timeSpent += $spent;
	$query = "update `page` set `timeSpent`=$timeSpent where `pageNo`=$pageNo";
	$res = mysqli_query($con,$query);
	if($res==false)
		echo "wtf3";
?>