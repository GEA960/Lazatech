<?php

session_start();
error_reporting(E_ALL);
require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{

    $query = "UPDATE polls SET polls.subject='$_POST[subject]', polls.poll_desc='$_POST[description]' WHERE polls.id='$_POST[id]'";
   
    

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}


/* if(isset($_POST['update']))
{

    $query = "UPDATE polls SET polls.subject='$_POST[subject]' WHERE polls.id='$_POST[id]'";
   
    

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

if(isset($_POST['update']))
{

    $query = "UPDATE poll_options SET poll_options.name='$_POST[name]' WHERE poll_options.poll_id='$_POST[id]'";
    

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}*/
?>