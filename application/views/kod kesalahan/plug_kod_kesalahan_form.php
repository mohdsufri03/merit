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
            <label for="varchar">Jenis Kod Kesalahan <?php echo form_error('plug_customer_jenis_kod_kesalahan') ?></label>
            <input type="text" class="form-control" name="plug_customer_name" id="plug_customer_jenis_kod_kesalahan" placeholder="Nama Kod Kesalahan" value="<?php echo $plug_customer_jenis_kod_kesalahan; ?>" autocomplete="off" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nombor kod <?php echo form_error('plug_customer_nombor_kod_kesalahan') ?></label>
            <input type="text" class="form-control" name="plug_customer_last_name" id="plug_customer_nombor_kod_kesalahan" placeholder="Nombor kod kesalahan" value="<?php echo $plug_customer_nombor_kod_kesalahan; ?>" autocomplete="off" />
        </div>
	    
	    
	    <input type="hidden" name="plug_customer_id" value="<?php echo $plug_customer_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('student') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>