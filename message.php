<?php
    error_reporting (0);
    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Inbox | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }  
    
    include 'includes/HTML-head.php'; ?> 
    
        <link href="css/inbox.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="emoji-picker/lib/css/emoji.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style type="text/css">
	.div-img {
    width: 55px;
    height: 55px;
    object-fit: cover;
    transition: transform .2s;
}

.div-img:hover {
    transform: scale(1.17);
}
a.addbtn:hover, a.addbtn:active {
	font-size: 25px;
}
.fa-plus{
	padding-left: 210px;
	padding-top: 3px;
}
.modal-dialog,
.modal-content {
    /* 80% of window height */
    height: 80%;
}

.modal-body {
    /* 100% = dialog height, 120px = header + footer */
    max-height: calc(100% - 100px);
    overflow-y: scroll;
}

</style>

    <body>

        <?php include 'includes/navbar.php'; ?>
        
        <div class="cover">
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="recent_heading">                       
                      <h2>Inbox</h2>
                      <div>
							<a data-toggle="modal" data-target="#usermodal"><i class="fa fa-user d-flex" aria-hidden="true" style="color:black;"></i></a>
							<div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="usermodallabel" aria-hidden="true">
						   <div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title"><h4>Select a user to chat with</h4></div>
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden ="true">&times;</span><span class="sr-only">Close</span></button>
									
								</div>
								<div class="modal-body">
									<?php

                      $sql = "select idUsers, uidUsers, userLevel, f_name, l_name, emailUsers, userImg
                              from users order by userLevel desc, idUsers asc";

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
                          {?> 
                          		<?php 
                          		
                                  echo '
                                  <input type="hidden" name="usersID" value="'.$row["idUsers"].'">
                                  <a href="./message.php?id='.$row['idUsers'].'">
                              
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span><br>
                                            '.$row['emailUsers'].'
                                      </p>
                                      <span class="text-right text-primary">';?>



                                      
                                      	
                                          
                                              
                                          </a>
                                      </span>
                                  </div>
                            <?php      
                          }  
                     }
                  ?>
								</div>
							</div>
						</div>
						</div>
						</div>
                        
                    </div>


                  </div>


                    <div class="inbox_chat">
                      
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
                            
                            while ($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                      
                      <a href='./message.php?id=<?php echo $row['idUsers']; ?>'><div class="chat_list ">
                            <div class="chat_people">
                                <div class="chat_img"> 
                                    <img class="chat_people_img" src="uploads/<?php echo $row['userImg'] ?>"> 
                                </div>
                              <div class="chat_ib">
                                <h5>
                                <p style="color:red;">  <?php echo ucwords($row['uidUsers']) ?> </p>
                                    <span class="chat_date">Lazatech User</span>
                                </h5>
                                <p>Click on the User to start chatting</p>
                              </div>
                    
                            </div>
                          </div></a>
                      
                        <?php
                               
                            }
                        }

                        ?>




<?php
                
                $sql = "select * from users where idUsers != ?";
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
                    
                    while ($row = mysqli_fetch_assoc($result))
                    {
                ?>
              
              <a href='./message.php?id=<?php echo $row['idUsers']; ?>'><div class="chat_list ">
                    <div class="chat_people">
                        <div class="chat_img"> 
                            <img class="chat_people_img" src="uploads/<?php echo $row['userImg'] ?>"> 
                        </div>
                      <div class="chat_ib">
                        <h5>
                            <?php echo ucwords($row['uidUsers']) ?> 
                            <span class="chat_date">Lazatech User</span>
                        </h5>
                        <p>Click on the User to start chatting</p>
                      </div>
            
                    </div>
                  </div></a>
              
                <?php
                       
                    }
                }

                ?>
                  </div>
                </div>
                  
                  
                  
                <div class="mesgs">
                    <div class="msg_history">
                      
                        <?php
            
                            if(isset($_GET['id'])){

                                $user_two = trim(mysqli_real_escape_string($conn, $_GET['id']));

                                $sql = "select idUsers from users where idUsers = ? and idUsers != ?";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql))
                                {
                                    die("SQL error");
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "ss", $user_two, $_SESSION['userId']);
                                    mysqli_stmt_execute($stmt);
                                    mysqli_stmt_store_result($stmt);

                                    $resultCheck = mysqli_stmt_num_rows($stmt);

                                    if ($resultCheck === 0)
                                    {
                                        die("Invalid $_GET ID.");
                                    }
                                    else
                                    {
                                        $sql = "select * from conversation "
                                                . "where (user_one = ? AND user_two = ?) "
                                                . "or (user_one = ? AND user_two = ?)";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql))
                                        {
                                            die("SQL error");
                                        }
                                        else
                                        {
                                            mysqli_stmt_bind_param($stmt, "ssss", $user_two, $_SESSION['userId'],
                                                    $_SESSION['userId'], $user_two);

                                            mysqli_stmt_execute($stmt);
                                            $conver = mysqli_stmt_get_result($stmt);
                                            mysqli_stmt_store_result($stmt);

                                            if (mysqli_num_rows($conver) > 0)
                                            {

                                                $fetch = mysqli_fetch_assoc($conver);
                                                $conversation_id = $fetch['id'];

                                            }
                                            else
                                            {
                                                $sql = "insert into conversation(user_one, user_two) "
                                                        . "values (?,?)";
                                                $stmt = mysqli_stmt_init($conn);
                                                if (!mysqli_stmt_prepare($stmt, $sql))
                                                {
                                                    die("SQL error");
                                                }
                                                else
                                                {
                                                    mysqli_stmt_bind_param($stmt, "ss", $_SESSION['userId'], $user_two);
                                                    mysqli_stmt_execute($stmt);
                                                    mysqli_stmt_store_result($stmt);

                                                    $conversation_id = mysqli_insert_id($conn);
                                                }
                                            }
                                        }
                                    }
                                }
                            }else {
                                die("<div class='text-center'>
                                        <br><br><br>
                                        <h1 class='text-white'>Click on a person to start chatting</h1>
                                     </div>");
                            }
                        ?>
                      
                     
                    
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                        <input type="hidden" id="conversation_id" value="<?php echo base64_encode($conversation_id); ?>">
                        <input type="hidden" id="user_form" value="<?php echo base64_encode($_SESSION['userId']); ?>">
                        <input type="hidden" id="user_to" value="<?php echo base64_encode($user_two); ?>">

                        <textarea id="message" type="text" class="write_msg form-control-plaintext" style="background-color: white;" 
                                  placeholder="Type a message" data-emojiable="true"></textarea>
                               
                        <button id="reply" class="msg_send_btn" 
                                type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- ** Don't forget to Add jQuery here ** -->

    <script src="emoji-picker/lib/js/config.js"></script>
    <script src="emoji-picker/lib/js/util.js"></script>
    <script src="emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="emoji-picker/lib/js/emoji-picker.js"></script>        
    

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>  
    </body>
</html>
