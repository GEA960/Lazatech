<?php
	if (isset($_POST['add-admin']))
    {
    
        require 'dbh.inc.php';
        session_start();

        $id = $_POST['usersID'];
        $admin = "UPDATE users set userLevel = 2 where idUsers = '$id'";
        $query_run = mysqli_query($conn, $admin);                                                                 
        
        if($query_run){
            echo '<script type="text/javascript"> alert("Data Updated") </script>';
            header("Location: ../admin.php");
            exit();
        }
        else{
            echo $id;
        }

    }



	if (isset($_POST['delete-admin']))
    {
        
        require 'dbh.inc.php';
        session_start();

        $id = $_POST['usersID'];
        $admin = "UPDATE users set userLevel = 0 where idUsers = '$id'";
        $query_run = mysqli_query($conn, $admin);                                                                 
        
        if($query_run){
            echo '<script type="text/javascript"> alert("Data Updated") </script>';
            header("Location: ../admin.php");
            exit();
        }
        else{
            echo '<script type="text/javascript"> alert("Data NOT Updated") </script>';
        }

    }
?>