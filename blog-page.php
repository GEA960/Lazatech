<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Blog | OnAid");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $blogId = $_GET['id'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }
    
    include 'includes/HTML-head.php'; 
?> 
   <style>
     .iframe-container{
         position: relative;
         width: 100%;
         padding-bottom: 56.25%;
         height: 0;
     }  
     .iframe-container iframe{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
     }
   </style>
   
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            
            
              
          </div>
<!-- Social Share Kit CSS -->
<link rel="stylesheet" href="../social-share-kit/dist/css/social-share-kit.css" type="text/css">
<!-- Social Share Kit JS -->
<script type="text/javascript" src="../social-share-kit/dist/js/social-share-kit.js"></script>

<div class="col-sm-11" >
<?php include 'includes/profile-card.php'; ?>
</div>
          <div class="col-sm-11" id="user-section">
              
                <?php

                    $sql = "select * from blogs, users 
                            where blog_id = ? 
                            and blogs.blog_by = users.idUsers";

                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $blogId);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        $row = mysqli_fetch_assoc($result);
                    }
                    
                ?>
              
              <img class="blog-cover" src="uploads/<?php echo $row['blog_img']; ?>">
    <?php          
   
   if ($_SESSION['userLevel'] == 1 || $_SESSION['userId'] == $row['blog_by'])
             { echo '<a href="edit-blog.php?id= '.$row['blog_id'].' ">
                <i class="fa fa-pencil fa-2x edit-blog" aria-hidden="true"></i>
              </a>';
              
             }
             ?>
              <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">
              
              <div class="px-5">
                  
                  <br><br><br>
                  
                  <h1><?php echo ucwords($row['blog_title']) ?></h1>
                  <br><br><br>
                  
                  <p> <?php echo $row['blog_content'] ?><p> 
                  
                  <div class="blog-likes pr-1 pt-5">
                      
                      <h3>
                            <a href="includes/blog-vote.inc.php?blog=<?php echo $row['blog_id']; ?>" >
                                <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            </a>  
                            <?php echo $row['blog_votes']; ?>
                      </h3>
                      <br>
                      <p class="text-muted">Author: <?php echo ucwords($row['uidUsers']); ?></p>
                      <?php
              if ($_SESSION['userLevel'] == 1 || $_SESSION['userId'] == $row['blog_by'])
                      {
                      echo '<a href="includes/delete-blog.php?id='.$row['blog_id'].'&page=blogs" >
                      <i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
                      </a>
                      </span>';
                      }

                      ?>
                    <!--Disquss script-->
                    <div id="disqus_thread"></div>
                    
                    <script>
                     /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://onaid.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                         })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div> 


                        <!--Social Share script-->
                <h3 class="page-header">Share this blog!</h3>

                <div class="ssk-group ssk-xs">
                    <a href="" class="ssk ssk-facebook"></a>
                    <a href="" class="ssk ssk-twitter"></a>
                    <a href="" class="ssk ssk-google-plus"></a>
                    <a href="" class="ssk ssk-pinterest"></a>
                    <a href="" class="ssk ssk-tumblr"></a>
                    <a href="" class="ssk ssk-linkedin"></a>
                    <a href="" class="ssk ssk-vk"></a>
                    <a href="" class="ssk ssk-email"></a>
              
                   </div>
                  
              </div>
              
              
              
          </div>
            
        </div>


      </div> <!-- /container -->

      <script type="text/javascript">
        SocialShareKit.init();
      </script>
      <script type="text/javascript">
      SocialShareKit.init({ forceInit: true });
      </script>
      <script type="text/javascript">
      SocialShareKit.init({ reinitialize: true });
      </script>
      
<?php include 'includes/footer.php'; ?>
<?php include 'includes/HTML-footer.php'; ?> 