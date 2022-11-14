<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Edit Xumm Add | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';  
?> 
</head>
<body class="justify-content-center">

    <?php include 'includes/navbar.php'; ?>
      <div class="container">
        <div class="row">
<!--            <div class="col-sm-3">
            
                <?php /*include 'includes/profile-card.php';*/ ?>
                
            </div>
  -->
      
    <?php
    $Xumm = $_SESSION['userId'];
    $sql = "select * from users where idUsers = $Xumm";
    $stmt = mysqli_stmt_init($conn);    
    
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('SQL error');
    }
    else
    {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
    }
?>
             
              <form action="XUMMAddUpdate.php" method="POST">
                  <div class="form-group">
                        <label for="XummAdd">Xumm Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Xumm Address" 
                               value="<?php echo $user['XummAdd'] ?>" >
                        <small id="emailHelp" class="form-text text-muted">Insert your Xumm Address</small>
                  </div>
              <input type="submit" class="btn btn-primary" name="submit" value="UPDATE ADD">
                </form>     

          </div>
          <div class="col-sm-1">
            
          </div>
        </div>


      </div> <!-- /container -->


<?php include 'includes/footer.php'; ?>

                            

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        
    </body>
</html>