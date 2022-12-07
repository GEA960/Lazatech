<?php
session_start();
if (isset($_POST['create-topic']))
{
    
    require 'dbh.inc.php';
    
    $topicSubject = $_POST['topic-subject'];
    $topicCategory = $_POST['topic-cat'];
    $postContent = $_POST['post-content'];
    
    if (empty($topicSubject) || empty($postContent))
    {
        header("Location: ../create-topic.php?error=emptyfields");
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

            $txt = $postContent;
            
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
                    
                    echo '<script type="text/javascript"> alert("Forum Reply is Plagiarized. The content has exceeded the 50% Threshold for plagiarism with a '.$response['percentPlagiarism'].' percent. Please rewrite it!") </script>';
                    exit();
                }

            }            




        $sql = "insert into topics(topic_subject, topic_date, topic_cat, topic_by) "
                . "values (?,now(),?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../create-topic.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "sss", $topicSubject, $topicCategory, $_SESSION['userId']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $topicid = mysqli_insert_id($conn);
            
            $sql = "insert into posts(post_content, post_date, post_topic, post_by) "
                    . "values (?,now(),?,?)";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../create-topic.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $postContent, $topicid, $_SESSION['userId']);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                
                header("Location: ../create-topic.php?operation=success");
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
  }
}

else

{
    header("Location: ../index.php");
    exit();
}