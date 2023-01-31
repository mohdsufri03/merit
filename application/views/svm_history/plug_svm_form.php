<!doctype html>
<html>
    <head>
        <title>PORTAL SISTEM MERIT DEMERIT</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                margin:15% auto 15% auto;
                margin-left:15% auto 15% auto ; 
                margin-right: 15% auto 15% auto;
                width: 30%;
                padding: 15px;
                background-color: rgb(255, 254, 34);

            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">KSK <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
	        <?php //print_r($plug_student);?>
            <label for="int">Student<?php echo form_error('plug_svm_student_id') ?></label>
            <select id="plug_svm_student_id" name="plug_svm_student_id">
              <option>-- Select a student --</option>
              <?php foreach($plug_student as $val):?>
              <option value="<?php echo $val->plug_customer_id?>"><?php echo $val->plug_customer_name.' '.$val->plug_customer_last_name?></option>
              <?php endforeach?>
            </select>
        
        </div>
	    <div class="form-group">
            <label for="int">Merit / Demerit <?php echo form_error('plug_svm_value') ?></label>
            <input type="text" class="form-control" name="plug_svm_value" id="plug_svm_value" placeholder=" Merit Value" value="<?php echo $plug_svm_value; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kod Kesalahan <?php echo form_error('plug_svm_code') ?></label>
            <input type="text" class="form-control" name="plug_svm_code" id="plug_svm_code" placeholder=" Merit Code" value="<?php echo $plug_svm_code; ?>" />
        </div>
	    <input type="hidden" name="plug_svm_id" value="<?php echo $plug_svm_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('svm_history') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>