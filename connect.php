<?php

$connect=@mysql_connect("localhost", "root", "") or die("error in database".mysql_error());

$select=@mysql_select_db("cashbook", $connect)or die("Could not access data".mysql_error());


?>