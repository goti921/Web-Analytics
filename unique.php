<?php
    include "process/config.php";
?>
<html>
<head>
	<title>Admin Page</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/foundation.min.css" />
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
</head>
<body>
	<div class="container" >
        <header >
            <div style="background-color: #000; padding: 7px 15px 15px 15px; color: #fff; font-size: 25px; width: 100%;">
                Dummy Site | <small>Analytics 101</small>
                <span class="right">
                    <a href="logout.php" class="tiny button" >Logout</a>
                </span>
            </div>
        </header>
        <section>
            <div class="row">
                <div class="large-4 columns">
                    <ul class="side-nav"> 
                        <li><a href="admin.php">Users</a></li> 
                        <li><a href="behavior.php">User Behavior</a></li> 
                        <li><a href="page.php">Page Info</a></li> 
                        <li class='active'><a href="unique.php">Unique Visitors</a></li>
                        <li><a href="banner.php">Banner Info</a></li>
                        <li><a href="history.php">Banner History</a></li> 
                        <li><a href="migration.php">Migration Flow</a></li>
                    </ul>
                </div>
                <div class="large-8 columns" style="margin-top:20px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Page N0</th>
                                <th>Uid</th>
                                <th>Visited On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "select * from `unique`";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    echo "<tr><td>".$row['pageNo']."</td><td>".$row['uid']."</td><td>".$row['visitedOn']."</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>