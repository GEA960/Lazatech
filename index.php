

<?php

    session_start();
    include_once 'includes/dbh.inc.php';
    define('TITLE',"Dashboard| Lazatech");

    $companyName = "Franklin's Fine Dining";
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 
    <head>
        <link href="css/list-page.css" rel="stylesheet">
        <link href="css/loader.css" rel="stylesheet">
        
    </head>
    
    <body onload="pageLoad()">
        
        <div id="loader-wrapper">
        <img src='img/logo.png' id='loader-logo'>
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div>
        
        <div id="content" style="display: none">
            
            <?php include 'includes/navbar.php'; ?> 
            
            <div class="container-fluid">
                <div class="row justify-content-center">
                <div class="col-sm-11" >

                        <?php include 'includes/profile-card.php'; ?>

                    </div>

                    <div class="col-sm-2">

                        <br>
                        <a href="create-topic.php" class="btn btn-warning btn-lg btn-block">Create a Forum</a>
                        <a href="create-blog.php" class="btn btn-secondary btn-lg btn-block">Create a Blog</a>
                        <a href="create-poll.php" class="btn btn-warning btn-lg btn-block">Create a Poll</a>
                        <br> <br> <br>
                        <a href="forum.php" class="btn btn-warning btn-lg btn-block">Lazatech Forum</a>
                        <a href="hub.php" class="btn btn-secondary btn-lg btn-block">Lazatech Hub</a>
                        

                    </div>
                    <div class="col-sm-9" >
<!--
                        <div class="text-center p-3">
                            <img src="img/200pxFinal.png">
                            <h2 class='text-muted'>DASHBOARD</h2>
                            <br>
                        </div>
-->
                          
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="forum-tab" data-toggle="tab" href="#forum" role="tab" 
                                 aria-controls="forum" aria-selected="true">Recent Forums</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="blog-tab" data-toggle="tab" href="#blog" role="tab" 
                                 aria-controls="blog" aria-selected="false">Recent Blogs</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="poll-tab" data-toggle="tab" href="#poll" role="tab" 
                                 aria-controls="poll" aria-selected="false">Recent Polls</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="event-tab" data-toggle="tab" href="#event" role="tab" 
                                 aria-controls="event" aria-selected="false">Recent Events</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="forum" role="tabpanel" aria-labelledby="forum-tab">

                                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded shadow-sm">
                                    <img class="mr-3" src="img/logo.png" alt="" width="48" height="48">
                                  <div class="lh-100">

                               <!--   <form id="s" method="post">  
                                <select name='query'>
                                    <option value="HighVotes">High Votes Forums</option>
                                    <option value="Latest">Latest Forums</option>
                                    <option value="MyForums"> Your Created Forums </option>
                                </select>      
                                <input type="submit" name="Submit" value="Sort">
                            </form>                 
