<table border="1" align="center">
    <tr>
        <th>Blog Title</th>
        <th>Blog Status</th>
        <th>Action</th>
    </tr>
    <?php 
        foreach($result as $vresult)
        {
    ?>
    <tr>
        <td><?php echo $vresult->blog_title;?></td>
        <td>
            <?php if($vresult->status==1)
            {
             echo "Published";               
            }
            else{
                echo "Unpublished";
            }
            ?>
        
        </td>
        <td>
            <a href="<?php echo base_url();?>index.php/blogger/edit_blog/<?php echo $vresult->blog_id?>">Edit</a> | 
            <a href="<?php echo base_url();?>index.php/blogger/delete_blog/<?php echo $vresult->blog_id?>" onclick="return checkDelete();">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>