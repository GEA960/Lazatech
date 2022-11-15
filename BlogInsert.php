<?php

require 'includes/dbh.inc.php';


if(isset($_POST['update']))
{
    $id = $_POST['blog_id'];

    $BlogTitle = str_replace("'", "''", $_POST['blog_title']);
    $BlogContent = str_replace("'", "''", $_POST['blog_content']);

    $query = "UPDATE blogs SET blog_title='$BlogTitle', blog_content='$BlogContent' WHERE blog_id='$_POST[blog_id]'";
    $query_run = mysqli_query($conn, $query);                                                                 
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>