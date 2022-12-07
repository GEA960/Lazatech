<?php
    include('dbh.inc.php');
    include ('email-server.php');
    use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		if (isset($_POST['done'])) {

			$userEmail = $_POST['usersEmail'];
			
		
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';  
    require '../PHPMailer/src/SMTP.php';
    
    // send the email (used PHPMailer since mail() does not send email on localhost in WIINDOWS
    
    $to = $userEmail;
    $subject = 'Lazatech Account Approval';
    $message = '<p>Your account has been approved.</p></br>'
            . '<p>Click the link below to direct to the website </br>'
            . '<a href="https://lazatech.tech/login.php">lazatech.tech</a></p>';
    
            $mail = new PHPMailer(true);            
            
            try {
                $mail->isSMTP();                                      
                $mail->Host = 'smtp.gmail.com';                      
                $mail->SMTPAuth = true;                               
                $mail->Username = $SMTPuser;            
                $mail->Password = $SMTPpwd;  
                $mail->SMTPSecure = 'tls';                            
                $mail->Port = 587;                                   
                
                //Recipients
                $mail->setFrom($SMTPuser, $SMTPtitle);
                $mail->addAddress($to, $SMTPtitle);     

                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = $subject;
                $mail->Body    = $message;
 
                $mail->send();

                $id = $_POST['usersID'];
				        $admin = "UPDATE users set userLevel = 0 where idUsers = '$id'";
				        $query_run = mysqli_query($conn, $admin);                                                                 
				        
				        if($query_run){
				            echo '<script type="text/javascript"> alert("Data Updated") </script>';
				            header("Location: ../admin.php");
				            exit();
				        }
				        else{
				            echo '<script type="text/javascript"> alert("Data NOT Updated") </script>';
				        }

            } 
            catch (Exception $e) {
                echo '<h4 class="error">Message could not be sent. Mailer Error: '. $mail->ErrorInfo
                        .'</h4>';
            }
          }

          if (isset($_POST['decline'])) {
						
				$userEmail = $_POST['usersEmail'];
						
					
				require '../PHPMailer/src/Exception.php';
				require '../PHPMailer/src/PHPMailer.php';  
				require '../PHPMailer/src/SMTP.php';
				
				// send the email (used PHPMailer since mail() does not send email on localhost in WIINDOWS
				
				$to = $userEmail;
				$subject = 'Lazatech Account Approval';
				$message = '<p>Your account has been DECLINED.</p></br>'
						. '<p>Click the link below to direct to the website </br>'
						. '<a href="https://lazatech.tech/login.php">lazatech.tech</a></p>';
				
						$mail = new PHPMailer(true);            
						
						try {
							$mail->isSMTP();                                      
							$mail->Host = 'smtp.gmail.com';                      
							$mail->SMTPAuth = true;                               
							$mail->Username = $SMTPuser;            
							$mail->Password = $SMTPpwd;  
							$mail->SMTPSecure = 'tls';                            
							$mail->Port = 587;                                   
							
							//Recipients
							$mail->setFrom($SMTPuser, $SMTPtitle);
							$mail->addAddress($to, $SMTPtitle);     

							//Content
							$mail->isHTML(true);                                  
							$mail->Subject = $subject;
							$mail->Body    = $message;
			
							$mail->send();

							$id = $_POST['usersID'];
									$admin = "UPDATE users set userLevel = 0 where idUsers = '$id'";
									$query_run = mysqli_query($conn, $admin);                                                                 
									
									if($query_run){
										echo '<script type="text/javascript"> alert("Data Updated") </script>';
										header("Location: ../admin.php");
										exit();
									}
									else{
										echo '<script type="text/javascript"> alert("Data NOT Updated") </script>';
									}

						} 
						catch (Exception $e) {
							echo '<h4 class="error">Message could not be sent. Mailer Error: '. $mail->ErrorInfo
									.'</h4>';
						}
					}

					
    
?>