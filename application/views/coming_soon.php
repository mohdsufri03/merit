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

    			<div class="card h-100">
    				<div class="card-body">
    					<!-- BEGIN app content-->
    			        <div id="content" class="d-flex align-items-center justify-content-center">
    			            <!-- /Under Maintenance -->
    			            <div class="container mt-5" style="text-align: center;">
    			              <h2 class="mb-2 mx-2">Under Development!</h2>
    			                <p class="mb-4 mx-2">
    			                  Sorry for the inconvenience but we're performing some maintenance at the moment
    			                </p>
    			                <!--<a href="" class="btn btn-primary">Back to home</a> -->
    			                <div class="mt-4">
    			                  <img src="../assets/img/cover/girl-doing-yoga-light.png" alt="girl-doing-yoga-light" width="500" class="img-fluid" data-app-dark-img="coming-soon/girl-doing-yoga-dark.png" data-app-light-img="coming-soon/girl-doing-yoga-light.png">
    			            </div>
    			            </div>
    			        </div>
    				</div>
    			</div>

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