<form action="<?php echo base_url()?>index.php/blogger/update_blog" method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Add Blog</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Blog Title:</td>
            <td>
                <input type="text" name="blog_title" value="<?php echo $result->blog_title;?>" placeholder="Blog Title" tabindex="1" maxlength="25" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span>
                <input type="hidden" name="blog_id" value="<?php echo $result->blog_id;?>"  />
            </td> 
        </tr>
         <tr>
            <td>Select Category : </td>
            <td>
                <select name="cat_id">
                  
                  <?php foreach ($all_category as $v_category) {

                    if($result->cat_id == $v_category->cat_id) {

                    ?>

                      <option value="<?php echo $v_category->cat_id;?>" selected><?php echo $v_category->cat_name; ?></option>

                      <?php 

                      } else { ?> 

                        <option value="<?php echo $v_category->cat_id;?>"><?php echo $v_category->cat_name; ?></option>


                    <?php 

                      }

                    }
                  ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Blog Description:</td>
            <td>
                <textarea name="blog_description" placeholder="Blog Description" id="ck_editor" tabindex="2" cols="31"><?php echo $result->blog_description;?></textarea> <?php echo display_ckeditor($abcd['ckeditor']); ?>
<span class="required"> * </span></td> 
        </tr>       
        <tr>
            <td>Status:</td>
            <td>
                <?php 
                    if($result->status==1)
                    {
                ?>
                <input type="radio" name="status" value="1" tabindex="3" checked="checked" />Publish
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="status" value="1" tabindex="3"  />Publish
                <?php } ?>
                <?php 
                    if($result->status==0)
                    {
                ?>
                <input type="radio" name="status" value="0" tabindex="4" checked="checked" />Unpublish
                <?php
                    }
                    else{
                ?>
                <input type="radio" name="status" value="0" tabindex="3"  />Unpublish
                <?php } ?>
                
            </td>
        </tr>
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Update"/></td>
        </tr>
    </table>
</form>
