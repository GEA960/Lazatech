<?php 
error_reporting(-1);
		session_start();
	
            include 'includes/navbar.php';

			if (isset($_POST['report-submit'])) {

				require 'dbh.inc.php';


				$link = $_POST['link'];
				$descript = $_POST['descript'];
				$message = $_POST['message'];
				$date = date('Y-m-d');
			    $id = $_POST['userID'];

				if (empty($link) || empty($descript) || empty($message))
				{	

					header("Location: ../report-post.php?error=emptyfields");
					exit();
			    }
			    else
			    {
		                
		                $sql = "insert into reports( report_by, report_date, link, description, message) "
		                        . "values ('$id','$date', '$link', '$descript', '$message' )";

		                $query_run = mysqli_query($conn, $sql);                                                                 
        
        				if($query_run)
		               
		                {
		                    header("Location: ../index.php?=success");
		                    exit();
		                }
		                else
		                {      

		                	header("Location: ../report-post.php?error=sqlerror2");
		                    exit();        
		                      
		                    
		                    
		                }
		            
				}
		
	}

	if (isset($_POST['done']))
    {
        
        require 'dbh.inc.php';
        session_start();

        $id = $_POST['reportID'];
        $admin = "DELETE FROM reports where report_id = '$id'";
        $query_run = mysqli_query($conn, $admin);                                                                 
        
        if($query_run){
            echo '<script type="text/javascript"> alert("Done Successfully!") </script>';
            header("Location: ../admin.php");
            exit();
        }
        else{
            echo '<script type="text/javascript"> alert("Data NOT Updated") </script>';
        }

    }




 ?>