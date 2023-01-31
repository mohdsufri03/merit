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
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Installation Settings</h4>
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
											<th>Username</th>
											<th>Email Address</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Nicky Almera</td>
											<td>nicky@hotmail.com</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Edmund Wong</td>
											<td>edmund@yahoo.com</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Harvinder Singh</td>
											<td>harvinder@gmail.com</td>
										</tr>
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