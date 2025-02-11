<?php
//Get the page varible - p
$page = $_GET['p'];

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kerry Bicycle Festival 2009 - Go n-éirí an Rothar leat </title>


<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="keywords" content="Kerry Bicycle Festival, cycling, cycle, kerry, bike, fest,  kbf, Tralee, Go n-eiri an Rothar leat  film, art, peal, Family Cycle, Godfried Willem Raes, 2nd Symphony for Singing Bicycles, 2009, clubheadbangbang, " />
<meta name="description" content="Kerry Bicycle Festival 2009 - Go n-éirí an Rothar leat " />
<meta name="abstract" content="Kerry Bicycle Festival 2009 - Go n-éirí an Rothar leat "/>
<meta name="ROBOTS" content="INDEX,FOLLOW"/>

<link rel="shortcut icon" href="images/favicon.ico" >

<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>



<div id="container">


<!--header-->
<? include_once("includes/head.php") ?>

<!--nav-->
<?php include("includes/nav.php"); ?>


<!--Main sect-->
<?php
switch ($page) {
case "about":
    include("about.php");
    break;

case "symphony":
    include("symphony.php");
    break;

case "schedule":
     include("schedule.php");
    break;
case "links":
    include("links.php");
    break;
case "peal":
     include("peal.php");
    break;
case "contact":
     include("contact.php");
    break;
case "volunteer":
     include("volunteer.php");
    break;
case "film":
     include("film.php");
    break;
case "archive":
     include("archive.php");
    break;

case "frame":
     include("frame.php");
    break;

case "support":
     include("support.php");
    break;
case "family_cycle":
     include("family_cycle.php");
    break;

case "news":
     include("news.php");
    break;

case "issues":
     include("issues.php");
    break;

case "symphony":
     include("symphony.php");
    break;


case "press":
     include("press.php");
    break;



default:
    include("main.php");
}
?>


<!--footer-->
<? //include_once("includes/ankle.php") ?> 

<? include_once("includes/foot.php") ?>



<!--added-->
</div>
<!--added-->


</body>
</html>
