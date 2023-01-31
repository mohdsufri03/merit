<!DOCTYPE html>
<html lang="en" >
<head>
	<?php $this->load->view('includes/header');?>
	<!-- ================== END core-css ================== -->
</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">
		<!-- BEGIN #header -->
		<?php $this->load->view('includes/top_nav');?>
	
		<?php $this->load->view('includes/sidebar');?>
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content d-flex flex-column p-0">
			<!-- BEGIN content-container -->
			<div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">
				<!-- BEGIN breadcrumb -->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
					<li class="breadcrumb-item"><a href="javascript:;">Developer</a></li>
					<li class="breadcrumb-item active">Meta Management</li>
				</ol>
				<!-- END breadcrumb -->
				<!-- BEGIN page-header -->
				<h1 class="page-header">Page with Fixed Footer <small>header small text goes here...</small></h1>
				<!-- END page-header -->
			
				<!-- BEGIN panel -->
				        <h2 style="margin-top:0px">Plug_tnc <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="plug_tnc_title">T&C Title <?php echo form_error('plug_tnc_title') ?></label>
            <input type="text" class="form-control" name="plug_tnc_title" id="plug_tnc_title" placeholder="T&C Title" value="<?php echo $plug_tnc_title; ?>" />
        </div>
	    <div class="form-group">
            <label for="plug_tnc_description">T&C Description <?php echo form_error('plug_tnc_description') ?></label>
            <textarea class="form-control" rows="5" name="plug_tnc_description" id="plug_tnc_description" placeholder="T&C Description"><?php echo $plug_tnc_description; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="plug_tnc_path">T&C URL Path <?php echo form_error('plug_tnc_path') ?></label>
            <input type="text" class="form-control" name="plug_tnc_path" id="plug_tnc_path" placeholder="Leave blank if no T&C content for customer to read" value="<?php echo $plug_tnc_path; ?>" />
        </div>
	    <div class="form-group">
            <label for="plug_tnc_page">T&C Page Content <?php echo form_error('plug_tnc_page') ?></label>
            <textarea class="form-control" rows="10" name="plug_tnc_page" id="plug_tnc_page"><?php echo $plug_tnc_page; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Plug Tnc Status <?php echo form_error('plug_tnc_status') ?></label>
            <input type="text" class="form-control" name="plug_tnc_status" id="plug_tnc_status" placeholder="Plug Tnc Status" value="<?php echo $plug_tnc_status; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Plug Tnc Updated <?php echo form_error('plug_tnc_updated') ?></label>
            <input type="text" class="form-control" name="plug_tnc_updated" id="plug_tnc_updated" placeholder="Plug Tnc Updated" value="<?php echo $plug_tnc_updated; ?>" />
        </div>
	    <input type="hidden" name="plug_tnc_id" value="<?php echo $plug_tnc_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('plug_tnc') ?>" class="btn btn-default">Cancel</a>
	</form>
				<!-- END panel -->
			</div>
			<!-- END content-container -->
			<?php $this->load->view('includes/footer');?>
			
				
			
			
		</div>
		<!-- END #content -->
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<?php $this->load->view('includes/js_footer');?>
</body>
</html>