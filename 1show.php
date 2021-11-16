



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                        <th width="50%">Forum</th>
                        <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>
                <?php    
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
                                    
                ?>
                
                <tr>
                    <td><?php echo $row['post_content'];?></td> 
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);     ?>    
    </div>
</div>
</div>

             








<!--

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
                </thead>
                <?php /*
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
                                    
                ?>
                
                <tr>
                    <td><?php echo $row['blog_title'];?></td>
                    <td><?php echo $row['blog_content'];?></td>
                    <td>   </td> 
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);   */?>
    </div>
</div>
</div>

                -->



<!--
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                        <th width="20%">Poll Subject</th>
                        <th width="50%">Poll Description</th>
                        <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>
                <?php     /*
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
                                    
                ?>
                
                <tr>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['poll_desc'];?></td>
                    <td>   </td> 
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);  */  ?>
    </div>
</div>
</div>               

                -->




<!--
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
                </thead>
                <?php     /*
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
                                    
                ?>
                
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['headline'];?></td>
                    <td><?php echo $row['headline'];?></td>
                    <td>   </td> 
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con); */ ?>
    </div>
</div>
</div>               

                -->