<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Forum | Lazatech");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if (isset($_GET['topic']))
    {
        $topic = $_GET['topic'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 

        <link href="css/forum-styles.css" rel="stylesheet">
        
        <style>
     .iframe-container{
         position: relative;
         width: 100%;
         padding-bottom: 56.25%;
         height: 0;
     }  
     .iframe-container iframe{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
     }
   </style>
    </head>
    
<body>

<?php

    include 'includes/navbar.php';

    if (isset($_POST['submit-reply']))
    {
        $content = $_POST['reply-content'];
        
        if (!empty($content))
        {
            $sql = "insert into posts(post_content, post_date, post_topic, post_by) "
                    . "values (?,now(),?,?)";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                die('sql error');
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $content, $topic, $_SESSION['userId']);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
            }
        }
    }
    
    
    $sql = "select * from topics, categories where topic_id=? "
            . "and topic_cat = cat_id";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        die('sql error');
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $topic);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (!($forum = mysqli_fetch_assoc($result)))
        {
            die('sql error');
        }
    }

?>
    
    
    <br><Br>
    <div class="container">
    <div class="col-sm-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forums</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo ucwords($forum['cat_name']); ?></a></li>
            </ol>
        </nav>
        
        <div class="card post-header text-center">
            <h1><?php echo ucwords($forum['topic_subject']); ?></h1>
        </div>
    </div>
    <div class="col-sm-12">
        
            
            
            <?php
            
                $sql = "select * from posts p, users u "
                        . "where p.post_topic=? "
                        . "and p.post_by=u.idUsers "
                        . "order by p.post_id;";
                $stmt = mysqli_stmt_init($conn);    

                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    die('sql error');
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $topic);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result))
                    {

                        $voted_u = false;
                        $voted_d = false;

                        $sql = "select votePost, voteBy, vote from postvotes "
                            . "where votePost=? "
                            . "and voteBy=? "
                            . "and vote=1";

                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            die('sql error');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $row['post_id'], $_SESSION['userId']);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);

                            $resultCheck = mysqli_stmt_num_rows($stmt);

                            if ($resultCheck == 0)
                            {
                                $voted_u = true;
                            }
                        }

                        $sql = "select votePost, voteBy, vote from postvotes "
                            . "where votePost=? "
                            . "and voteBy=? "
                            . "and vote=-1";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            die('sql error');
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ss", $row['post_id'], $_SESSION['userId']);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);

                            $resultCheck = mysqli_stmt_num_rows($stmt);

                            if ($resultCheck == 0)
                            {
                                $voted_d = true;
                            }
                        }
                        
                        
                        echo '<div class="card post">  
                                <span class="date">'.date("F jS, Y", strtotime($row['post_date']))
                                .'<span class="span-post-no">#'.$i.'  '. '<a href="report-post.php"><i class="fa fa-exclamation-circle" style="font-size:23px;"></i></a></span> </span>
                                <div class="row">

                                    <div class="col-sm-3 user">
                                        <div class="text-center">
                                            <img src="uploads/'.$row['userImg'].'" class="img-fluid center-block user-img">
                                            <h3>'.$row['uidUsers'].'</h3>
                                            <small class="text-muted">'.$row['headline'].'</small><br><br>
                                            <table style="width:100%">
                                                <tr>
                                                    <th>Joined:</th>
                                                    <td>Sep 27, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th>Messages:</th>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <th>Likes:</th>
                                                    <td>0</td>
                                                </tr>
                                            </table>
                                            <a href="profile.php?id='.$row['idUsers'].'">
                                                <i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
                                  
                                            <a href="message.php?id='.$row['idUsers'].'">
                                                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>';
                                            
                                        
                                       if ($_SESSION['userLevel'] == 1 || $_SESSION['userId'] == $row['post_by'])
                                                {     
                                                    echo '<a href="Edit-forum.php?id= '.$row['post_id'].' ">
                                                    <i class="fa fa-pencil fa-2x edit-blog" aria-hidden="true"></i>
                                                    </a>';
                                                }    
                                                
                                                
                                     echo   ' 
                                     
                                     <a href="https://twitter.com/intent/tweet?text=%20%2B1%20 XRTemplate %20'.$row['headline'].' %20%23tipwithxumm%20%20%20%20%20%20%20%20%20%20%20%20%20 Content Title:%20['.$row['post_content'].'] %20By%20 '.$row['f_name'].'%20'.$row['l_name'].' Content Type: Forum">
                                     <i class="fa fa-send fa-2x" aria-hidden="true"></i></a> </div>
                                     
                                    </div>
                                   
              
                                    <div class="col-sm-9 post-content">
                                        <p>'.$row['post_content'].'</p>
                                            <div class="vote text-center">';
                        
                        if ( ($row['post_by']==$_SESSION['userId']) || ($_SESSION['userLevel'] == 1)|| ($_SESSION['userLevel'] == 2))
                        {
                            echo '<a href="includes/delete-post.php?topic='.$topic.'&post='.$row['post_id'].'&by='.$row['post_by'].'" >'
                                . '<i class="fa fa-trash fa-2x" aria-hidden="true"></i></a><br>';
                        }
                        
                        if ($voted_u)
                        {
                            echo "<a href='includes/post-vote.inc.php?topic=".$topic."&post=".$row['post_id']."&vote=1' >";
                        }
                        echo '<i class="fa fa-chevron-up fa-3x" aria-hidden="true"></i></a>';

                        
                        echo '<br><span class="vote-count">'.$row['post_votes'].'</span><br>';
                        
                        
                        if ($voted_d)
                        {
                            echo "<a href='includes/post-vote.inc.php?topic=".$topic."&post=".$row['post_id']."&vote=-1' >";
                        }
                        echo '<i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></a>';
                        
                        
                        echo            '</div>
                                    </div>
                                </div>
                                <span class="likes"><span class="span-post-no"></span> <span class="span-post-no"><a
                                        href="">OnAid Forum</a></span></span>
                            </div>';
                                            
                        $i++;
                    }
                }
            
            ?>
            
        
    </div>
    
    
    <div class="col-sm-12">
        <form method="post" action="">
            <fieldset>
                <div class="form-group">
                    <textarea name="reply-content" class="form-control" id="reply-form" rows="7"></textarea>
                </div>
                <input type="submit" value="Submit reply" class="btn btn-lg btn-dark" name="submit-reply">
            </fieldset>
        </form>
        
    </div> 
