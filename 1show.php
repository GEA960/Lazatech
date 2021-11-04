<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                
                <thead>
                    <tr class="table-primary">
                        <th width="20%">Blog_ID</th>
                        <th width="20%">Blog_Title</th>
                        <th width="50%">Blog_Content</th>
                        <th width="30%">Link</th>
                       
                        
                    </tr>
                </thead>
                <?php
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
                    <td><?php echo $row['blog_id'];?> </td>
                    <td><?php echo $row['blog_title'];?></td>
                    <td><?php echo $row['blog_content'];?></td>
                    <td>   </td> 
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);?>
    </div>
</div>
</div>