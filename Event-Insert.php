<?php
session_start();

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['event_id'];
    $EventDescription = str_replace("'", "''", $_POST['description']);
    $query = "UPDATE events, event_info SET events.title='$_POST[title]', events.event_date = '$_POST[edate]', event_info.title='$_POST[title]', event_info.headline='$_POST[headline]', event_info.description='$EventDescription' WHERE events.event_id='$_POST[event_id]' AND event_info.event='$_POST[event_id]'";
   

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>