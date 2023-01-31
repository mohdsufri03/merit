<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
                
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">ISK STUDENT Read</h2>
        <table class="table">
	    <tr><td>Plug Isk Student Id</td><td><?php echo $plug_svm_student_id; ?></td></tr>
	    <tr><td>Plug Isk Value</td><td><?php echo $plug_svm_value; ?></td></tr>
	    <tr><td>Plug Isk Code</td><td><?php echo $plug_svm_code; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('svm_history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>