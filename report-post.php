<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Report | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    
    include 'includes/HTML-head1.php';
    include 'includes/navbar.php';
?> 

<style>
    body{
        background-color: white;
    }
    #cover{
        background-image: linear-gradient(180deg, #B7FBFF, white);
        background-repeat: no-repeat;
        display: flex;
        background-size: cover;
    }
.rightbox{
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 20px;
    width: 300px;
    height: 400px;
    background-color: rgba(0, 0, 0, 0.6);
}
    input,
    input::-webkit-input-placeholder {
        font-size: 11px;
        line-height: 3;
        color: #d9d9d9;
        font-style: italic;
}
    textarea {
    font-size: 1rem;
    line-height: 1em;
    font-family: 'helvetica';
    resize:none ;
    outline: none;
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 2px;
    width: 240px;
    height: 60px;
    border: none;
    border-bottom: 1px solid #0AFFFA;
    font-family: sans-serif;
    font-size: 15px;
    background-color: transparent;
    transition: 0.2s ease;
    color: white;
    outline: none;
    border-bottom: 1px solid #0AFFFA;
    font-family: sans-serif;
    font-size: 15px;
    background-color: transparent;
    transition: 0.2s ease;
    color: white;
}
textarea::-webkit-input-placeholder {
        font-size: 11px;
        font-style: italic;
        line-height: 2;
        color: #d9d9d9;
        border: none;

}
textarea::-webkit-scrollbar {
    width: 3px;
    background-color: transparent;
    box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
}

textarea::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #249de4;
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}
</style>    
    </head>


    <body>


    <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 offset-sm-1">
                    <div class="leftbox" >
                        <img src='img/logo.png' style="width: 30%; height30%">
                    <h5 style="color:black; font-family: Helvetica; font-size: 20px;">Welcome to</h5>
                    <h3 class="lazatech" style="font-family: Verdana; font-size: 50px; text-shadow: 2px 2px 12px #0d0d0d;">LazaTech</h3>
                    <br>
                    </div>
                    <div class="rightbox">
                        <h3 id="title">Report</h3>
                        
                        <?php

                            if(isset($_GET['error']))
                        {
                            if($_GET['error'] == 'emptyfields')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                       <font size = "2"> <strong>Error: </strong>Fill In All The Fields </font>
                                      </div>';
                            }
                            else if ($_GET['error'] == 'sqlerror')
                            {
                                echo '<h5 class="text-danger">*Website Error: Contact admin to have the issue fixed</h5>';
                            }
                        }?>
                    <form method="post" action="includes/report-post.inc.php">
                        <div class="form-group">
                            <input type="hidden" name="userID" value="<?= $_SESSION['userId']?>">
                            
                            <label class="sr-only">Content's Link</label>
                            <input type="url" id="link" name="link"
                                   placeholder="Paste here the link of the content with violation" style="width:240px">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Short Description</label>
                            <textarea type="text" id="descript" name="descript"
                                   placeholder="Short description of the violation"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Message</label>
                            <textarea type="text" id="message" name="message"
                                   placeholder="Write a message here"></textarea> 
                        </div><br>

                        <input type="submit" class="btn btn-dark btn-lg mr-1" name="report-submit" value="Submit" style="font-style: normal;">
                    </form>
                    <br>
                    
                    
                    <!--<br><br>
                    <div class="position-absolute login-icons">
                        <a href="contact.php">
                            <i class="fa fa-envelope fa-2x social-icon" aria-hidden="true"></i>
                        </a>
                      <!--  <a href="https://github.com/GEA960/OnAid.git">
                            <i class="fa fa-github fa-2x social-icon" aria-hidden="true"></i>
                        </a> -->
                    </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </section>

        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>