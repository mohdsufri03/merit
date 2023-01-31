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
        <h2 style="margin-top:0px">Plug_customer Read</h2>
        <table class="table">
	    <tr><td>Plug Customer Name</td><td><?php echo $plug_customer_name; ?></td></tr>
	    <tr><td>Plug Customer Last Name</td><td><?php echo $plug_customer_last_name; ?></td></tr>
	    <tr><td>Plug Customer Ic</td><td><?php echo $plug_customer_ic; ?></td></tr>
	    <tr><td>Plug Customer Gender Meta</td><td><?php echo $plug_customer_gender_meta; ?></td></tr>
	    <tr><td>Plug Customer Occupation</td><td><?php echo $plug_customer_occupation; ?></td></tr>
	    <tr><td>Plug Customer Phone</td><td><?php echo $plug_customer_phone; ?></td></tr>
	    <tr><td>Plug Customer Email</td><td><?php echo $plug_customer_email; ?></td></tr>
	    <tr><td>Plug Customer Marital Meta</td><td><?php echo $plug_customer_marital_meta; ?></td></tr>
	    <tr><td>Plug Customer Height</td><td><?php echo $plug_customer_height; ?></td></tr>
	    <tr><td>Plug Customer Weight</td><td><?php echo $plug_customer_weight; ?></td></tr>
	    <tr><td>Plug Customer Address</td><td><?php echo $plug_customer_address; ?></td></tr>
	    <tr><td>Plug Customer Data</td><td><?php echo $plug_customer_data; ?></td></tr>
	    <tr><td>Plug Customer Media</td><td><?php echo $plug_customer_media; ?></td></tr>
	    <tr><td>Plug Customer Status</td><td><?php echo $plug_customer_status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('student') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>