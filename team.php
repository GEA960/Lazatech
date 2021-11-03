<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | OnAid");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style="background-image: url('img/team-cover.png')">
            <div class="container">
              <h1 class="display-3">The OnAid Creators</h1>
              <h4>The Brains and Brawns behind all this</h4>
              <h1><a href="                                  ">
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </a> &raquo;</h1>
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind OnAid</h3>
              <h2 class="mb-5">The Team</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="https://gea960.github.io/GEA-Portfolio-Website/" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Gabriel Edrian Alvaro</h2>
                      <p class="mb-0 text-white">The Border is Black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/Gab.png" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="                           " target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>aaaaa</h2>
                      <p class="mb-0 text-white">The cooler Anas than the one below</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/   .png" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_KLiK creators/           .php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>ssssssssss</h2>
                      <p class="mb-0 text-white">The border is not black</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/        .png" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_KLiK creators/             .php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>ddddddddd</h2>
                      <p class="mb-0 text-white">Nice</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/       .png" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>