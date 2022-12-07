<?php

session_start();
error_reporting(E_ALL);
require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $PollDesc = str_replace("'", "''", $_POST['description']);

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

        $txt = $PollDesc;
        
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
                
                echo '<script type="text/javascript"> alert("Poll descripton is Plagiarized. The content has exceeded the 50% Threshold for plagiarism with a '.$response['percentPlagiarism'].' percent. Please rewrite it!") </script>';
                exit();
            }

        }            

    }

    $query = "UPDATE polls SET polls.subject='$_POST[subject]', polls.poll_desc='$_POST[description]' WHERE polls.id='$_POST[id]'";
   
    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}


/* if(isset($_POST['update']))
{

    $query = "UPDATE polls SET polls.subject='$_POST[subject]' WHERE polls.id='$_POST[id]'";
   
    

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

if(isset($_POST['update']))
{

    $query = "UPDATE poll_options SET poll_options.name='$_POST[name]' WHERE poll_options.poll_id='$_POST[id]'";
    

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}*/
?>