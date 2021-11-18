<?php
error_reporting(0);
$pref_value= $_GET ['pref_value'];


if($_GET['pref_value'] == 'forum'){

    echo '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                        <th width="50%">Forum</th>
                        <th width="30%">Link(Copy and paste this link to your URL)</th>
                       
                        
                    </tr>
                </thead>';
                
                echo '<font color="red">';   
                echo 'Keyword(s) = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM posts
                    WHERE post_content LIKE '%$q%' 
                 ORDER BY post_votes DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                                    
                
                
                echo '<tr>';
            echo '<td>'; echo $row['post_content']; echo '</td>'; 
            echo '<td> <a href= "http://onaid/posts.php?topic=';  echo $row['post_topic']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
            echo '</tr>';
             } 
             echo ' </table>';
        mysqli_close($con);  
        echo '</div>
</div>
</div>';

             
             }      






if($_GET['pref_value'] == 'blog'){

    echo '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                    <th width="20%">Blog_Title</th>
                    <th width="50%">Blog_Content</th>
                    <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>';
                
                echo '<font color="red">';   
                echo 'Keyword(s) = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM blogs
                WHERE blog_title LIKE '%$q%' OR blog_content LIKE '%$q%'
                ORDER BY blog_id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                                    
                
                
                echo '<tr>';
            echo '<td>'; echo $row['blog_title']; echo '</td>'; 
            echo '<td>'; echo $row['blog_content']; echo '</td>'; 
            echo '<td> <a href= "http://onaid/blog-page.php?id=';  echo $row['blog_id']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
            echo '</tr>';
             } 
             echo ' </table>';
        mysqli_close($con);  
        echo '</div>
</div>
</div>';

             
             } 
             



             

if($_GET['pref_value'] == 'blog'){

    echo '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                    <th width="20%">Blog_Title</th>
                    <th width="50%">Blog_Content</th>
                    <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>';
                
                echo '<font color="red">';   
                echo 'Keyword(s) = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM blogs
                WHERE blog_title LIKE '%$q%' OR blog_content LIKE '%$q%'
                ORDER BY blog_id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                                    
                
                
                echo '<tr>';
            echo '<td>'; echo $row['blog_title']; echo '</td>'; 
            echo '<td>'; echo $row['blog_content']; echo '</td>'; 
            echo '<td> <a href= "http://onaid/blog-page.php?id=';  echo $row['blog_id']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
            echo '</tr>';
             } 
             echo ' </table>';
        mysqli_close($con);  
        echo '</div>
</div>
</div>';

             
             } if($_GET['pref_value'] == 'blog'){

    echo '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                    <th width="20%">Blog_Title</th>
                    <th width="50%">Blog_Content</th>
                    <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>';
                
                echo '<font color="red">';   
                echo 'Keyword(s) = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM blogs
                WHERE blog_title LIKE '%$q%' OR blog_content LIKE '%$q%'
                ORDER BY blog_id DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                                    
                
                
                echo '<tr>';
            echo '<td>'; echo $row['blog_title']; echo '</td>'; 
            echo '<td>'; echo $row['blog_content']; echo '</td>'; 
            echo '<td> <a href= "http://onaid/blog-page.php?id=';  echo $row['blog_id']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
            echo '</tr>';
             } 
             echo ' </table>';
        mysqli_close($con);  
        echo '</div>
</div>
</div>';

             
             }              
             
             
             
             

             

if($_GET['pref_value'] == 'poll'){

           echo '<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                            
                      <thead>
                      <th width="20%">Poll Subject</th>
                      <th width="50%">Poll Description</th>
                            <th width="30%">Link</th>
                                   
                                    
                      </tr>
                      </thead>';
                            
                            echo '<font color="red">';   
                            echo 'Keyword(s) = ';
                            echo $_GET['q'];
                            echo '</font>';
                            echo '<br/>';             
                            $sql = "SELECT * FROM polls
                            WHERE 'subject' LIKE '%$q%' OR poll_desc LIKE '%$q%'
                            ORDER BY id DESC";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                                
                            
                            
                            echo '<tr>';
                        echo '<td>'; echo $row['subject']; echo '</td>'; 
                        echo '<td>'; echo $row['poll_desc']; echo '</td>'; 
                        echo '<td> <a href= "http://onaid/poll.php?poll=';  echo $row['id']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
                        echo '</tr>';
                         } 
                         echo ' </table>';
                    mysqli_close($con);  
                    echo '</div>
            </div>
            </div>';
            
                         
                         }             
                         
                         

                         

                    

                        
                         
                         
if($_GET['pref_value'] == 'event'){
                         
                  echo '
                  <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                  <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                                         
                  <thead>
                  <tr class="table-primary">
                  <th width="20%">Event Title</th>
                  <th width="50%">Event Headline</th>
                  <th width="30%">Event Description</th>
                  <th width="30%">Link</th>
                                                 
                  </tr>
                  </thead>';
                                         
                  echo '<font color="red">';   
                  echo 'Keyword(s) = ';
                  echo $_GET['q'];
                  echo '</font>';
                  echo '<br/>';             
                  $sql = "SELECT * FROM event_info
                  WHERE title LIKE '%$q%' OR headline LIKE '%$q%' OR 'description' LIKE '%$q%'
                  ORDER BY event_id DESC";
                  $result = mysqli_query($con, $sql);
                  while($row = mysqli_fetch_assoc($result)) {
                                                             
                                         
                                         
                  echo '<tr>';
                  echo '<td>'; echo $row['title']; echo '</td>'; 
                  echo '<td>'; echo $row['headline']; echo '</td>'; 
                  echo '<td>'; echo $row['description']; echo '</td>'; 
                  echo '<td> <a href= "http://onaid/event-page.php?id=';  echo $row['event_id']; echo'"><Center> <Button>LINK</Button> </Center></a> </td>'; 
                  echo '</tr>';
                                      } 
                  echo ' </table>';
                  mysqli_close($con);  
                  echo '</div>
                  </div>
                  </div>';
                         
                                      
                                      }      
                  ?>       

            


