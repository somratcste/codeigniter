<h2>
    Edit Profile
</h2>
<hr>
<br/>
<form name="edit_profile" action="<?php echo base_url();?>index.php/blogger/update_user" method="post" onsubmit="return validateStandard(this)">
    <table border="0" align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $result->first_name;?>" tabindex="1" size="40" required="1" regexp="JSVAL_RX_ALPHA" err="Enter First Name.." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $result->last_name;?>" size="40" tabindex="2" required="1" regexp="JSVAL_RX_ALPHA" err="Enter Last Name.."/><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address" size="40" placeholder="Email Address" value="<?php echo $result->email_address;?>" tabindex="3" required="1" regexp="JSVAL_RX_EMAIL" err="Enter Valid Email Address.." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6">
                    <?php echo $result->address;?>
                </textarea></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile_no" value="<?php echo $result->mobile_no;?>" size="40" placeholder="Your Mobile No" tabindex="7"/></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" size="40" placeholder="Your City" value="<?php echo $result->city;?>" tabindex="8" /></td>
        </tr>
        <tr>
            <td>Gander:</td>
            <td>
                <?php
                    if($result->gender=='male')
                    {
                ?>
                <input type="radio" name="gander" value="male" checked="checked"  />Male
                <?php } else{
                ?>
                <input type="radio" name="gander" value="male"  />Male
                <?php } 
                
                ?>
                <?php
                    if($result->gender=='female')
                    {
                ?>
                <input type="radio" name="gander" value="female" checked="checked"  />Female
                <?php } else{
                ?>
                <input type="radio" name="gander" value="female"  />Female
                <?php } 
                
                ?>
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><select tabindex="9" name="country" required="1" exclude=" "  value="<?php echo $result->country;?>">
                    <option value=" ">Select Country..........</option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select><span class="required">*</span>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zip_code" size="40" placeholder="Your Zip Code" value="<?php echo $result->zip_code;?>" tabindex="10"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Update"/></td>
        </tr>
    </table>
</form>

 <script type="text/javascript" language="javascript">
        document.forms['edit_profile'].elements['country'].value = '<?php echo $result->country?>';
</script>
