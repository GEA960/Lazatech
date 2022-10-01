<?php

$serverName = "localhost";
$dBUsername = "u488180748_LAZAT3CH";
$dBPassword = "LAZAT3CHPass";
$dBName = "u488180748_LAZAT3CH";

$conn = new mysqli($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


