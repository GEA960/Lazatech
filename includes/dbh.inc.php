<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "onaid_database";

$conn = new mysqli($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


