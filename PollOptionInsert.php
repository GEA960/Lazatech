<?php

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $query = "UPDATE poll_options SET name='$_POST[name]' WHERE id='$_POST[id]'";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>