<?php

if (isset($_POST['create-blog-submit']))
{
    
    require 'dbh.inc.php';
    session_start();
    
    $title = $_POST['btitle'];
    $content  = $_POST['bcontent'];
    
    
    if (empty($title) || empty($content))
    {
        header("Location: ../create-blog.php?error=emptyfields");
        exit();
    }
    else
    {       
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

            $txt = $content;
            
            $postData = [ "text" => $txt,
                        "language" => "en",
                        "includeCitations" => "false",
                        "scrapeSources" => "false"
                        ];
            $api =  $user['PlagAPIKey'];

            $curl = curl_init();
            
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com/plagiarism",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($postData),
                CURLOPT_HTTPHEADER => [
     "X-RapidAPI-Host: plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com",
     "X-RapidAPI-Key: $api",
     "content-type: application/json"
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
         
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response = json_decode($response, TRUE);
                
                if ($response['percentPlagiarism'] >= "50" ) {
                    
                    echo '<script type="text/javascript"> alert("Blog Content is Plagiarized. The content has exceeded the 50% Threshold for plagiarism with a '.$response['percentPlagiarism'].' percent. Please rewrite it!") </script>';
                    exit();
                }

            }            
        }

        // checking if a user already exists with the given username
        $sql = "select blog_title from blogs where blog_title=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../create-blog.php?error=sqlerror1");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $title);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $resultCheck = mysqli_stmt_num_rows($stmt);
            
            if ($resultCheck > 0)
            {
                header("Location: ../create-blog.php?error=titletaken");
                exit();
            }
            else
            {
                $id = $_SESSION['blog_id'];
                
                $FileNameNew = 'blog_cover.png';
                
                require 'upload.inc.php';
                
                $sql = "insert into blogs(blog_title, blog_by, blog_date, blog_content, blog_img) "
                        . "values (?,?,now(),?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../create-blog.php?error=sqlerror2");
                    exit();
                }
                else
                {              
                    
                    
                    mysqli_stmt_bind_param($stmt, "ssss", $title, $_SESSION['userId'], $content, $FileNameNew);
                    //echo $title . ' ' . $_SESSION['userId'] . ' ' . $content;
                    //exit();
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);      
                    
                    header("Location: ../create-blog.php");
                }
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else
{
    header("Location: ../create-blog.php");
    exit();
}