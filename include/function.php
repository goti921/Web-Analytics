<?php
	function analytics($pageNo,$source)
	{
		global $con,$id;
		$query = "select visits from page where pageNo = ".$pageNo;
	    $res = mysqli_query($con,$query);
	    $row = mysqli_fetch_assoc($res);
	    $visit = $row['visits'];
	    $visit++;
	    $query = "update page set visits = ".$visit." where pageNo = ".$pageNo;
	    mysqli_query($con,$query);
	    //check for unique visitors
	    $query = "select * from `unique` where `pageNo`=$pageNo and `uid`=$id";
	    $res = mysqli_query($con,$query);
	    $count = mysqli_num_rows($res); 
	    if($count == 0)
	    {
	        $date = date('Y-m-d H:i:s');
	        $query = "INSERT INTO `unique` (`pageNo`, `uid`, `visitedOn`) VALUES ($pageNo,$id,'$date')";
	        mysqli_query($con,$query);
	        $query = "select `uniqueVisits` from `page` where pageNo=$pageNo";
	        $res = mysqli_query($con,$query);
	        $row = mysqli_fetch_assoc($res);
	        $count = $row["uniqueVisits"];
	        $count++;
	        //echo "count is ".$count;
	        $query = "UPDATE `page` SET `uniqueVisits`=$count WHERE pageNo=$pageNo";
	        mysqli_query($con,$query);
	    }
	    $query = "insert into `migration` (`source`,`destination`) values ($source,$pageNo)";
	    mysqli_query($con,$query);
	}
?>