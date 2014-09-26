<?php
    session_start();
    include "process/config.php";
    include "include/function.php";
    $id = $_SESSION["id"];
    //increase visits in page table
    $pageNo = 3;
    $source = $_GET['source'];
    analytics($pageNo,$source);

?>
<html>
<head>
	<title>Page Three</title>
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
                        <li><a href="page1.php?source=3">Page One</a></li>  
                        <li><a href="page2.php?source=3">Page Two</a></li> 
                        <li class='active'><a href="page3.php?source=3">Page Three</a></li>
                        <li><a href="page4.php?source=3">Page Four</a></li>
                        <li><a href="page5.php?source=3">Page Five</a></li>
                        <li><a href="page6.php?source=3">Page Six</a></li> 
                        <li><a href="page7.php?source=3">Page Seven</a></li>
                    </ul>
                </div>
                <div class="large-10 columns">
                    <h4 style="margin-top: 10px;">Market Analytics</h4>
                    <p>Marketing Analytics are the measurement and optimisation of your marketing activities. Understanding marketing analytics allows your business to be more efficient and streamlined as well as minimising wasted marketing costs.
                    Marketing Analytics enable you to delve deep into how your marketing activities are performing. You can find out the ROI of every specific marketing channel you use, gauge how many shares, likes and views your Facebook posts are receiving by content type, measure how many signups and conversions an email receives and much more.
                    Unlike Web Analytics, Marketing Analytics enable you to find out how your audience made the decision to actually visit your site. Marketing Analytics go beyond on-site indicators and lean on other tools, offsite metrics, and even offline efforts. They take a "whole-picture" approach to the measurement of your marketing, even allowing you to use the information gained from them to drive more targeted traffic and increase revenue.
                    Web and Marketing Analytics are equally important. Finding where they meet allows you to create marketing "sweet spots" that will allow you to stay ahead of your competitors by tracking every aspect of your business.
                    The travel sector is a notoriously fast-paced and competitive industry, so using analytics like these is more relevant than ever in order to stay ahead of your game.</p>
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
                $.post('timelog.php', {spent: (new Date()).getTime() - starttime, start: starttime, pageNo: 3});
            });
        });
        $('#banner').on('click', '.adbanner', function(e){
           /* alternatively if the additional parent element is not desired  
              the event can be delegated to the document */

           var elem = this; // to refer to the clicked object
           var index = $(this).index(); // to get the index, this index is 0 based
           index++;
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