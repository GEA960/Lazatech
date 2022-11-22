

<?php
    error_reporting(0);
    session_start();
    include_once 'includes/dbh.inc.php';
    define('TITLE',"Plagiarism Checker| Lazatech");

    $companyName = "Franklin's Fine Dining";
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
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
    
    include 'includes/HTML-head.php';
?> 
    <head>
        <link href="css/list-page.css" rel="stylesheet">
        <link href="css/loader.css" rel="stylesheet">
        
    </head>
    
    <body onload="pageLoad()">
        
        <div id="loader-wrapper">
        <img src='img/logo.png' id='loader-logo'>
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div>
        
        <div id="content" style="display: none">
            
            <?php include 'includes/navbar.php'; ?> 
            
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-11" >
                <?php include 'includes/profile-card.php'; ?>
            </div>
                  
 <!--         <form action="" method='post' enctype="multipart/form-data"
                class="col-sm-11";>

                    <div>
                    <label for="edit-bio">Input the text you want to check for plagiarism:</label>
                        <textarea class="form-control" id="plag" rows="10" name="value" maxlength="5000"placeholder="Input text" ></textarea>         
                    </div>

                    <br><input type="submit" class="btn btn-primary" name="submit_plag" value="Submit">
                
                  </form>

               

                <input id="userinput"> <br> <br>
                <button onclick="greetings()"> Submit </button> -->
                
                <!--
                <form action="plagiarism.php" method="post">
                    <input name="plag" id="text" value="input your text to check for plagiarism"/><br>
                    <input type="submit"/>
                </form>
-->             

<?php
error_reporting(0);
if ($_SESSION['userLevel'] == 1)
                    {
                    echo '
                    <form action="APIKeyInsert.php" method="POST"
                    style="padding: 0 30px 0 30px;">
                   <div class="px-5">
                  <label for="edit-bio">Current Plagiarism Key API: &nbsp;'.$user['PlagAPIKey'].'</label>
                  
                  <textarea class="form-control" id="api" rows="2" name="api"
                    placeholder="Change API Key">
                    </textarea>
                  <input type="submit" class="btn btn-primary" name="update" value="UPDATE KEY">
                  
                  </form>
                  </div>';}    
                  ?>
                
            <form action="plagiarism.php" method="post" class="col-sm-11";>
            <div>
                    <label for="edit-bio">Input the text you want to check for plagiarism:</label>
                        <textarea class="form-control" type="text" name="plag" rows="10" name="value" maxlength="5000"placeholder="Input text" > <?php echo $_POST['plag'];?></textarea>         
            </div>
            <input type="submit" name="submit" value="Submit me!" />
            </form>

            <div class="container-fluid">
                <?php
                error_reporting(0);
                
                if (empty($_POST['plag'])) {
                echo "Text to check is empty. Please input your text!!!<br>";
                }      
                $txt = $_POST['plag'];
                
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
                    $someArray = json_decode($response,true); 
                    RecursiveWrite($someArray);
                }
               

               function RecursiveWrite($array) {
                echo "<table border='1'>"; }/*  
                foreach ($array as $key => $value) {
                    echo '<br><br><br>';

                    echo '<b>';
                    echo $key;
                    echo ': </b>';
                    echo '<&nbsp>';

                    if(is_array($value)) {
                        RecursiveWrite($value);
                        echo '<br>';
                    }
                    elseif(is_bool($value)) {
                        echo ($value? 'true' : 'false'); 
                        echo '<br>';
                    }
                    else {
                        echo $value;
                        echo '<br>';
                    }
                }
            }
        */
                ?>

                <?php
