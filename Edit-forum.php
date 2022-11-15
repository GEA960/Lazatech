<?php
    error_reporting (E_ALL);
    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Edit-forum | Lazatech");
    
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
            
            
              
          </div>
          <div class="col-sm-11" >
          <?php include 'includes/profile-card.php'; ?>
          </div>

          <div class="col-sm-11" id="user-section">
              
                <?php

                    $sql = "select * from posts, users 
                            where post_id = ? 
                            and posts.post_by = users.idUsers";

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
           
           <form action="ForumInsert.php" method='POST'
                    style="padding: 0 30px 0 30px;">
               
               <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">
              
               <div class="px-5">
                  
               <br><br><br>  
               <?php echo 'Event ID:'; ?>
               <?php echo $row['post_id']; ?>

               <input class="form-control" type="hidden" id="post_id" name="post_id" 
                    placeholder="Your Blog Title" value='<?php echo $row['post_id']; ?>'>
             

                  <br><br><br>  
                  <label for="edit-bio">Response Content</label>
                    <textarea class="form-control" id="post_content" rows="10" name="post_content" maxlength="5000"
                    placeholder="Edit Post Content" 
                    ><?php echo $row['post_content']; ?></textarea>
                  <br><br><br>
                  



                 <br><input type="submit" class="btn btn-primary" name="update" value="UPDATE DATA">
                  
                  </form>
                      
                      <br>
                  
                   </div>
                  
              </div>
              
              
              
          </div>
            
        </div>


      </div> <!-- /container -->

     
<?php include 'includes/footer.php'; ?>



<?php include 'includes/HTML-footer.php'; ?>