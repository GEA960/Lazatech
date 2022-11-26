<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Admin | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(!isset($_SESSION['userId']) == 0)
    {
        header("Location: index.php");
        exit();
    }
    
    
    include 'includes/HTML-head.php';
?> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

<body >
	 <?php include 'includes/navbar.php'; ?>
	<div class="row" style="margin-left: 2%; margin-right: 2%; margin-top: 2%;">
    <div class="col-sm-4">
			<div class="container">
			<div class="card bg-basic">
				<div class="card-header bg-primary">
					<h5>Accounts For Approval</h5>
				</div>
				<div class="card-body bg-basic">

					
					<?php 
						$sql = "select * from users where userLevel = 3";
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
                          	echo '<form method="post" action="includes/accept-user.php"
                          	<a href="profile.php?id='.$row['idUsers'].'">
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span><br>
                                            '.$row['emailUsers'].'
                                      </p>
                                      <span class="text-right text-primary" style="padding-right:15px;">
                                      		

                                          <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#accept-user-modal" name="accept"><i class="fa fa-check text-primary" style="font-size:20px;"></i></button>	
                                      </span>
                                      <span class="text-right">

                                      		<input type="hidden" name="usersID" value="'.$row['idUsers'].'">
                    											<input type="hidden" name="usersEmail" value="'.$row['emailUsers'].'">
                                          <button type="submit" class="btn btn-basic" name="decline"><i class="fa fa-close text-danger" style="font-size:20px;"></i></button>
                                      </span>
                                  </div>
                                  </form>
					 
				
				
										<div class="modal" id="accept-user-modal" tabindex="-1" role="dialog" aria-labelledby="acceptusermodallabel" aria-hidden="true">
										<div class="modal-dialog" style="height:50%;">
											<div class="modal-content">
											

												<div class="modal-body" style="overflow: auto;" >
												
													<h2 class="text-center" style="padding-top: 10%;">Account has been approved!</h2>
												</div>
											
												<form action="includes/accept-user.php" method="post" style="display: flex; justify-content: center;">
													<input type="hidden" name="usersID" value="'.$row['idUsers'].'">
			                    <input type="hidden" name="usersEmail" value="'.$row['emailUsers'].'">
													<button type="submit" class="btn btn-primary" name="done" style="width: 20%;">OK</button>
												</form>
											</div>
										</div>
									</div>';

					}}
			?>
		</div>
		</div>
		</div>
	</div>

<!------------------VIEW REPORTS---------------->

		<div class="col-sm-4">
			<div class="card bg-basic">
				<div class="card-header bg-danger">
					<h5>Violation Reports</h5>
				</div>
				<div class="card-body bg-basic">
					<?php 
						$sql = "select r.*, u.*
                    from reports r, users u where r.report_by=u.idUsers
                    order by report_date desc";

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
                          	echo '<a href="profile.php?id='.$row['idUsers'].'">
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span><br>
                                            '.$row['emailUsers'].'
                                      </p>
                                      <span class="text-right text-primary">
                                          <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#report-modal" >View</button>
                                              
                                          </a>
                                      </span>
                                  </div>';
                                  

					 ?>

					
					<div class="modal fade" id="report-modal" tabindex="-1" role="dialog" aria-labelledby="reportmodallabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title"><h4>Violation Reports</h4></div>
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden ="true">&times;</span><span class="sr-only">Close</span></button>
									
								</div>
<!---------------------------------------------------------------------------------------------------------------->
<!-----------------Content ng view report modal------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
<!--NOTE: HINDI PA FUNCTIONABLE ANG SAvE BUTTON---------------------------------------------------------------------->

								<div class="modal-body">
									

									<?php

                      

                              echo '<a href="profile.php?id='.$row['idUsers'].'">
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span>
                                            < '.$row['emailUsers'].' >
                                      </p>
                                  </div>
                                  <div>
                                  	<br>
                                  	<label><b>Link:</b> </label><a href="'.$row["link"].'"><p>'.$row["link"].'</p></a><br>
                                  	<label><b>Description:</b> </label><p>'.$row["description"].'</p></a><br>
                                  	<label><b>Message:</b> </label><p>'.$row["message"].'</p></a><br>

                                  </div>';


                                  
                                 
                  ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
									Close</button>
									<form action="includes/report-post.inc.php" method="post">
										<input type="hidden" name="reportID" value="<?= $row['report_id']?>">
										<button type="submit" class="btn btn-success" name="done">Report Done</button>
									</form>
									
								</div>
							</div>
						</div>
						
					</div>

					<?php 

						if (empty ($result)) {
                                  	echo '<i>No violation report for the mean time.</>';
                                  }
                                  else {
                                  	echo '</span>';
                                  };
                          }

                      }

					?>
					<script>
						/**$(function() {
    for (var i = 0; i < 100; i++) {
        $('.modal-body').append(i + '<br>');
    }
});**/
					</script>
				</div>
					
				<div class="bg-basic text-center">
		
				</div>
			</div>
		</div>

