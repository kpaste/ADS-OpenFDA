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
    <link rel='stylesheet' type='text/css' href='font/!!!.css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel='icon' href='img/favicon.ico' type='image/x-icon'>
    <script src='jquery.js'></script>
</head>
<!-- END Head -->
<!-- START Universal JS -->
<script type='text/javascript'>$(document).ready(function(){ 
    $('.navicon').click(function(){$('.navid').slideToggle();}); 
    $('.navid ul li a').click(function(){$('.navid').slideUp();});
    $('.chosen').css('color','#191919');
    $('.chosen').css('font-family','medium ');
});</script>
<!-- END Universal JS -->
<!-- START Nav HTML -->
<div class='navicon'><div class='n1'></div><div class='n2'></div><div class='n3'></div></div>
<nav>
    <a class='logo' href='index.php'></a>
    <ul>
        <li><a class = 'drugs'href='drugs.php'>DRUGS</a></li>
        <li><a class='devices' href='devices.php'>DEVICES</a></li>
        <li><a class='foods' href='foods.php'>FOODS</a></li>
    </ul>
</nav>
<div class='navid'>
    <ul>
        <li><a class = 'drugs'href='drugs.php'>DRUGS</a></li>
        <li><a class='devices' href='devices.php'>DEVICES</a></li>
        <li><a class='foods' href='foods.php'>FOODS</a></li>
    </ul>
    <i class='fa fa-navicon'></i>
</div>
<!-- END Nav HTML -->