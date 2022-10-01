<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "adqUKjS5Tg31JoZH";
$dBName = "lazatech_database";

$conn = new mysqli($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


