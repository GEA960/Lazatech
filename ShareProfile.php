<?php

    session_start();
    require 'includes/dbh.inc.php';
    define('TITLE',"Share Profile| Lazatech");
    
    if(isset($_GET['id']))
    {
        $userid = $_GET['id'];
    }
    else
    {
        $userid = $_SESSION['userId'];
    }
    
    $sql = "select * from users where idUsers = ".$userid;
    $stmt = mysqli_stmt_init($conn);    
    
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('SQL error');
    }
    else
    {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
    }
    
    include 'includes/HTML-head.php';   
?> 
</head>

<body class="justify-content-center">

 
      <div class="container">
        <div class="row">
<!--
          <div class="col-sm-3">
            
              <?php /*include 'includes/profile-card.php';*/ ?>
              
          </div>
-->           
            
          <div class="col-sm-12 text-center" id="user-section">
              <img class="cover-img" src="img/user_cover.png">
              <img class="profile-img" src="uploads/<?php echo $user['userImg']; ?>">
              
              <?php  
                    if ($user['userLevel'] === 1)
                    {
                        echo '<img id="admin-badge" src="img/admin-badge.png">';
                    }
              ?>
              
              <h2><?php echo ucwords($user['uidUsers']); ?></h2>
              <h6><?php echo ucwords($user['f_name']) . " " . ucwords($user['l_name']); ?></h6>
              <h6><?php echo '<small class="text-muted">'.$user['emailUsers'].'</small>'; ?></h6>
              
              <?php 
                if ($user['gender'] == 'm')
                {
                    echo '<i class="fa fa-male fa-2x" aria-hidden="true" style="color: #709fea;"></i>';
                }
                else if ($user['gender'] == 'f')
                {
                    echo '<i class="fa fa-female fa-2x" aria-hidden="true" style="color: #FFA6F5;"></i>';
                }
                ?>
              
              <br><small><?php echo $user['headline']; ?></small>
              <br><br>
              <div class="profile-bio">
                  <small><?php echo $user['bio'];?></small>
              </div>
              
              
              <hr>
              <h3>Created Blogs</h3>
              <br><br>
              
              <?php
                    $sql = "select * from blogs "
                            . "where blog_by = ? order by blog_votes desc";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {       
                                    echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="ShareBlog-page.php?id='.$row['blog_id'].'">
                                            <img class="card-img-top" src="uploads/'.$row['blog_img'].'" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['blog_title']).'</p>
                                              <h3>
                            <a href="includes/blog-vote.inc.php?blog='.$row['blog_id'].'" >
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </a>  
                             '.$row['blog_votes'].'
                            </h3>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['blog_date'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              <br><br>
              <hr>
              <h3>Created Forums</h3>
              <br><br>
              
              <?php
                    $sql = "select * from topics where topic_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="SharePosts.php?topic='.$row['topic_id'].'">
                                            <img class="card-img-top" src="img/forum_cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['topic_subject']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['topic_date'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              <br><br>
              <hr>
              <h3>Replies from Forums that HELPS</h3>
              <br><br>
              
              <?php
                    $sql = "select * from posts where post_by = ? AND post_votes>=3 Order by post_votes desc";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="ShareSoloPosts.php?topic='.$row['post_topic'].'">
                                            <img class="card-img-top" src="img/forum_cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['post_content']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['post_date'])).'</small></p>
                                            </div>
                                            </a>
                                            <strong class="d-inline-block mb-2 text-primary text-center  ml-auto">
                                            <i class="fa fa-chevron-up" aria-hidden="true"></i><br>'.$row['post_votes'].'
                        </strong>
                                          </div>
                                          
                                          </div>
                                          ';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              <br><br>
              <hr>
              <h3>Created Polls</h3>
              <br><br>
              
              
              <?php
                    /*$sql = "select * from poll_votes v "
                            . "join polls p on v.poll_id = p.id "
                            . "join users u on p.created_by = u.idUsers "
                            . "where v.vote_by = ?";
                            */
                    $sql = "select * FROM polls WHERE created_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {   
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="SharePoll.php?poll='.$row['id'].'">
                                            <img class="card-img-top" src="img/poll_cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['subject']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['created'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              
              <br><br>
              
              <br><br>
              <hr>
              <h3>Participated Polls</h3>
              <br><br>
              
              
              <?php
                    $sql = "select * from poll_votes v "
                            . "join polls p on v.poll_id = p.id "
                            . "join users u on p.created_by = u.idUsers "
                            . "where v.vote_by = ?";
                            
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {   
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="SharePoll.php?poll='.$row['poll_id'].'">
                                            <img class="card-img-top" src="img/poll_cover.png" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['subject']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['created'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              
              
              
             
              <br><br>
              <hr>
              <h3>Created Events</h3>
              <br><br>
             
              <?php
                         $sql = "select * from events where event_by = ?";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        echo '<div class="container">'
                                    .'<div class="row">';
                        
                        $row = mysqli_fetch_assoc($result);
                        if(empty($row))
                        {
                            echo '<div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                <div class="col-sm-4">
                                    <img class="profile-empty-img" src="img/empty.png">
                                  </div>
                                  <div class="col-sm-4" style="padding-bottom: 30px;"></div>
                                    </div>
                                  </div>';
                        }
                        else
                        {
                            do
                            {
                                echo '<div class="col-sm-4" style="padding-bottom: 30px;">
                                        <div class="card user-blogs">
                                            <a href="ShareEvent-page.php?id='.$row['event_id'].'">
                                            <img class="card-img-top" src="uploads/'.$row['event_image'].'" alt="Card image cap">
                                            <div class="card-block p-2">
                                              <p class="card-title">'.ucwords($row['title']).'</p>
                                             <p class="card-text"><small class="text-muted">'
                                             .date("F jS, Y", strtotime($row['event_date'])).'</small></p>
                                            </div>
                                            </a>
                                          </div>
                                          </div>';
                            }while ($row = mysqli_fetch_assoc($result));
                            echo '</div>'
                                    .'</div>';
                        }
                    }
              ?>
              
              <br><br>
              <hr>
          </div>
          <div class="col-sm-1">
            
          </div>
        </div>


      </div> <!-- /container -->





<?php include 'includes/HTML-footer.php'; ?>