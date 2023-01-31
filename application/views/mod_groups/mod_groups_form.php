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
        <h2 style="margin-top:0px">Mod_groups <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Mod Groups Name <?php echo form_error('mod_groups_name') ?></label>
            <input type="text" class="form-control" name="mod_groups_name" id="mod_groups_name" placeholder="Mod Groups Name" value="<?php echo $mod_groups_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mod Groups Key <?php echo form_error('mod_groups_key') ?></label>
            <input type="text" class="form-control" name="mod_groups_key" id="mod_groups_key" placeholder="Mod Groups Key" value="<?php echo $mod_groups_key; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Mod Groups Meta Type <?php echo form_error('mod_groups_meta_type') ?></label>
            <input type="text" class="form-control" name="mod_groups_meta_type" id="mod_groups_meta_type" placeholder="Mod Groups Meta Type" value="<?php echo $mod_groups_meta_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Mod Groups Parent Id <?php echo form_error('mod_groups_parent_id') ?></label>
            <input type="text" class="form-control" name="mod_groups_parent_id" id="mod_groups_parent_id" placeholder="Mod Groups Parent Id" value="<?php echo $mod_groups_parent_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mod Groups Icon <?php echo form_error('mod_groups_icon') ?></label>
            <input type="text" class="form-control" name="mod_groups_icon" id="mod_groups_icon" placeholder="Mod Groups Icon" value="<?php echo $mod_groups_icon; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Mod Groups Sqn <?php echo form_error('mod_groups_sqn') ?></label>
            <input type="text" class="form-control" name="mod_groups_sqn" id="mod_groups_sqn" placeholder="Mod Groups Sqn" value="<?php echo $mod_groups_sqn; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Mod Groups Enabled <?php echo form_error('mod_groups_enabled') ?></label>
            <input type="text" class="form-control" name="mod_groups_enabled" id="mod_groups_enabled" placeholder="Mod Groups Enabled" value="<?php echo $mod_groups_enabled; ?>" />
        </div>
	    <input type="hidden" name="mod_groups_id" value="<?php echo $mod_groups_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mod_groups') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>