<?php

session_start();

if (isset($_GET['pollid']) && isset($_SESSION['userId']) && ($_SESSION['userLevel'] == 1))
{
    
    require 'dbh.inc.php';
    
    $blogs = $_GET['blogs'];
    
    $sql = "delete from blogs where blog_id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../blogs.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $blogs);
        mysqli_stmt_execute($stmt);
        header("Location: ../blogs.php");
        exit();
    }
    
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else
{
    header("Location: ../blogs.php");
    exit();
}