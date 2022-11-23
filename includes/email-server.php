<?php
 include_once 'dbh.inc.php';

 $sql = "select * from users where idUsers = 61";
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
    

$SMTPuser = 'lazatech.org@gmail.com';   
$SMTPpwd = $user['MailPass']; 
$SMTPtitle = "Lazatech inc.";
$Domain = 'lazatech';

