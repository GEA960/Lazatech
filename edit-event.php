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
        $eventId = $_GET['id'];
    }
    else
    {
        header("Location: index.php");
        exit();
    } 
    
    include 'includes/HTML-head.php';
?> 

        <link href="css/flipclock.css" rel="stylesheet">
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

                <div class="col-sm-11" >
                <?php include 'includes/profile-card.php'; ?>
                </div>

                <div class="col-sm-11" id="user-section">

                <?php

                    $sql = "SELECT events.event_id, events.title, event_info.headline, event_info.description
                    FROM events
                    INNER JOIN event_info 
                    ON events.event_id=event_info.event";

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
           
           <form action="Event-Insert.php" method='POST'
                    style="padding: 0 30px 0 30px;">
               
  
               

                    <div class="px-5">
                        <div class="text-center px-5">

                            <br><br><br>
                            
                            <label for="headline">Event ID</label>
                            <input class="form-control" type="text" id="event_id" name="event_id" 
                            placeholder="Your Blog Title" value='<?php echo $row['event_id']; ?>'> 
                           
                            

                            <label for="headline">Event Title</label>
                            <input class="form-control" type="text" id="title" name="title" 
                            placeholder="Your Blog Title" value='<?php echo ucwords($row['title']) ?>'>


                            <label for="headline">Event Headline</label>
                            <input class="form-control" type="text" id="headline" name="headline" 
                            placeholder="Your Event Headline" value='<?php echo ucwords($row['headline']) ?>'>
                  
                            <label for="edit-bio">Event Description</label>
                            <textarea class="form-control" id="description" rows="10" name="description" maxlength="5000"
                            placeholder="Edit Blog Content" 
                            ><?php echo $row['description']; ?></textarea>
                    


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