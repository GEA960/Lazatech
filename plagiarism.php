<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Profile | OnAId");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $userid = $_GET['id'];
    }
    else
    {
        $userid = $_SESSION['userId'];
    }
    
    $sql = "select * from users where idUsers = ".$userid;
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
    
    include 'includes/HTML-head.php';   
?> 
</head>

<body>

    <?php include 'includes/navbar.php'; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            
              <?php include 'includes/profile-card.php'; ?>
              
          </div>
            
            
          <div class="col-sm-8 text-center" id="user-section">
              
<h1>Plagiarized Checker!</h1>
<p>Welcome to itsourcecode.com free plagiarize checker</p>
<!-- PrepostSEO Plagiarism Checker Widget --><script type="text/javascript" src="//www.prepostseo.com/widget.js?"></script><div style="text-align: center; font-size:12px; color:#333;"><p><a href="https://www.prepostseo.com/plagiarism-checker" target="_blank" style="color:#000;">Plagiarism checker</a> provided by <a href="https://www.prepostseo.com/" target="_blank"  style="color:#000;">prepostseo.com</a></p></div>  

          </div>
          <div class="col-sm-1">
            
          </div>
        </div>


      </div> <!-- /container -->

<?php include 'includes/footer.php'; ?>




<?php include 'includes/HTML-footer.php'; ?>