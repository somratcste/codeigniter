<?php
    foreach($result as $vresult)
    {
?>
<div class="post">
    <h2 class="title"><?php echo $vresult->blog_title;?></h2>
    <div class="story">
        <p>
            <?php echo $vresult->blog_description;?>
        </p>
    </div>
    <div class="meta">
        <p class="date">Posted on February 22, 2007 by Admin</p>
        <p class="file">Filed under <a href="#">Uncategorized</a>
            | <a href="#">Edit</a> | <a href="#">28
                Comments</a></p>
    </div>
</div> 
<?php } ?>