-->                         
                                <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Forums</h1>
                                  </div>
                                  </div>
                                </div>  

                                    <div class="mb-2">

                                    <?php
                                    $user = $_SESSION['userId'];
                                    $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                                        select sum(post_votes)
                                        from posts
                                        where post_topic = topic_id
                                        ) as upvotes
                                    from topics, users, categories 
                                    where topics.topic_by = users.idUsers
                                    and topics.topic_cat = categories.cat_id
                                    order by topic_id desc, upvotes asc 
                                    LIMIT 6";

                                    if(isset($_POST['query']) AND $_POST['query'] == 'HighVotes')      
                                    {
                                        $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                                            select sum(post_votes)
                                            from posts
                                            where post_topic = topic_id
                                            ) as upvotes
                                        from topics, users, categories 
                                        where topics.topic_by = users.idUsers
                                        and topics.topic_cat = categories.cat_id
                                        order by topic_id desc, upvotes asc 
                                        LIMIT 6";
                                      }
                                    elseif (isset($_POST['query']) AND $_POST['query'] == 'Latest') 
                                    {
                                        $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                                            select sum(post_votes)
                                            from posts
                                            where post_topic = topic_id
                                            ) as upvotes
                                        from topics, users, categories 
                                        where topics.topic_by = users.idUsers
                                        and topics.topic_cat = categories.cat_id
                                        order by topic_date DESC LIMIT 6";
                                    } 
                                    elseif (isset($_POST['query']) AND $_POST['query'] == 'MyForums') 
                                    {
                                        $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                                            select sum(post_votes)
                                            from posts
                                            where post_topic = topic_id
                                            ) as upvotes
                                        from topics, users, categories 
                                        where topics.topic_by = $user
                                        order by topic_date DESC LIMIT 6";
                                    } 
                                        $stmt = mysqli_stmt_init($conn);    

                                        if (!mysqli_stmt_prepare($stmt, $sql))
                                        {
                                            die('SQL error');
                                        }
                                        else
                                        {
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);


                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo '<div class="col-md-14">
                                                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                                        <a href="posts.php?topic='.$row['topic_id'].'">
                                                        <img class="card-img-left flex-auto d-none d-lg-block blogindex-cover" 
                                                                src="img/forum_cover.png" alt="Card image cap">
                                                                </a>
                                                          <div class="card-body d-flex flex-column align-items-start">
                                                            <strong class="d-inline-block mb-2 text-primary text-center  ml-auto">
                                                                <i class="fa fa-chevron-up" aria-hidden="true"></i><br>'.$row['upvotes'].'
                                                            </strong>
                                                            <h6 class="mb-0">
                                                              <a class="text-dark" href="posts.php?topic='.$row['topic_id'].'">'
                                                                .substr(ucwords($row['topic_subject']),0,100).'</a>
                                                            </h6>
                                                            <small class="mb-1 text-muted">'.date("F jS, Y", strtotime($row['topic_date'])).'</small>
                                                            <small class="card-text mb-auto">Created By: '.ucwords($row['uidUsers']).'</small>
                                                            <a href="posts.php?topic='.$row['topic_id'].'">Go To Forum</a>
                                                          </div>

                                                        </div>
                                                      </div>';
                                            }
                                        }
                                    ?>        


                                </div>

                            </div>

                            <div class="tab-pane fade" id="blog" role="blog" aria-labelledby="blog-tab">

                                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded shadow-sm">
                                    <img class="mr-3" src="img/logo.png" alt="" width="48" height="48">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Latest Blogs</h1>
                                  </div>
                                </div>  

                                <div class="mb-2">

                                    <?php
                                        $sql = "select * from blogs, users 
                                                where blogs.blog_by = users.idUsers
                                                order by blog_id desc, blog_votes asc
                                                LIMIT 6";
                                        $stmt = mysqli_stmt_init($conn);    

                                        if (!mysqli_stmt_prepare($stmt, $sql))
                                        {
                                            die('SQL error');
                                        }
                                        else
                                        {
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);


                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo '<div class="col-md-14">
                                                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                                        <a href="blog-page.php?id='.$row['blog_id'].'">
                                                          <img class="card-img-right flex-auto d-none d-lg-block blogindex-cover" 
                                                                src="uploads/'.$row['blog_img'].'" alt="Card image cap">
                                                                    </a>
                                                          <div class="card-body d-flex flex-column align-items-start">
                                                            <strong class="d-inline-block mb-2 text-primary">
                                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i> '.$row['blog_votes'].'
                                                            </strong>
                                                            <h6 class="mb-0">
                                                              <a class="text-dark" href="blog-page.php?id='.$row['blog_id'].'">'.substr($row['blog_title'],0,100).'</a>
                                                            </h6>
                                                            <small class="mb-1 text-muted">'.date("F jS, Y", strtotime($row['blog_date'])).'</small>
                                                            <small class="card-text mb-auto">'.substr($row['blog_title'],0,100).'...</small>
                                                            <a href="blog-page.php?id='.$row['blog_id'].'">Continue reading</a>
                                                          </div>
                                                          
                                                        </div>
                                                      </div>';
                                            }
                                        }
                                    ?>        


                                </div>

                            </div>

                            <div class="tab-pane fade" id="poll" role="poll" aria-labelledby="poll-tab">

                                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded shadow-sm">
                                    <img class="mr-3" src="img/logo.png" alt="" width="48" height="48">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Latest Polls</h1>
                                  </div>
                                </div>  

                                <div class="my-3 p-3 bg-white rounded shadow-sm">

                                  <?php

                                    $sql = "select p.id, p.subject, p.created, p.poll_desc, p.locked, (
                                                select count(*) 
                                                from poll_votes v
                                                where v.poll_id = p.id
                                                ) as votes
                                            from polls p 
                                            order by votes desc
                                            LIMIT 5";

                                    $stmt = mysqli_stmt_init($conn);    

                                    if (!mysqli_stmt_prepare($stmt, $sql))
                                    {
                                        die('SQL error');
                                    }
                                    else
                                    {
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);

                                        while ($row = mysqli_fetch_assoc($result))
                                        {

                                            echo '<a href="poll.php?poll='.$row['id'].'">
                                                <div class="media text-muted pt-3">
                                                    <img src="img/poll_cover.png" alt="" class="mr-2 rounded div-img poll-img">
                                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                                      <strong class="d-block text-gray-dark">'.ucwords($row['subject']).'</strong></a>
                                                          '.date("F jS, Y", strtotime($row['created'])).'
                                                           <br><br>
                                                           <span class="text-primary" >
                                                                '.$row['votes'].' User(s) have voted
                                                           </span>
                                                    </p>
                                                    <span class="text-right">';

                                            if($row['locked'] === 1)
                                            {
                                                echo '<br><b class="small text-muted">[Locked Poll]</b>';
                                            }
                                            else
                                            {
                                                echo '<br><b class="small text-success">[Open Poll]</b>';
                                            }

                                            echo '</span>
                                                    </div>';
                                        }
                                   }
                                ?>

                                </div>    

                            </div>

                            <div class="tab-pane fade" id="event" role="event" aria-labelledby="event-tab">

                                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded shadow-sm">
                                    <img class="mr-3" src="img/logo.png" alt="" width="48" height="48">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Upcoming Events</h1>
                                  </div>
                                </div>  

                                <div class="my-3 p-3 bg-white rounded shadow-sm">

                                  <?php

                                    $sql = "select event_id, event_by, title, event_date, event_image
                                            from events
                                            where event_date > now()
                                            order by event_date asc
                                            LIMIT 5";
                                    $stmt = mysqli_stmt_init($conn);    

                                    if (!mysqli_stmt_prepare($stmt, $sql))
                                    {
                                        die('SQL error');
                                    }
                                    else
                                    {
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);

                                        while ($row = mysqli_fetch_assoc($result))
                                        {
                                            $earlier = new DateTime(date("Y-m-d"));
                                            $later = new DateTime($row['event_date']);
                                            $diff = $later->diff($earlier)->format("%a");

                                            echo '<a href="event-page.php?id='.$row['event_id'].'">
                                                <div class="media text-muted pt-3">
                                                    <img src="uploads/'.$row['event_image'].'" alt="" class="mr-2 rounded div-img poll-img">
                                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                      <strong class="d-block text-gray-dark">'.ucwords($row['title']).'</strong></a>
                                                      '.date("F jS, Y", strtotime($row['event_date'])).'<br><br>
                                                      <span class="text-primary" >'.$diff.' days remaining </span>
                                                    </p>
                                                    <span class="text-primary text-right">';

                                            
                                                echo '</span>';
                                            
                                            echo '</span>
                                                    </div>';
                                        }
                                   }
                                ?>

                                </div>    

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            
            <?php include 'includes/footer.php'; ?>
        </div>
        

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" ></script>

        <script>
            var myVar;

            function pageLoad() {
              myVar = setTimeout(showPage, 4000);
            }

            function showPage() {
              document.getElementById("loader-wrapper").style.display = "none";
              document.getElementById("content").style.display = "block";
            }
        </script>  
        
    </body>
</html>