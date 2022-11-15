<?php
session_start();

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['event_id'];
    
    $EventTitle = str_replace("'", "''", $_POST['title']);
    $EventHeadline = str_replace("'", "''", $_POST['headline']);
    $EventDescription = str_replace("'", "''", $_POST['description']);
    
    $query = "UPDATE events, event_info SET events.title='$EventTitle', events.event_date = '$_POST[edate]', event_info.title='$EventTitle', event_info.headline='$EventHeadline', event_info.description='$EventDescription' WHERE events.event_id='$_POST[event_id]' AND event_info.event='$_POST[event_id]'";
   

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>