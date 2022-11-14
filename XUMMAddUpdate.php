<?php
session_start();
require 'includes/dbh.inc.php';

$Xumm = $_SESSION['userId'];

if(isset($_POST['submit']))
{

    $query = "UPDATE users SET XummAdd='$_POST[address]' WHERE idUsers= $Xumm";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>