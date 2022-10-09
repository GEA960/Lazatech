<?php

    session_start();
    require 'includes/dbh.inc.php';
    define('TITLE',"Event | OnAid");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $eventId = $_GET['id'];
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

                    $sql = "SELECT polls.id, polls.subject, polls.poll_desc, poll_options.id, poll_options.poll_id, poll_options.name
                    FROM polls
                    INNER JOIN poll_options 
                    ON polls.id=poll_options.poll_id";

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

                            <br><br><br>
                            
                            <label for="headline">Poll ID</label>
                            <input class="form-control" type="text" id="id" name="id" 
                            placeholder="Your Poll ID" value='<?php echo $row['id']; ?>'> 
                           
                            

                            <label for="headline">Poll Name</label>
                            <input class="form-control" type="text" id="subject" name="subject" 
                            placeholder="Your Poll Subject" value='<?php echo ucwords($row['subject']) ?>'>


                            <label for="headline">Poll Options</label>
                            <input class="form-control" type="text" id="name" name="name" 
                            placeholder="Your Poll Options" value='<?php echo ucwords($row['name']) ?>'>
                  

                    


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
        

        
    </body>
</html>