

             <div class='card'>
                <img alt='Card image cap' class='rounded-top text-white d-flex flex-row' src='img/User_Cover.png' style="height:200px;">
                <div class="d-flex p-3">
               
                    <a href='profile.php'>
                        <img src='uploads/<?php echo $_SESSION["userImg"] ?>' class='card-img-profile'>
                    </a>
                    <?php  
                        if ($_SESSION['userLevel'] == 1)
                        {
                            echo '<img id="card-admin-badge" src="img/admin-badge.png">';
                        }
                    ?>
                    <a href="edit-profile.php">
                        <i class="fa fa-pencil fa-2x edit-profile" aria-hidden="true"></i>
                    
                    </a>
                    <h4 class='mb-0 mt-0 p-3'>
                    <?php echo ucwords($_SESSION['userUid']); ?>
                        <small class="text-muted">
                            <?php echo ucwords($_SESSION['f_name']." ".$_SESSION['l_name']); ?>
                        </small>
                        <small class="text-muted"><?php echo $_SESSION['headline']; ?></small>
                    </h4>
                </div>
                </div>
               
           