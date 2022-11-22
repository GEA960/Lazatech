

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
$userid = $_SESSION['userId'];
$sql = "select * from users where idUsers = ".$userid;
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
    <style>



a {
    text-decoration: none;
    outline: none;
}

ul li {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
}

ul li:hover p{
    transform: scale(1.5);
    opacity: 1;
}
ul li:hover a{
    opacity: 1;
}

i{
    color: #fff;
}

.selector-menu {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
}

.selector-menu a {
    background: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 75px;
    height: 60px;
}
.selector-menu a:hover:not(:focus){
    background: rgba(0,0,0,0.6);
}
.selector-menu a:focus {
    transform: scale(1.2);
    background: rgba( 0,0,0, 0.9);
    box-shadow: 0 0 10px 2px rgba(0,0,0,0.6);
}

.menu-container{
  margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;
  background-color: black;
  


}

.header-img{
    background:url("img/TokenBalanceBG.png") no-repeat right/cover;
    height: 300px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
}

.overlay{
    background: rgba(0,0,0,0.2);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: absolute;
    width: 100%;
    height: 100%;
}

.balance{
    color: #fff;
    position: absolute;
    bottom: 20px;
    left: 20px;
    
}

.balance h1 {
    font-size:1.6rem;
}

.balance div{
    display: flex;
    align-items: center;
    
}

.balance p{
    font-size: 1.2rem;
    font-weight: bold;
    padding:5px;
}

.list a, .list p{
    color: #000;
    opacity: 0.4;;
}
.item {
    background: #fff;
    padding: 20px;
}

.item:not(:last-child){
    border-bottom: 1px solid #dedede;
}
.item:last-child{
    border-bottom-left-radius: 5px ;
    border-bottom-right-radius: 5px;
}


    </style>
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



  
        
    <div class="menu-container">
    <br><br><br>
      <div class="header-img">
        <div class="overlay"></div>
        <div class="balance">
          <h1>$LZT Token Balance</h1>
          <div>
            <i class="fas fa-money-bill-alt"></i>
            <p><?php echo $user['TokenBalance']; ?> LZT TOKEN</p>
          </div>
        </div>
      </div>

      <ul class="list">
        <li class="item">
          <a href="#">Withdrawal Not allowed Yet</a>
          <p>--</p>
        </li>
        <li class="item">
          <a href="#">Cash In not allowed Yet</a>
          <p>--</p>
        </li>
        <li class="item">
          <a href="#">No other tokens yet</a>
          <p>--</p>
        </li>
        <li class="item">
          <a href="#">No other tokens yet</a>
          <p>--</p>
        </li>
      </ul>
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

    </script>  
    <!--<script src="js/plag.js" type="module"></script> -->
</body>
</html>