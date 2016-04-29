<h2>Login form</h2>
<h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception))
    {
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    
    ?>
</h3>
<form action="<?php echo base_url();?>index.php/login/check_login" method="post" onsubmit="return validateStandard(this)">
    <table  align="center">
        <tr>
            <td>User Email:</td>
            <td><input type="text" name="email_address" placeholder="Email Address" tabindex="1"  required="1" regexp="JSVAL_RX_EMAIL" err="Enter Email Address.."/></td>
        </tr>
        
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Your Password" tabindex="4"  required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="passwored not valid"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Login"/></td>
        </tr>
    </table>
</form>