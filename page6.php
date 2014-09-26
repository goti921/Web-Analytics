<?php
    session_start();
    include "process/config.php";
    include "include/function.php";
    $id = $_SESSION["id"];
    //increase visits in page table
    $pageNo = 6;
    $source = $_GET['source'];
    analytics($pageNo,$source);
?>
<html>
<head>
	<title>Page Six</title>
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
                <div class="large-2 columns">
                    <ul class="side-nav"> 
                        <li><a href="page1.php?source=6">Page One</a></li>  
                        <li><a href="page2.php?source=6">Page Two</a></li> 
                        <li><a href="page3.php?source=6">Page Three</a></li>
                        <li><a href="page4.php?source=6">Page Four</a></li>
                        <li><a href="page5.php?source=6">Page Five</a></li>
                        <li class='active'><a href="page6.php?source=6">Page Six</a></li> 
                        <li><a href="page7.php?source=6">Page Seven</a></li>
                    </ul>
                </div>
                <div class="large-10 columns" style="margin-top: 15px;">
                    <div id="banner">
                        <a href="http://www.google.com" class="adbanner" target="_blank"><img src='image/portfolio-6.jpg' class="large-6 columns" width="200" height="200"></img></a>        
                        <a href="http://www.google.com" class="adbanner" target="_blank"><img src='image/portfolio-7.jpg' class="large-6 columns" width="200" height="200"></img></a>        
                    </div>
                </div>
            </div>
        </section>
        <!--<section>
            <a href="http://www.google.com" target="_blank"><img src='image/minion.jpg' id="banner"></img></a>
        </section>-->
    </div>
    <script>
    	$(document).ready(function(){
            var starttime = (new Date()).getTime();
            $(window).unload(function(){
                $.post('timelog.php', {spent: (new Date()).getTime() - starttime, start: starttime, pageNo: 6});
            });
        });
        $('#banner').on('click', '.adbanner', function(e){
           /* alternatively if the additional parent element is not desired  
              the event can be delegated to the document */

           var elem = this; // to refer to the clicked object
           var index = $(this).index(); // to get the index, this index is 0 based
           index = index + 6;
           //alert('clicked element index: '+index);
           // Ajax call here.
           $.post('click.php', {id: index});
        });
        /*var start;
    	var end;
    	start = new Date();
    	alert(start.getTime()); 
    	var myEvent = window.attachEvent || window.addEventListener;
		var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compitable

        myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
            /*var confirmationMessage = 'Are you sure to leave the page?';  // a space
            (e || window.event).returnValue = confirmationMessage;
            return confirmationMessage;*/
    		/*end = new Date();
            var diff = end.getTime() - start.getTime();
            alert("The start " + start + ". The end " + end + ". The diff " + diff);
        });*/
    	/*$(window).bind("beforeunload",function(){
    		end = new Date();
    		var diff = end.getTime() - start.getTime();
    		alert("The start " + start + ". The end " + end + ". The diff " + diff); 
    	});*/
    </script>
</body>
</html>