<!------------------ADMIN ACCOUNTS---------------->

		<div class="col-sm-4">
			<div class="card bg-basic">
				<div class="card-header bg-success">
					<div class="row">
						<div class="col-sm-15">
							<h5 >Admin Accounts</h5>
						</div>
						<div >
							<a data-toggle="modal" data-target="#usermodal"><i class="fa fa-plus d-flex" aria-hidden="true" style="color:black;"></i></a>
							<div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="usermodallabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title"><h4>Add User Admin</h4></div>
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden ="true">&times;</span><span class="sr-only">Close</span></button>
									
								</div>
<!--------------------------------------------------------------------------------------------------------------------------->
<!--------Search bar ng add user admin modal--------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
							<!--	<div class="input-group rounded">
  								<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  								<span class="input-group-text border-0" id="search-addon">
    								<i class="fa fa-search"></i>
  								</span>
								</div>-->

<!--------------------Content ng user admin modal----------------------------------------------------------------------------------------->

								<div class="modal-body">
									<?php

                      $sql = "select idUsers, uidUsers, userLevel, f_name, l_name, emailUsers, userImg
                              from users where userLevel=0
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

                          while ($row = mysqli_fetch_assoc($result))
                          {?> 
                          		<?php 
                          		
                              echo '<form method="post" action="includes/add-user-admin.php">
                              <input type="hidden" name="usersID" value="'.$row["idUsers"].'">
                              <a href="profile.php?id='.$row['idUsers'].'">
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span><br>
                                            '.$row['emailUsers'].'
                                      </p>
                                      <span class="text-right text-primary">
                                      <button type="submit" name="add-admin" value="Add" class="btn btn-outline-primary">Add</button>
                                      </form>';?>



                                      
                                      	
                                          
                                              
                                          </a>
                                      </span>
                                  </div>
                            <?php      
                          }  
                     }
                  ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
									Close</button>
									<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
								</div>
							</div>
						</div>
						</div>
						</div>
					</div>
				</div>

				
				<div class="card-body bg-basic">
					<p>
						<?php

                     $sql = "select idUsers, uidUsers, userLevel, f_name, l_name, emailUsers, userImg
                              from users WHERE userLevel = 2";

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

                          	

                              echo '<form method="post" action="includes/add-user-admin.php">
                              			<input type="hidden" name="usersID" value="'.$row["idUsers"].'">
                              	  <a href="profile.php?id='.$row['idUsers'].'">
                                  <div class="media text-muted pt-3">
                                      <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded-circle div-img list-user-img">
                                      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                        <strong class="d-block text-gray-dark">'.ucwords($row['uidUsers']).' '.ucwords($row['userLevel']).'</strong></a>
                                            <span class="text-primary">'.ucwords($row['f_name'].' '.$row['l_name']).'</span><br>
                                            '.$row['emailUsers'].'
                                      </p>';


                                      if ($_SESSION['userLevel'] == '1' AND $row['userLevel'] != '0' )
                                  {
                                      echo '<button type="submit" name="delete-admin" value="Delete" class="btn btn-default"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></button>
                                      </form> 
                                              
                                            
                                          </span>';
                                  }
                                  else
                                  {
                                      echo '</span>';
                                  }
                   
                                     echo' </span>
                                  </div>';
                                  
                                  
                          }  
                     }
                  ?>
            
                  
					</p>
				</div>
				
				
			</div>
		</div>

	</div>
    <?php include 'includes/footer.php'; ?>
</body>