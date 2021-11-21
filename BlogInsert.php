<?php

session_start();
error_reporting(E_ALL);
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "adqUKjS5Tg31JoZH";
$dBName = "onaid_database";

$conn = new mysqli($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


if(isset($_POST['update']))
{
    $id = $_POST['blog_id'];
    $query = "UPDATE blogs SET blog_title='$_POST[blog_title]', blog_content='$_POST[blog_content]' WHERE blog_id='$_POST[blog_id]'";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>