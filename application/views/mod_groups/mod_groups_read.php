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
        <h2 style="margin-top:0px">Mod_groups Read</h2>
        <table class="table">
	    <tr><td>Mod Groups Name</td><td><?php echo $mod_groups_name; ?></td></tr>
	    <tr><td>Mod Groups Key</td><td><?php echo $mod_groups_key; ?></td></tr>
	    <tr><td>Mod Groups Meta Type</td><td><?php echo $mod_groups_meta_type; ?></td></tr>
	    <tr><td>Mod Groups Parent Id</td><td><?php echo $mod_groups_parent_id; ?></td></tr>
	    <tr><td>Mod Groups Icon</td><td><?php echo $mod_groups_icon; ?></td></tr>
	    <tr><td>Mod Groups Sqn</td><td><?php echo $mod_groups_sqn; ?></td></tr>
	    <tr><td>Mod Groups Enabled</td><td><?php echo $mod_groups_enabled; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mod_groups') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>