</div>
    
    <?php include 'includes/footer.php'; ?>
    
    
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script> 
// Global Variable used to store the quotes 
// fetched from the API
var data;
let front = true;
  
// Getting the front and the back author boxes
const authors = document.querySelectorAll(".author");
  
// Getting the front and the back texts
const texts = document.querySelectorAll(".text");
  
// Getting the body
const body = document.getElementById("body");
  
// Getting the buttons
const button = document.querySelectorAll(".new-quote");
  
const blockFront = document.querySelector(".block__front");
const blockBack = document.querySelector(".block__back");
  
const authorFront = authors[0];
const authorBack = authors[1];
  
const textFront = texts[0];
const textBack = texts[1];
  
const buttonFront = button[0];
const buttonBack = button[1];
  
  
// An arrow function used to get a quote randomly
const displayQuote = () =>{
  
    // Generates a random number between 0 
    // and the length of the dataset
    let index = Math.floor(Math.random()*data.length);
  
    // Stores the quote present at the randomly generated index
    let quote = data[index].text;
  
    // Stores the author of the respective quote
    let author = data[index].author;
  
    // Making the author anonymous if no author is present
    if(!author){
        author = "Anonymous"
    }
  
    // Replacing the current quote and the author with a new one
  
    if(front){
        // Changing the front if back-side is displayed
        textFront.innerHTML = quote;
        authorFront.innerHTML = author;
    }else{
        // Changing the back if front-side is displayed
        textBack.innerHTML = quote;
        authorBack.innerHTML = author;
    }
      
    front = !front;
  
}
  
// Fetching the quotes from the type.fit API using promises
fetch("https://type.fit/api/quotes")
    .then(function(response) {
        return response.json(); 
    }) // Getting the raw JSON data
    .then(function(data) {
  
        // Storing the quotes internally upon 
        // successful completion of request
        this.data = data; 
  
        // Displaying the quote When the Webpage loads
        displayQuote() 
});
  
  
// Adding an onclick listener for the button
function newQuote(){
      
    // Rotating the Quote Box
    blockBack.classList.toggle('rotateB');
    blockFront.classList.toggle('rotateF');
  
    // Displaying a new quote when the webpage loads
    displayQuote();
}</script>
    
    </body>
</html>