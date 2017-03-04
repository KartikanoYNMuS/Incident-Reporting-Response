<?php
session_start();
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("incidentreporting",$cn)  or die("Could connect to Database");
?>
