<!DOCTYPE html>
<html lang="en">
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
					<li class="breadcrumb-item"><a href ="javascript:;">Home</a></li>
					<li class="breadcrumb-item"><a href ="javascript:;">Field Management</a></li>
					<li class="breadcrumb-item active">Field Management</a></li>
				</ol>
				<!-- END breadcrumb -->
				<!-- BEGIN page-header -->
				<h1 class="page-header">Field Management<small></small></h1>
				<!-- END page-header -->
				<div id="field_sequence_alert" class="alert alert-primary" role="alert">
					<strong>Sequence Updated Successful</strong>
				</div>
				<div id="pop_alert" class="alert alert-primary" role="alert">
					<strong><?php echo $this->session->flashdata('message'); ?></strong>
				</div>
				<!-- BEGIN panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<h4 class="panel-title">Field List</h4>
							<div class="panel-heading-btn">
								<!--<button type="submit" class="btn btn-danger btn-xs mx-2">Save</button>-->
								<!--<a href="<?php base_url() ?>/mod_meta_rr/create" class="btn btn-xs btn-success"><i class="fa fa-plus fa-xs"></i>New Field</a>-->
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col">
									<div class="float-end">
										<a href="<?php base_url() ?>/mod_meta_rr/create" type="button" class="btn btn-outline-primary ms-2 btn-sm" style="height: 31px;">
											<i class="fas fa-plus fa-xs"></i>
											<span class="d-none d-sm-inline-block ms-1">Add</span>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12" style="overflow-x: auto;">
									<table class="table mb-0">
										<thead class="">
											<tr>
												<th>#</th>
												<th>Field Name</th>
												<th>Type</th>
												<th>Optional/Required</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody id="table_listing">
										<?php $count = 1; ?>
										<?php foreach($mod_meta_rr_data as $mod_meta_rr):?>
										<tr>
											<td class="align-middle">
												<i class="fa fa-sort fa-md" style="cursor:pointer"></i>
												<input type="hidden" id="mod_meta_seqn<?php echo $count ?>"  class="form-control form-control-sm mod_meta_seqn" name="mod_meta_seqn<?php echo $count ?>" value="<?php echo $count; ?>">
												<input type="hidden" id="mod_meta_id<?php echo $count; ?>" class="form-control form-control-sm" name="mod_meta_id<?php echo $count ?>" value="<?php echo $mod_meta_rr->mod_meta_id ?>" >
												<input type="hidden" class="form-control form-control-sm" name="mod_meta_name<?php echo $count ?>" value="<?php echo $mod_meta_rr->mod_meta_name ?>" >
											</td>
											<td class="align-middle"><?php echo $mod_meta_rr->mod_meta_name ?></td>
											<td>
												<?php
													switch(json_decode($mod_meta_rr->mod_meta_params)->select){
														case 58:
															echo "Radio";
															break;
														case 59:
															echo "Radio (with custom)";
															break;
														case 60:
															echo "Checkbox";
															break;
														case 61:
															echo "Checkbox (with custom)";
															break;
													}
												?>
											</td>
											<td>
												<?php
													if (json_decode($mod_meta_rr->mod_meta_params)->required == 0){
														echo 'Optional';
													}
													if (json_decode($mod_meta_rr->mod_meta_params)->required == 1)
													{
														echo 'Required';
													}
												?>
											</td>
											<td class="align-middle">
												<div class="dropdown text-sans-serif">
													<a href="<?php echo site_url('mod_meta_rr/update/'.$mod_meta_rr->mod_meta_id)?>" id="display_edit" class="btn btn-outline-primary btn-xs">
														<i class="fas fa-pencil-alt me-1"></i> Edit
													</a>
													<button type="button" class=" btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete_customer_confirmation<?php //echo $plug_customer->plug_customer_id; ?>"><i class="fas fa-trash-can me-1"></i>Delete</button>
												</div>
											</td>
										</tr>
										<?php $count++; ?>
										<?php endforeach?>
										<input type="hidden" id="row_count" name="row_count" value="<?php echo $count - 1; ?>">
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col"><?php //echo $total_rows ?></div>
							<div class="col col-auto">
								<span class="float-end">
									<?php //echo $pagination ?>
								</span>
							</div>
						</div>
					</div>
				<!--END panel -->







					<div id="tnc_sequence_alert" class="alert alert-primary" role="alert">
						<strong>Sequence Updated Successful</strong>
					</div>
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">T&C</h4>
						</div>
						<!-- BEGIN panel-body -->
						<div class="panel-body">
							<div class="row"> 
								<div class="col-12">
									<div class="col-3 float-end">
										<select onchange="add_tnc();" id="add_tnc" class="form-select form-select-sm border border-primary text-primary">
											<option selected disabled>+ Add</option>
											<?php foreach($plug_tnc as $tnc){ ?>
												<?php if($this->Plug_tnc_model->get_tnc_mod_bridges_by_id($tnc->plug_tnc_id) == ''){ ?>
													<option value="<?php echo $tnc->plug_tnc_id; ?>"><?php echo $tnc->plug_tnc_title; ?></option>
												<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12" style="overflow-x: auto;">
									<table class="table mb-0">
										<thead class="bg-light">
											<tr>
												<th class="">#</th>
												<th class="">T&C</th>
												<th class="">Action</th>
											</tr>
										</thead>
										<tbody id="tnc_table_body">
											<?php $counter = 1; ?>
											<?php foreach($tnc_list_bridges as $tnc_list){ ?>
												<tr>
													<td class="">
														<i class="fa fa-sort fa-md" style="cursor:pointer;"></i>
														<input type="hidden" class="mod_bridges_sqn" id="mod_bridges_sqn<?php echo $counter; ?>" value="<?php echo $counter; ?>">
														<input type="hidden" class="" id="mod_bridges_id<?php echo $counter; ?>" value="<?php echo $tnc_list->mod_bridges_id; ?>">
													</td>
													<td>
														<?php echo $tnc_list->plug_tnc_title; ?>
													</td>
													<td>
														<a href="<?php echo base_url(); ?>Tnc/update/<?php echo $tnc_list->plug_tnc_id ?>" class="btn btn-outline-primary btn-xs"><i class="fas fa-pencil-alt me-1"></i>Edit</a>
														<button type="button" class=" btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete_customer_confirmation<?php //echo $plug_customer->plug_customer_id; ?>"><i class="fas fa-trash-can me-1"></i>Delete</button>
													</td>
												</tr>
												<?php $counter++; ?>
											<?php } ?>
											<input type="hidden" id="tnc_row_count" value="<?php echo $counter; ?>">
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END panel-body -->
					</div>
				<!--END T&C panel -->












			</div>
			<!-- END content container -->

		<?php $this->load->view("includes/footer");?>

		</div>
		<!-- END #content -->

		<!-- BEGIN scroll-top-btn-->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->

	</div>
	<!-- END #app -->

	<?php $this->load->view('includes/js_footer');?>
	</body>
</html>


<script>
	$('#field_sequence_alert').hide();
	$('#tnc_sequence_alert').hide();
	$(document).ready(function(){
		$('#table_listing').sortable({
			update: function(event,ui){
				$(this).children().children().children('.mod_meta_seqn').each(function(index){
					$(this).attr('value', (index+1));
				});
				var row_count = $('#row_count').val();
				for(var i = 1; i < row_count; i++){
					var mod_meta_id = $('#mod_meta_id'+i).val();
					var mod_meta_seqn = $('#mod_meta_seqn'+i).val();
					$.ajax({
						type:	'POST',
						url:	'<?php echo base_url(); ?>Mod_meta_rr/update_listing_seqn',
						data:	{
							'mod_meta_id': mod_meta_id,
							'mod_meta_seqn': mod_meta_seqn
						},
						success: function(data){
							$('#field_sequence_alert').show();
							$('#field_sequence_alert').fadeOut(3000);
						},
						error(data){
							alert('Sequence saving fail');
						}
					});
				}
			}
		});
	});
	$(document).ready(function(){
		$('#tnc_table_body').sortable({
			update: function(event,ui){
				$(this).children().children().children('.mod_bridges_sqn').each(function(index){
					$(this).attr('value', (index+1));
				});
				var tnc_row_count = $('#tnc_row_count').val();
				for(var j = 1; j < tnc_row_count; j++){
					var mod_bridges_id = $('#mod_bridges_id'+j).val();
					var mod_bridges_sqn = $('#mod_bridges_sqn'+j).val();
					$.ajax({
						type:	'POST',
						url:	'<?php echo base_url(); ?>Mod_meta_rr/update_tnc_listing_sqn',
						data:	{
							'mod_bridges_id': mod_bridges_id,
							'mod_bridges_sqn': mod_bridges_sqn
						},
						success: function(data){
							$('#tnc_sequence_alert').show();
							$('#tnc_sequence_alert').fadeOut(3000);
						},
						error(data){
							alert('Sequence saving fail');
						}
					});
				}
			}
		});
	});

	function add_tnc(){
		var add_tnc = $('#add_tnc').val();
		$.ajax({
			type:	'POST',
			url:	'<?php echo base_url(); ?>Mod_meta_rr/insert_tnc_bridges',
			data:	{
				'plug_tnc_id': add_tnc
			},
			success: function(data){
				location.reload();
			},
			error(data){
				alert('T&C fail to be added');
			}
		});
	}



	$(document).ready(function(){
		window.onload = function(){
			var session_message = '<?php echo $this->session->flashdata('message'); ?>';
			if(session_message == ''){
				$('#pop_alert').hide();
			}
			if(session_message !== ''){
				$('#pop_alert').show();
				$('#pop_alert').fadeOut(3000);
			}
		}
	});




</script>