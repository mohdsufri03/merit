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
        <h2 style="margin-top:0px">Mod_meta Read</h2>
        <table class="table">
	    <tr><td>Mod Meta Parent Id</td><td><?php echo $mod_meta_parent_id; ?></td></tr>
	    <tr><td>Mod Meta Key</td><td><?php echo $mod_meta_key; ?></td></tr>
	    <tr><td>Mod Meta Name</td><td><?php echo $mod_meta_name; ?></td></tr>
	    <tr><td>Mod Meta Params</td><td><?php echo $mod_meta_params; ?></td></tr>
	    <tr><td>Mod Meta Groupby Count</td><td><?php echo $mod_meta_groupby_count; ?></td></tr>
	    <tr><td>Mod Meta Core</td><td><?php echo $mod_meta_core; ?></td></tr>
	    <tr><td>Mod Meta Seqn</td><td><?php echo $mod_meta_seqn; ?></td></tr>
	    <tr><td>Mod Meta Enabled</td><td><?php echo $mod_meta_enabled; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mod_meta') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>