/*
$json = '{"sources":
    
    [{"url":"https://www.toptal.com/php/10-most-common-mistakes-php-programmers-make","scholarResult":false,"title":"",
        "matches":[
            {"inputStart":0,"inputEnd":389,"matchText":"PHP makes it relatively easy to build a web-based system, which is much of the reason for its popularity. But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language, with many nuances and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"istakes PHP Developers Make ","after":" of. By I"},"score":56.01851851851852}]},
    
    {"url":"https://shameerc.com/news/10-most-common-mistakes-that-php-developers-make","scholarResult":false,"title":"10 Most Common Mistakes That PHP Developers Make - Shameer C","matches":[

        {"inputStart":275,"inputEnd":354,"matchText":"hair-pulling debugging. This article highlights ten of the more common mistakes...","context":{"before":"velopers, leading to hours of "},"score":8},
        
        {"inputStart":206,"inputEnd":262,"matchText":"nuances, and subtleties that can bite developers, leading","context":{"after":" to hours of hair-pulling debu"},"score":8.166666666666666}]},
        
    {"url":"http://www.studentschillout.com/wp/10-most-common-mistakes-that-php-developers-make/","scholarResult":false,"title":"","matches":[
        {"inputStart":106,"inputEnd":389,"matchText":"But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language with many frameworks, nuances, and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"That PHP Developers Make. ","after":" of. Common Mistake #"},"score":37}]},
        
    {"url":"http://www.phpdeveloper.org/news/21448","scholarResult":false,"title":"","matches":[
        {"inputStart":0,"inputEnd":389,"matchText":" PHP makes it relatively easy to build a web-based system, which is much of the reason for its popularity. But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language, with many nuances and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"t are a bit more abstract. ","after":" of. Among the items on his"},"score":56.01851851851852}]},
    
    {"url":"https://belajardenganbaik.com/what-is-the-resulting-content-of-the-list-letters-after-this-code-snippet","scholarResult":false,"title":"","matches":[

        {"inputStart":0,"inputEnd":389,"matchText":"PHP makes it relatively easy to build a web-based system, which is much of the reason for its popularity. But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language, with many nuances and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"istakes PHP Developers Make ","after":" of. Author"},"score":56.01851851851852},
        
        {"inputStart":0,"inputEnd":389,"matchText":"PHP makes it relatively easy to build a web-based system, which is much of the reason for its popularity. But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language with many frameworks, nuances, and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"SHARE ","after":" of. Snippets in Visual St"},"score":54}]},
        
        {"url":"https://www.phpweekly.com/archive/2014-07-24.html","scholarResult":false,"title":"","matches":[
            {"inputStart":0,"inputEnd":389,"matchText":" PHP makes it relatively easy to build a web-based system, which is much of the reason for its popularity. But its ease of use notwithstanding, PHP has evolved into quite a sophisticated language, with many nuances and subtleties that can bite developers, leading to hours of hair-pulling debugging. This article highlights ten of the more common mistakes that PHP developers need to beware","context":{"before":"10 Most Common PHP Mistakes ","after":" of. 5 Steps to Build Perf"},"score":56.01851851851852}]}],
            
            "percentPlagiarism":99,
            "citations":[{"title":"","url":"https://www.phpweekly.com/archive/2014-07-24.html","sentenceEndIndex":392,"score":56,"matchedContentStartIndex":0,"matchedContentEndIndex":389}]}
';
*/
$response = json_decode($response, TRUE);
echo '<b> Overall Plagiarism Percentage: </b> '; print_r($response['percentPlagiarism']);  
echo '<b> % </b> ';


/*foreach($arr as $index=>&$subarray){  // modify $subarray by reference
    $subarray=['matchText'=>$subarray['matches']['matchText'],'score'=>$subarray['matches']['score']];  // overwrite each subarray using the first two elements from deeper "control" subarray
}
var_export($arr); 
*/
?>
             </div>
                    <div class="col-sm-2" -->

                        <div class="text-center p-3 mt-5">
                        <!--    <a href="team.php" target="_blank">
                                <i class="creater-icon fa fa-users fa-5x" aria-hidden="true"></i>
                            </a>
                            <p><br>THE CREATORS</p> -->
                            <a> </a>
                            <p><br></br><br></br><br></br><br></br><br></br></p>
                        </div>

                    
                    </div>
                </div>
            </div>
            
            <?php include 'includes/footer.php'; ?>
        </div>
        

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" ></script>

        <script>
            var myVar;
            function pageLoad() {
              myVar = setTimeout(showPage, 4000);
            }

            function showPage() {
              document.getElementById("loader-wrapper").style.display = "none";
              document.getElementById("content").style.display = "block";
            }
     
        var options = {
	        method: 'POST',
	        headers: {
		        'content-type': 'application/json',
		        'X-RapidAPI-Key': 'b36987b24fmshe1b95f7c4bfd0f7p173746jsn6903703f1f5c',
		        'X-RapidAPI-Host': 'plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com'
	            },
	            body: '{"text":"Code editors are tools typically used by programmers and web developers to write and edit code. They are used for developing software and apps as well as other web development purposes.",                         "language":"en",                                                               "includeCitations":true,                                                      "scrapeSources":false}'
                };

        </script>  
        <!--<script src="js/plag.js" type="module"></script> -->
    </body>
</html>