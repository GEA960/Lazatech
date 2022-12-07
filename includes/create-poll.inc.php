<?php

session_start();

if (isset($_POST['poll-submit']) && isset($_SESSION['userId']))
{
    
    require 'dbh.inc.php';
    
    
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $options = $_POST["option"];

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

            $txt = $desc;
            
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
                    
                    echo '<script type="text/javascript"> alert("Poll description is Plagiarized. The content has exceeded the 50% Threshold for plagiarism with a '.$response['percentPlagiarism'].' percent. Please rewrite it!") </script>';
                    exit();
                }

            }            

        }
    if (isset($_POST['is-locked']))
    {
        $locked = 1;
    }
    else
    {
        $locked = 0;
    }
    
    if (empty($title) || empty($options[0]) || empty($options[1]))
    {
        header("Location: ../create-poll.php?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "select subject from polls where subject=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../signup.php?error=sqlerror");
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
                header("Location: ../create-poll.php?error=titletaken");
                exit();
            }
            else
            { 
                $sql = "insert into polls(subject, created, modified, status, created_by, "
                        . "poll_desc, locked) "
                        . "values (?,now(),now(),1,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../create-poll.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssss", $title, $_SESSION['userId'], $desc, $locked);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    
                    $id = mysqli_insert_id($conn);
                    
                    for ($i=0; $i < sizeof($options); $i++)
                    {
                        $sql = "insert into poll_options (poll_id, name, created, modified, status) "
                                . "values (?,?,now(),now(),1)";
                        $stmt = mysqli_stmt_init($conn);
                        
                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            header("Location: ../create-poll.php?error=sqlerror&");
                            exit();
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $id, $options[$i]);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                        }
                    }
                    header("Location: ../create-poll.php?creation=success");
                    exit();
                }
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else
{
    header("Location: ../create-poll.php");
    exit();
}