<?php

    session_start();
    define('TITLE',"Signup Lazatech"); 
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
    
    include 'includes/HTML-head1.php';
?>  
    </head>
    
    <body>


    <section id="cover">
        <div id="cover-caption">
        <?php

    if(isset($_GET['status']))
            {
                if ($_GET['status'] =='loginfailed') {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 90%; margin-left: 3%; size: 5px;"><strong>Your registration is still waiting to be approved.</strong><i> You will receive an email notification  once your account had been approved.</i>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>';
                        
                }
            } 
        ?>
            <div class="container">
                <div class="col-sm-10 offset-sm-1">
                    <div class="leftbox">
                        <img src='img/logo.png' style="width: 30%; height30%">
                    <h5 style="color:black; font-family: Helvetica; font-size: 20px;">Welcome to</h5>
                    <h3 class="lazatech" style="font-family: Verdana; font-size: 50px; text-shadow: 2px 2px 12px #0d0d0d;">Lazatech</h3>
                    <br>
                    <a href="contact.php">
                            <i class="fa fa-envelope fa-2x social-icon" aria-hidden="true"></i>
                        </a>
                           <a href="#">
                            <i class="fa fa-github fa-2x social-icon" aria-hidden="true"></i>
                        </a> 
                    </div>
                    
                    <div class="rightbox">
                        <h3 id="title">Sign In</h3>
                        <?php
                    
                        if(isset($_GET['error']))
                        {
                            if($_GET['error'] == 'emptyfields')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Fill In All The Fields
                                      </div>';
                            }
                            else if($_GET['error'] == 'nouser')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Username does not exist
                                      </div>';
                            }
                            else if ($_GET['error'] == 'wrongpwd')
                            {;
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Wrong password  
                                         <a href="reset-pwd.php" class="alert-link">Forgot Password?</a>
                                      </div>';
                            }
                            else if ($_GET['error'] == 'sqlerror')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Website error. Contact admin to have it fixed
                                      </div>';
                            }
                            
                        }
                        else if(isset($_GET['newpwd']))
                        {
                            if($_GET['newpwd'] == 'passwordupdated')
                            {
                                echo '<div class="alert alert-success" role="alert">
                                        <strong>Password Updated </strong>Login with your new password
                                      </div>';
                            }
                        }
                    ?>
                    <form method="post" action="includes/login.inc.php">
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" id="name" name="mailuid"
                                   placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="password" id="password" name="pwd"
                                   placeholder="Password">
                        </div>

                        <input type="submit" class="btn btn-dark btn-lg mr-1" name="login-submit" value="Continue">
                    </form>
                    <br>
                    <div id="signupbottom">
                        <p>Dont have an account? 
                        <a href="signup.php">Signup</a>
                        </p>
                       
                    </div>
                    
                    
                   <br><br>
                    
                        
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </section>

        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>