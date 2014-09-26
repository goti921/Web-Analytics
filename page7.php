<?php
    session_start();
    include "process/config.php";
    include "include/function.php";
    $id = $_SESSION["id"];
    //increase visits in page table
    $pageNo = 7;
    $source = $_GET['source'];
    analytics($pageNo,$source);
?>
<html>
<head>
    <title>Page Seven</title>
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
                        <li><a href="page1.php?source=7">Page One</a></li>  
                        <li><a href="page2.php?source=7">Page Two</a></li> 
                        <li><a href="page3.php?source=7">Page Three</a></li>
                        <li><a href="page4.php?source=7">Page Four</a></li>
                        <li><a href="page5.php?source=7">Page Five</a></li>
                        <li><a href="page6.php?source=7">Page Six</a></li> 
                        <li class='active'><a href="page7.php?source=7">Page Seven</a></li>
                    </ul>
                </div>
                <div class="large-10 columns" style="margin-top: 15px;">
                    <div class="flex-video">
                        <iframe width="420" height="315" src="//www.youtube.com/embed/mm78xlsADgc" frameborder="0" allowfullscreen></iframe>                    
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
                $.post('timelog.php', {spent: (new Date()).getTime() - starttime, start: starttime, pageNo: 7});
            });
            $("#banner").click(function(){
                $.post('click.php', {id: 1});
            });
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