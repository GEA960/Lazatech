<?php

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
           
           <form action="includes/BlogUpdate.inc.php" method='post' enctype="multipart/form-data"
                    style="padding: 0 30px 0 30px;">

              <label class="btn btn-primary">
                        Change Blog Image <input type="file" id="imgInp" name='bc' hidden>
              </label>
              <img class="blog-cover" id="blah" name='bc' src="uploads/<?php echo $row['blog_img']; ?>">

              
          




              <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">
              
              <div class="px-5">
                  
                  <br><br><br>  
                <label for="headline">Blog Title</label>
                <input class="form-control" type="text" id="headline" name="title" 
                placeholder="Your Blog Title" value='<?php echo $row['blog_title']; ?>'><br>
                  <br><br><br>
                  
                  
                  <label for="edit-bio">Blog Content</label>
                        <textarea class="form-control" id="edit-content" rows="10" name="content" maxlength="5000"
                            placeholder="Edit Blog Content" 
                            ><?php echo $row['blog_content']; ?></textarea>



                 <br><input type="submit" class="btn btn-primary" name="update-blog" value="Update blog">
                  
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