<!-- CODE COPYRIGHT PASTEGROUP 2015 ALL RIGHTS RESERVED -->
<!-- START Head -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>OpenFDA</title>
    <meta name='description' content='openFDA'>
    <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
    <link rel='stylesheet' type='text/css' href='font/fa.css'>
    <link rel='stylesheet' type='text/css' href='c3.css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel='icon' href='img/favicon.ico' type='image/x-icon'>
    <script src='d3.min.js'></script>
    <script src='c3.js'></script>
    <script src='pretty.js'></script>
    <script src='jquery.js'></script>
    <!--<script src='api-scripts.js'></script>-->
    <script src="//use.typekit.net/jjh7phy.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>
<!-- END Head -->
<!-- START Universal JS -->
<script type='text/javascript'>$(document).ready(function(){ 
    $('.navicon').click(function(){$('.navid').slideToggle();}); 
    $('.navid ul li a').click(function(){$('.navid').slideUp();});
    $('.chosen').css('color','white');
    $('.chosen').css('font-weight','400');

});</script>
<!-- END Universal JS -->
<!-- START Nav HTML -->
<div class='navicon'><div class='n1'></div><div class='n2'></div><div class='n3'></div></div>
<nav>
    <ul>
        <li><a class='logo' href='index.php'><img src='img/openFDA.png'></a></li><li class='drugs-li'>
        <a class = 'drugs'href='drugs.php'>Drugs</a></li><li class='devices-li'>
        <a class='devices' href='drugs.php'>Devices</a></li><li class='fodds-li'>
        <a class='foods' href='drugs.php'>Foods</a></li>
    </ul>
</nav>
<a class='logoRez' href='index.php'><img src='img/openFDA.png'></a>
<div class='navid'>

    <ul>
        <li><a class='drugs'href='drugs.php'>Drugs</a></li>
        <li><a class='devices' href='drugs.php'>Devices</a></li>
        <li><a class='foods' href='drugs.php'>Foods</a></li>
    </ul>
    <i class='fa fa-navicon'></i>
</div>
<!-- END Nav HTML -->