<?php
$con= mysqli_connect("localhost","root","","OnAid_Database") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Manila');
//OnAid.com

?>