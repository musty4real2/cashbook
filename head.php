<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("connect.php");
include("class.php");
$object=new cash();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<script type="text/javascript" src="tinybox.js"></script>
</head>
<title>Welcome to niger state ministry of finance cash book</title>
<style type="text/css">
.warning{
	color:#F00;
	
	}

</style>

</head>

<body>

<div  id="wrapper">

<div id="head">
<h2 style="position:relative; top:15px; left:70px;">CASH BOOK</h2>
</div>
<center>
<div id="content">
<br/><br/>