<?php
session_start();

require 'includes/dbh.inc.php';

if(isset($_POST['update']))
{
    $id = $_POST['event_id'];
    
    $EventTitle = str_replace("'", "''", $_POST['title']);
    $EventHeadline = str_replace("'", "''", $_POST['headline']);
    $EventDescription = str_replace("'", "''", $_POST['description']);

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

            $txt = $EventDescription;
            
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
                    
                    echo '<script type="text/javascript"> alert("Event description is Plagiarized. The content has exceeded the 50% Threshold for plagiarism with a '.$response['percentPlagiarism'].' percent. Please rewrite it!") </script>';
                    exit();
                }

            }            

        }
    
    $query = "UPDATE events, event_info SET events.title='$EventTitle', events.event_date = '$_POST[edate]', event_info.title='$EventTitle', event_info.headline='$EventHeadline', event_info.description='$EventDescription' WHERE events.event_id='$_POST[event_id]' AND event_info.event='$_POST[event_id]'";
   

    $query_run = mysqli_query($conn, $query);                                                                  
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>