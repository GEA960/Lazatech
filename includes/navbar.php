<?php 
require 'includes/dbh.inc.php';
?>
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="img/200.png" width="40" height="40">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="navbar-nav ml-auto mr-1">
            <li class="nav-item px-3">
                    <a class="nav-link" href="1index.php">
                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                    </a>
            </li> 
           </ul>




              <div class="collapse navbar-collapse justify-content-right" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mr-1">
   

            <?php
            $sql = "select idUsers, uidUsers, userLevel, f_name, l_name, emailUsers, userImg
            from users
            order by userLevel desc, idUsers asc";

    $stmt = mysqli_stmt_init($conn);    

    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('SQL error');
    }
    else
    {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);


             if ($_SESSION['userLevel'] == 1 || $_SESSION['userLevel'] == 2)
             {    
              echo '              <li class="nav-item px-3">
              <a class="nav-link" href="admin.php">
                  <i class="fa fa-user fa-2x" aria-hidden="true"></i>
              </a>
          </li>'; }
                else
                {
                    echo '</span>';
                } 
              }      
                ?>
            
              <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
   
            <li class="nav-item px-3">
                    <a class="nav-link" href="https://lazatech-educate.web.app">
                        <i class="fa fa-list fa-2x" aria-hidden="true"></i>
                    </a>
            </li>
              <li class="nav-item px-3">
                    <a class="nav-link" href="survey.php">
                        <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link" href="plagiarism.php">
                        <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
              
                <li class="nav-item px-3">
                    <a class="nav-link" href="message.php">
                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        <?php 
              $sql = "SELECT *
              FROM users 
              INNER JOIN conversation
              ON users.idUsers = conversation.user_one OR users.idUsers = conversation.user_two 
              INNER JOIN messages
              ON conversation.id = messages.conversation_id Where messages.Status1 = '1' OR messages.Status2 = '1' AND users.idUsers != ? ";
              $stmt = mysqli_stmt_init($conn);    
              if (!mysqli_stmt_prepare($stmt, $sql))
              {
                  die('sql error');
              }
              else
              {
                  mysqli_stmt_bind_param($stmt, "s", $_SESSION['userId']);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $rowcount=mysqli_num_rows($result);
                  printf ("<h style=color:white>". $rowcount ."</h>");
              }
              ?>
                    </a>
               

                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="users-view.php">
                        <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item dropdown px-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="users-view.php">Find People</a>
                    <a class="dropdown-item" href="contact.php">Contact Us</a>
                    <a class="dropdown-item" href="TokenBalance.php">Token Balance</a>
                    <a class="dropdown-item" href="https://twitter.com/LazatechS">Follow us on Twitter</a>
                    <!--<a class="dropdown-item" href="https://drive.google.com/open?id=1fBgZk-mZ8JEntt9KLyXfRQsCOOPYelBg&authuser=gabrieledrian.alvaro%40g.batstate-u.edu.ph&usp=drive_fs">Download the APP</a> -->
                 
                  </div>
                </li>
               <!-- <li class="nav-item px-3">
                    <a class="nav-link" href="https://github.com/GEA960/OnAid.git">                                         
                    <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                    </a>
                </li> -->
                <li class="nav-item px-3">
                  <a class="nav-link" href="includes/logout.inc.php">
                      <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
        </nav>
        
     

