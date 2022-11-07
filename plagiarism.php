

<?php

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
            <form action="plagiarism.php" method="post">
            Text: <input type="text" name="plag" /><br />
            
            <input type="submit" name="submit" value="Submit me!" />
            </form>
                <?php

                $txt = $_POST['plag'];

                $postData = [ "text" => $txt,
                            "language" => "en",
                            "includeCitations" => "true",
                            "scrapeSources" => "false"
                            ];

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
                        "X-RapidAPI-Key: d979243512msha0fb5e5215fa339p1bcb91jsnc007f937a446",
                        "content-type: application/json"
                    ],
                ]);
                
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }
                ?>
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
     
        function greetings() {
        var ad = document.getElementById("userinput").value;   
                };

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