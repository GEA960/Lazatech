

<?php

    session_start();
    include_once 'includes/dbh.inc.php';
    define('TITLE',"Dashboard| Lazatech");

    $companyName = "Franklin's Fine Dining";
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 
    <head>
        <link href="css/list-page.css" rel="stylesheet">
        <link href="css/loader.css" rel="stylesheet">
        
    </head>
    
    <body onload="pageLoad()">
        
        <div id="loader-wrapper">
        <img src='img/logo.png' id='loader-logo'>
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div>
        
        <div id="content" style="display: none">
            
            <?php include 'includes/navbar.php'; ?> 
            
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-3" >

                        <?php include 'includes/profile-card.php'; ?>

                    </div>

                    <div class="col-sm-7" >

                    <h1>Lazatech Plagiarism Checker - Powered by Prepostseo</h1>

<!-- PrepostSEO Plagiarism Checker Widget -->
<script type="text/javascript" src="//www.prepostseo.com/widget.js?"></script><div style="text-align: center; font-size:12px; color:#333;"><p><a href="https://www.prepostseo.com/plagiarism-checker" target="_blank" style="color:#000;">Plagiarism checker</a> provided by <a href="https://www.prepostseo.com/" target="_blank"  style="color:#000;">prepostseo.com</a></p></div>

                    </div>

                    <div class="col-sm-2" -->

                        <div class="text-center p-3 mt-5">
                        <!--    <a href="team.php" target="_blank">
                                <i class="creater-icon fa fa-users fa-5x" aria-hidden="true"></i>
                            </a>
                            <p><br>THE CREATORS</p> -->
                            <a> </a>
                            <p><br></br><br></br><br></br><br></br><br></br></p>
                        </div>

                    
                    </div>
                </div>
            </div>
            
            <?php include 'includes/footer.php'; ?>
        </div>
        

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" ></script>

        <script>
            var myVar;

            function pageLoad() {
              myVar = setTimeout(showPage, 4000);
            }

            function showPage() {
              document.getElementById("loader-wrapper").style.display = "none";
              document.getElementById("content").style.display = "block";
            }
        </script>  
        
    </body>
</html>