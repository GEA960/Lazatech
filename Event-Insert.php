<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['event_id'];
    $query = "UPDATE events, event_info SET events.title='$_POST[title]', events.event_date = '$_POST[edate]', event_info.title='$_POST[title]', event_info.headline='$_POST[headline]', event_info.description='$_POST[description]' WHERE events.event_id='$_POST[event_id]' AND event_info.event='$_POST[event_id]'";
   

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>