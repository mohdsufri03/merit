<html>
    <head>
        <title>Register Here</title>
    </head>
    <body>
        <h1>Register Here</h1>
        <?php //echo validation_errors();?>
        <?php echo form_open ();?>
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type='text' name='uname' value="<?php echo set_value("uname"); ?>" />
                    <?php echo form_error('uname');?>
            </td>
            </tr>
            <tr>
                <td>Email</td>
                
                <td>
                    <input type='text' name='email' value="<?php echo set_value("email"); ?>" />
                    <?php echo form_error('email');?>
            </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type='password' name='pwd' />
                    <?php echo form_error('pwd');?>
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type='password' name='cpwd' />
                    <?php echo form_error('cpwd');?>
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type='text' name='mobile' value="<?php echo set_value("mobile"); ?>" />
                    <?php echo form_error('mobile');?>
            </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type='radio' name='gender' value="Male" <?php if(set_value('gender') == "Male") echo "checked"; ?>/>Male
                    <input type='radio' name='gender' value="Female" <?php if(set_value('gender') == "Female") echo "checked"; ?>/>Female 
                    <?php echo form_error('gender');?>  
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' name='Register' /></td>
            </tr>
        </table>
        <?php echo form_close ();?>
    </body>
</html>