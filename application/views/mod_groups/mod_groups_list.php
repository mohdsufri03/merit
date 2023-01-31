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
					<li class="breadcrumb-item active">Groups Management</li>
				</ol>
				<!-- END breadcrumb -->
				<!-- BEGIN page-header -->
				<h1 class="page-header">Groups Management <small></small></h1>
				<!-- END page-header -->
			
				<!-- BEGIN panel -->
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Group List</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> New Group</a>
						</div>
					</div>
					<div class="panel-body">
					    
						<div class="table-responsive">
						    <!--
						    <div class="float-end pb-2">
                      	  <button class="btn btn-primary btn-sm" type="button" onclick="location.href = '<?php echo site_url('mod_groups/create')?>'">
                          <span><span class="fas fa-plus"></span>&nbsp; New Mod_groups</span></button>
                      </div>-->
								<table class="table mb-0">
									<thead class="bg-200 text-900">
                              <tr>
                                <th><input class="ml-3" type="checkbox" aria-label="Checkbox for this table"></th>
                                <th>No</th>
								<th>Mod Groups Name</th>
								<th>Mod Groups Key</th>
								<th>Mod Groups Meta Type</th>
								<th>Mod Groups Parent Id</th>
								<th>Mod Groups Icon</th>
								<th>Mod Groups Sqn</th>
								<th>Mod Groups Enabled</th>
								<th>Action</th>
                              </tr>
                          </thead>
                          <tbody><?php foreach($mod_groups_data as $mod_groups):?>
                          <?php //print_r($mod_groups)?>
							<tr>
								<td class="align-middle"><input class="ml-3" type="checkbox" aria-label="Checkbox for this row"></td>
								<td width="80px" class="align-middle"><?php echo ++$start ?></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_name ?></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_key ?></td>
								<td class="align-middle"><a href="<?php echo site_url('mod_groups/child/'.$mod_groups->mod_groups_meta_type)?>"><?php echo $mod_groups->mod_meta_name ?></a></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_parent_id ?></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_icon ?></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_sqn ?></td>
								<td class="align-middle"><?php echo $mod_groups->mod_groups_enabled ?></td>
								<td class="align-middle">
									<div class="dropdown text-sans-serif">
										<button aria-expanded="false" aria-haspopup="true" class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" data-boundary="viewport" data-toggle="dropdown" id="dropdown1" type="button">
										<span class="fas fa-ellipsis-h fs==1"></span></button>
										<div aria-labelledby="dropdown1" class="dropdown-menu dropdown-menu-right border py-0">
											<div class="bg-white py-2">
												<a class="dropdown-item" href="<?php echo site_url("mod_groups/read/".$mod_groups->mod_groups_id)?>">View</a>
												<a class="dropdown-item" href="<?php echo site_url("mod_groups/update/".$mod_groups->mod_groups_id)?>">Edit</a>
												<div class="dropdown-divider"></div>
													<a class="dropdown-item text-danger" href="<?php echo site_url("mod_groups/delete/".$mod_groups->mod_groups_id)?>" onclick="javascript: return confirm('This action cannot be recovered. Continue ?')">Delete</a>
												</div>
										</div>
									</div>
								</td>
							</tr>
							<?php endforeach?>
                          </tbody>
								</table>
								
								</div>
								<div class="row pt-3">
								    <div class="col">Total Record : <?php echo $total_rows ?></div>
								<div class="col col-auto">
								        <span class="float-end">
    									    <?php echo $pagination ?>
    								    </span>
								    </div>
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