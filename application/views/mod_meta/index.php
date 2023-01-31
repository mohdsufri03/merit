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
	
		<?php $this->load->view('includes/sidebar',array('active'=>12));?>
		
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
				<h1 class="page-header">Meta Management</h1>
				<!-- END page-header -->
			
				<!-- BEGIN panel -->
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Meta List</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Meta Key</th>
											<th>Meta Name</th>
											<th>Childs</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									    <?php foreach($mod_meta_data as $mod_meta):?>
									    
									    <?php
									        $meta_name = explode("_",$mod_meta->mod_meta_key);
									        $meta_string = null;
									        foreach($meta_name as $mn){
									            $meta_string.= isset($mn) ? ucfirst($mn).' ':'';
									        }
									        //print_r($meta_string);
									    ?>
									<tr>
										<td width="80px" class="align-middle"><?php echo ++$start ?></td>
										<td class="align-middle"><?php echo $mod_meta->mod_meta_key ?></td>
        								<td class="align-middle"><?php echo $meta_string ?></td>
        								<td class="align-middle text-right"><?php echo $mod_meta->mod_meta_count ?></td>
        								<td class="align-middle"><?php echo $mod_meta->mod_meta_enabled ? '<span class="badge bg-success">Enabled</span>':'';?></td>
        								<td><a href="<?php echo site_url('mod_meta/meta_child/'.$mod_meta->mod_meta_key)?>" class="btn btn-default btn-sm me-5px"><i class="fa fa-magnifying-glass"></i> View</a></td>
        							</tr>
										<?php endforeach?>
									</tbody>
								</table>
							</div>
					</div>
				</div>
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