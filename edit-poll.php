<?php

    session_start();
    require 'includes/dbh.inc.php';
    define('TITLE',"Event | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $PollId = $_GET['id'];
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

                    $sql = "SELECT * FROM polls WHERE id = '$PollId';";

                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        $row = mysqli_fetch_assoc($result);
                    }
                    
                ?>
           
           <form action="Poll-Insert.php" method='POST'
                    style="padding: 0 30px 0 30px;">
               
  
               

                    <div class="px-5">
                        <div class="text-center px-5">

                            <input class="form-control" type="hidden" id="id" name="id" 
                            placeholder="Your Poll ID" value='<?php echo $row['id']; ?>'> 
                           
                            

                          <label for="headline">Poll Name</label>
                            <input class="form-control" type="text" id="subject" name="subject" 
                            placeholder="Your Poll Subject" value='<?php echo ucwords($row['subject']) ?>'>
               

                    

                            <label for="edit-bio">Poll Description</label>
                            <textarea class="form-control" id="Article_editor" rows="10" name="description" maxlength="5000"
                            placeholder="Your Poll Description" 
                            ><?php echo ucwords($row['poll_desc']) ?></textarea>

                    


                            <br><input type="submit" class="btn btn-primary" name="update" value="UPDATE DATA">
                  
                            </form>
                             
                            <br><br>
                            
                           
                            

                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div> 


<?php include 'includes/footer.php'; ?>
        

        
        <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <script src="js/flipclock.js"></script>	
        </script>
        <script src ="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('Article_editor')
        </script>

        
    </body>
</html>