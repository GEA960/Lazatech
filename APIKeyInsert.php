<?php

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{

    $query = "UPDATE users SET PlagAPIKey='$_POST[api]' WHERE idUsers= 61";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>