<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Find People | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


	<link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>
    
    <body style="background: #f1f1f1">

    
        <?php include 'includes/navbar.php'; ?>
        
        <main role="main" class="container">
            <div class="mx-5">
                <div class="d-flex align-items-center p-3 my-3 mx-5 text-white-50 bg-purple rounded shadow-sm">
                    <img class="mr-3" src="img/200pxFinal.png" alt="" width="48" height="48">
                  <div class="lh-100">
                    <h1 class="mb-0 text-white lh-100">Lazatech Users</h1>
                    <small>Spreading Ideas</small>
                  </div>
                </div>

                <div class="my-3 mx-5 p-3 bg-white rounded shadow-sm">
                  <h5 class="border-bottom border-gray pb-2 mb-0">Find People on Lazatech</h5>


                  <?php
                    $sql = "UPDATE users SET userLevel='2' WHERE idUsers=40";

                    if ($conn->query($sql) === TRUE) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }
                    
                    $conn->close();
                    ?>
                     
                  ?>

                      <small class="d-block text-right mt-3">
                          <a href="profile.php" class="btn btn-primary">Go to Profile</a>
                          <a href="message.php" class="btn btn-primary">Go to Inbox</a>
                      </small>


                </div>
            </div>
        </main>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>