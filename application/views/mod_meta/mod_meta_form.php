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
        <h2 style="margin-top:0px">Mod_meta <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Mod Meta Parent Id <?php echo form_error('mod_meta_parent_id') ?></label>
            <input type="text" class="form-control" name="mod_meta_parent_id" id="mod_meta_parent_id" placeholder="Mod Meta Parent Id" value="<?php echo $mod_meta_parent_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mod Meta Key <?php echo form_error('mod_meta_key') ?></label>
            <input type="text" class="form-control" name="mod_meta_key" id="mod_meta_key" placeholder="Mod Meta Key" value="<?php echo $mod_meta_key; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mod Meta Name <?php echo form_error('mod_meta_name') ?></label>
            <input type="text" class="form-control" name="mod_meta_name" id="mod_meta_name" placeholder="Mod Meta Name" value="<?php echo $mod_meta_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="mod_meta_params">Mod Meta Params <?php echo form_error('mod_meta_params') ?></label>
            <textarea class="form-control" rows="3" name="mod_meta_params" id="mod_meta_params" placeholder="Mod Meta Params"><?php echo $mod_meta_params; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Mod Meta Groupby Count <?php echo form_error('mod_meta_groupby_count') ?></label>
            <input type="text" class="form-control" name="mod_meta_groupby_count" id="mod_meta_groupby_count" placeholder="Mod Meta Groupby Count" value="<?php echo $mod_meta_groupby_count; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Mod Meta Core <?php echo form_error('mod_meta_core') ?></label>
            <input type="text" class="form-control" name="mod_meta_core" id="mod_meta_core" placeholder="Mod Meta Core" value="<?php echo $mod_meta_core; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Mod Meta Seqn <?php echo form_error('mod_meta_seqn') ?></label>
            <input type="text" class="form-control" name="mod_meta_seqn" id="mod_meta_seqn" placeholder="Mod Meta Seqn" value="<?php echo $mod_meta_seqn; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Mod Meta Enabled <?php echo form_error('mod_meta_enabled') ?></label>
            <input type="text" class="form-control" name="mod_meta_enabled" id="mod_meta_enabled" placeholder="Mod Meta Enabled" value="<?php echo $mod_meta_enabled; ?>" />
        </div>
	    <input type="hidden" name="mod_meta_id" value="<?php echo $mod_meta_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mod_meta') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>