<!doctype html>
<html>
    <head>
        <title>PORTAL SISTEM MERIT DEMERIT</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
                margin:15% auto 15% auto;
                margin-left:15% auto 15% auto ; 
                margin-right: 15% auto 15% auto;
                width: 20%;
                background-color: rgb(255, 254, 34);
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">KSK <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">First Name <?php echo form_error('plug_customer_name') ?></label>
            <input type="text" class="form-control" name="plug_customer_name" id="plug_customer_name" placeholder="NAMA PELAJAR" value="<?php echo $plug_customer_name; ?>" autocomplete="off" />
        </div>
	    <div class="form-group">
            <label for="varchar">Last Name <?php echo form_error('plug_customer_last_name') ?></label>
            <input type="text" class="form-control" name="plug_customer_last_name" id="plug_customer_last_name" placeholder="NAMA AKHR PELAJAR" value="<?php echo $plug_customer_last_name; ?>" autocomplete="off" />
        </div>
	    <div class="form-group">
            <label for="varchar">Student ID <?php echo form_error('plug_customer_ic') ?></label>
            <input type="text" class="form-control" name="plug_customer_ic" id="plug_customer_ic" placeholder="IC PELAJAR" value="<?php echo $plug_customer_ic; ?>" autocomplete="off" />
        </div>
	    
	    <input type="hidden" name="plug_customer_id" value="<?php echo $plug_customer_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('student') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>