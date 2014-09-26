<html>
<head>
	<title>Login</title>
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
                    <a href="" data-reveal-id="loginModal" class="tiny button" >Login</a>
                </span>
            </div>
        </header>
        <?php include "include/loginModal.php"; ?>
        <div class="row">
        	<div class="large-9 column large-centered">
        		<p style="font-size: 24px; text-align: justify; margin-top: 10px; font-family:'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif">This is a representational website which is developed for the sole purpose of experimentaion and learning. 
        		This application is an attempt to showcase the minimal analytics that can be done:</p> 
        		<ul style="font-size: 20px; font-family:'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif" class="large-10 large-offset-2 columns">
        			<li>Tracking time spent on each webpage.</li>
        			<li>Tracking number of visitors and unique visitors.</li>
        			<li>Tapping the clicks on the ad banner.</li>
        			<li>Analysing the migration flow from one page to another.</li>
        			<li>Frequently vosited pages.</li>
        			<li>Regular users.</li>
        		</ul>
        	</div>
        </div>
	</div>
	<script>
    	$(document).foundation();
    </script>
</body>
</html>