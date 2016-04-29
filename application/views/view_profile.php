<br/>
<br/>

<h2>
    Profile Info <a href="<?php echo base_url();?>index.php/blogger/edit_profile">Edit</a>
</h2>
<hr/>
<br/>
    <table border="0" align="center">
        <tr>
            <td>Full Name:</td>
            <td>
                <?php 
                    echo $result->first_name.' '.$result->last_name;
                ?>
            </td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td>
                <?php 
                    echo $result->email_address;
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Address:</td>
            <td>
                <?php 
                    echo $result->address;
                ?>
            </td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td>
                <?php 
                    echo $result->mobile_no;
                ?>
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>
                <?php 
                    echo $result->city;
                ?>
            </td>
        </tr>
        <tr>
            <td>Gander:</td>
            <td>
                <?php 
                    echo $result->gender;
                ?>
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td> 
                <?php 
                    echo $result->country;
                ?>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td>
                <?php 
                    echo $result->zip_code;
                ?>
            </td>
        </tr>
        
    </table>
