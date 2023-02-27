

             <div class='card'>
                <img alt='Card image cap' class='rounded-top text-white d-flex flex-row' src='img/user_cover.png' style="height:200px;">
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
                 <p> Note: All transactions obtained from Lazatech Educate and Social media are all for testing first. 
               The tokens obtained will not be transferred to XUMM wallet as the testing and development phase are ongoing. 
               Once the testing phase is finished, all balances will be reset to zero. 
               However, the respondents and beta testers will receive 10 LZT tokens from the year 2022 up to 2/24/2023 - 9:00 am, 
               once the token is created in the XRP Ledger.</p>
                </div>
               </div>
               
           
