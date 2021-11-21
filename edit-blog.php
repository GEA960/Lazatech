<?php
    error_reporting (E_ALL);
    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Edit-Blog | OnAid");
    
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
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            
              <?php include 'includes/profile-card.php'; ?>
              
          </div>
       
          <div class="col-sm-9" id="user-section">
              
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
           
           <form action="BlogInsert.php" method='POST'
                    style="padding: 0 30px 0 30px;">
               
               <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">
              
               <div class="px-5">
                  
               <br><br><br>  
               <label for="headline">Blog ID</label>
               <input class="form-control" type="text" id="blog_id" name="blog_id" 
                    placeholder="Your Blog Title" value='<?php echo $row['blog_id']; ?>'>
             

                  <br><br><br>  
               <label for="headline">Blog Title</label>
               <input class="form-control" type="text" id="blog_title" name="blog_title" 
                    placeholder="Your Blog Title" value='<?php echo $row['blog_title']; ?>'><br>
                  <br><br><br>
                  
                  
                  <label for="edit-bio">Blog Content</label>
                        <textarea class="form-control" id="blog_content" rows="10" name="blog_content" maxlength="5000"
                            placeholder="Edit Blog Content" 
                            ><?php echo $row['blog_content']; ?></textarea>



                 <br><input type="submit" class="btn btn-primary" name="update" value="UPDATE DATA">
                  
                  </form>
                      
                      <br>
                      <p class="text-muted">Author: <?php echo ucwords($row['uidUsers']); ?></p>
                    <div id="disqus_thread"></div>
                  
                   </div>
                  
              </div>
              
              
              
          </div>
            
        </div>


      </div> <!-- /container -->

     
<?php include 'includes/footer.php'; ?>



<?php include 'includes/HTML-footer.php'; ?>