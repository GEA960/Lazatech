<?php

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['post_id'];
    $query = "UPDATE posts SET post_content='$_POST[post_content]' WHERE post_id='$_POST[post_id]'";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>