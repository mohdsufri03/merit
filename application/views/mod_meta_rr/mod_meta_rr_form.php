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
					<li class="breadcrumb-item"><a href="javascript:;">Field Management</a></li>
					<li class="breadcrumb-item active"><?php echo $button; ?> Field</li>
				</ol>
				<!-- END breadcrumb -->
				<!-- BEGIN page-header -->
				<h1 class="page-header"><?php echo $button; ?> Field<small></small></h1>
				<!-- END page-header -->

				<!-- BEGIN panel -->
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title"><?php echo $button ?> Form</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form action="<?php echo $action; ?>" method="post">
							<div class="container pb-3">
								<div class="row">
									<div class="col-lg">
										<label>Field Name</label>
										<input type="text" class="form-control form-control-sm" name="mod_meta_name" value="<?php echo $mod_meta_name; ?>">
									</div>
								</div>
							</div>
							<div class="container pb-3">
								<div class="row">
									<div class="col-sm pb-3">
										<input type="radio" class="form-check-input" name="mod_meta_name_required" value="0" <?php echo $mod_meta_name_required == 0 ? 'checked':'';?>>
										<label>Optional</label>
										<br>
										<input type="radio" class="form-check-input" name="mod_meta_name_required" value="1" <?php echo $mod_meta_name_required == 1 ? 'checked':'';?>>
										<label>Required</label>
									</div>
									<div class="col-sm">

										<select id="select_type" class="form-select form-select-sm w-50" name="mod_meta_name_select">
												<?php foreach($mod_meta_name_selects as $mod_meta_name_select): ?>
												<option value="<?php echo $mod_meta_name_select->mod_meta_id ?>" <?php echo $mod_meta_name_selected == $mod_meta_name_select->mod_meta_id ? 'selected':''; ?>>
													<?php echo $mod_meta_name_select->mod_meta_name ?>
												</option>
												<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>

							<hr>
							<div class="container pb-3 col-12">
								<table id="table_add" class="">
									<thead>
										<tr>
											<th scope="" class="col-2">#</th>
											<th scope="">Optional (s)</th>
											<th></th>
										</tr>
									</thead>
									<tbody id="<?php echo $type=='create' ? 'table_row_add':'table_row_edit' ?>">
										
										
										<?php if($type=='create'){ ?>
										<?php $count = 1; ?>
										<input id="row_count" name="row_count" type="hidden" value="<?php echo $count ?>">
										<tr>
											<td>
												<i class="fa fa-sort fa-md" style="cursor:pointer"></i>
												<input type="hidden" class="form-control" id="mod_groups_sqn" name="mod_groups_sqn1" value="1">
											</td>
											<td>
												<input type="text" class="form-control" id="mod_groups_name" name="mod_groups_name1" required>
											</td>
										</tr>
										<?php } ?>
										
										
										
										
										<?php if($type=='update'){ ?>
										<?php $count = 0; ?>
										<?php foreach($get_groups_data_by_id as $get_groups_by_id): ?>
										<?php $count++; ?>
										<tr id="new_row<?php echo $count ?>">
											<td>
												<i class="fa fa-sort fa-md" style="cursor:pointer"></i>
												<input type="hidden" class="form-control" id="mod_groups_id" name="mod_groups_id<?php echo $count ?>" value="<?php echo $get_groups_by_id->mod_groups_id?>">
												<input type="hidden" class="form-control" id="mod_groups_sqn" name="mod_groups_sqn<?php echo $count ?>" value="<?php echo $count; ?>">
												<input type="hidden" class="form-control" id="mod_groups_enabled<?php echo $count ?>" name="mod_groups_enabled<?php echo $count ?>" value="<?php echo $get_groups_by_id->mod_groups_enabled ?>">
											</td>
											<td>
												<input type="text" class="form-control" id="mod_groups_name" name="mod_groups_name<?php echo $count ?>" value="<?php echo $get_groups_by_id->mod_groups_name ?>">
											</td>
											<td>
												<button type="button" class="btn btn-danger btn-xs" onclick="delete_row_edit(<?php echo $count ?>)"><i class="fa fa-trash fa-lg"></i></button>
											</td>
										</tr>
										<?php endforeach ?>
										<input id="row_count" name="row_count" type="hidden" value="<?php echo $count ?>">
										<input type="hidden" class="form-control" id="mod_groups_parent_id" name="mod_groups_parent_id" value="<?php echo $get_groups_by_id->mod_groups_parent_id?>">
										<?php } ?>
										
										
										
										
									</tbody>
									<tfoot>
										<tr>
											<td></td>
											<td><button type="button" class="btn btn-info btn-xs" id="add_input_field" onclick="add_form();"><i class="fa fa-plus fa-xs"></i></button></td>
										</tr>
									</tfoot>
								</table>
							</div>

							<!--<div class="form-group">-->
						<!--       <label for="mod_meta_key">Mod Meta Key <?php //echo form_error('mod_meta_key') ?></label>-->
						<!--       <textarea class="form-control" rows="3" name="mod_meta_key" id="mod_meta_key" placeholder="Mod Meta Key"><?php //echo $mod_meta_key; ?></textarea>-->
						<!--   </div>-->
						<!--<div class="form-group">-->
						<!--       <label for="mod_meta_name">Mod Meta Name <?php //echo form_error('mod_meta_name') ?></label>-->
						<!--       <textarea class="form-control" rows="3" name="mod_meta_name" id="mod_meta_name" placeholder="Mod Meta Name"><?php //echo $mod_meta_name; ?></textarea>-->
						<!--   </div>-->
							<input type="hidden" name="mod_meta_id" value="<?php //echo $mod_meta_id; ?>" />




							<button type="submit" class="btn btn-primary btn-sm"><?php echo $button ?></button> 
							<a href="<?php echo site_url('mod_meta_rr') ?>" class="btn btn-danger btn-sm">Cancel</a>
						</form>
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
<script>

	// ADD form - add row
	var num_row = <?php echo $count; ?>;
	function add_form(){
		var html = add_rows();
		$('#add_input_field').before(html);
		num_row++;
	}
	function add_rows(){
		var counter = parseInt($("#row_count").val()) + 1;
		$('#table_row_add').append(
				'<tr id="new_row'+counter+'">' +
					'<td>' +
						'<i class="fa fa-sort fa-md" style="cursor:pointer"></i>'+
						'<input type="hidden" class="form-control" id="mod_groups_sqn" name="mod_groups_sqn'+counter+'" value="'+counter+'">' +
					'</td>' +
					'<td>' +
						'<input type="text" class="form-control" id="mod_groups_name" name="mod_groups_name'+counter+'">' +
					'</td>' +
					'<td>' +
						'<button type="button" class="btn btn-danger btn-xs" onclick="delete_row('+counter+')"><i class="fa fa-trash fa-sm"></i></button>'+
					'</td>'+
				'</tr>' 
		);
		$('#table_row_edit').append(
				'<tr id="new_row'+counter+'">' +
					'<td>' +
						'<i class="fa fa-sort fa-md" style="cursor:pointer"></i>'+
						'<input type="hidden" class="form-control" id="mod_groups_sqn" name="mod_groups_sqn'+counter+'" value="'+counter+'">' +
					'</td>' +
					'<td>' +
						'<input type="text" class="form-control" id="mod_groups_name" name="mod_groups_name'+counter+'">' +
					'</td>' +
				'</tr>' 
		);
		$('#row_count').val(counter);
	}
	$(document).ready(function(){
		$('#table_row_add').sortable({
			update: function(event,ui){
				$(this).children().children().children('#mod_groups_sqn').each(function(index){
						$(this).attr('name', 'mod_groups_sqn'+(index+1));
						$(this).attr('value', (index+1));
				});
				$(this).children().children().children('#mod_groups_name').each(function(index){
						$(this).attr('name', 'mod_groups_name'+(index+1));
				});
			}
		});
		$('#table_row_edit').sortable({
			update: function(event,ui){
				$(this).children().children().children('#mod_groups_sqn').each(function(index){
						$(this).attr('value', (index+1));
				});
			}
		});
	});
	// ADD form - delete rows
	function delete_row(no) {
		$("#new_row" + no).remove();
	}
	function delete_row_edit(no) {
		$("#new_row" + no).hide();
		$("#mod_groups_enabled" + no).attr('value', '0');
	}
	
	
	
</script>