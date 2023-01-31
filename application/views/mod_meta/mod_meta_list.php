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
					<li class="breadcrumb-item active">Update Field</li>
				</ol>
				<!-- END breadcrumb -->
				<!-- BEGIN page-header -->
				<h1 class="page-header">Update Field<small></small></h1>
				<!-- END page-header -->


















				<!-- BEGIN panel -->
				<div class="nav-wizards-container d-none d-md-block">
					<nav class="nav nav-wizards-1 mb-2">
					<!-- completed -->
						<div class="nav-item col">
							<a id="navlink1" class="nav-link active">
								<div class="nav-no">1</div>
								<div class="nav-text">Form Field</div>
							</a>
						</div>
						<!-- active -->
						<div class="nav-item col">
							<a id="navlink2" class="nav-link disabled">
								<div class="nav-no">2</div>
								<div class="nav-text">T&C Field</div>
							</a>
						</div>
					</nav>
				</div>



















<div class="card border-0" style="background-color: transparent;">
	<div class="card-body">




<form action="<?php echo base_url(); ?>Mod_meta/create_action_test" method="POST">
	<button type="submit" class="btn btn-outline-primary btn-lg">TEST CONTROLLER</button>
		<div id="fielddiv1" class="row">
			<div class="col-12">
				<table class="w-100">
					<thead></thead>
					<tbody id="field_table_body">
						<?php $count_1 = 0; ?>
						<?php foreach($get_form_field as $form_field): ?>
						<tr>
							<td>
								<!-- BEGIN Field card -->
								<div id="" class="panel panel-inverse my-3" sequence_value="<?php //echo $field->mod_field_id ?>">
									<div class="panel-heading">
										<h5 class="panel-title">Field</h5>
										<div class="panel-heading-btn">
											<a class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" onclick="changepaneltitle()" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
											<a class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove" onclick="deletepanel()" data-tooltip-init="true"><i class="fa fa-times"></i></a>
										</div>
									</div>
									<div class="panel-body">
										<div class="row px-3" >
											<div class="col-md-4">
												<div>
													<label class="form-label">Name</label>
													<input type="text" value="<?php echo $form_field->mod_meta_id ?>_n">
													<input placeholder="Name" name="<?php echo $form_field->mod_meta_id ?>_n" type="text" id="" class="form-control" value="<?php echo $form_field->mod_meta_name?>">
												</div>
											</div>
											<div class="col-md-4">
												<div>
													<label class="form-label" for="required">Required</label>
													<input type="text" value="<?php echo $form_field->mod_meta_id ?>_r<?php echo json_decode($form_field->mod_meta_params)->required; ?>">
													<select id="required" name="<?php echo $form_field->mod_meta_id ?>_r<?php echo json_decode($form_field->mod_meta_params)->required; ?>" class="form-select" data-parsley-required="true">
														<option value="0"<?php echo (json_decode($form_field->mod_meta_params)->required == 0) ? 'selected' : ''; ?>>Optional</option>
														<option value="1"<?php echo (json_decode($form_field->mod_meta_params)->required == 1) ? 'selected' : ''; ?>>Required</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div>
													<label class="form-label" for="type">Type</label>
													<input type="text" value="<?php echo $form_field->mod_meta_id ?>_s<?php echo json_decode($form_field->mod_meta_params)->select ?>">
													<select name="<?php echo $form_field->mod_meta_id ?>_s<?php echo json_decode($form_field->mod_meta_params)->select ?>" class="form-select" id="type" data-parsley-required="true">
														<option value="61" <?php echo (json_decode($form_field->mod_meta_params)->select == 61) ? 'selected' : '' ?>>Checkbox (with custom)</option>
														<option value="60" <?php echo (json_decode($form_field->mod_meta_params)->select == 60) ? 'selected' : '' ?>>Checkbox</option>
														<option value="59" <?php echo (json_decode($form_field->mod_meta_params)->select == 59) ? 'selected' : '' ?>>Radio (with custom)</option>
														<option value="58" <?php echo (json_decode($form_field->mod_meta_params)->select == 58) ? 'selected' : '' ?>>Radio</option>
													</select>
												</div>
											</div>
										</div>
										<div id="option_div" class="">
											<hr class="hr">
											<div class="row px-3" >
												<label class="fw-bold">Option(s)</label>
												<?php $count_2 = 0; ?>
												<?php foreach($this->Mod_meta_model->get_form_options($form_field->mod_meta_id) as $form_options){ ?>
													<div class="col-md-3">
														<input type="text" value="<?php echo $form_field->mod_meta_id ?>_o<?php echo $count_2 ?>">
														<div class="input-group mb-3">
															<input type="text" class="form-control" name="<?php echo $form_field->mod_meta_id ?>_o<?php echo $count_2 ?>" value="<?php echo $form_options->mod_groups_name; ?>">
															<button class="input-group-text bg-danger" onclick="deleteOption(<?php echo $form_field->mod_meta_id ?>)"><i class="fa fa-trash text-light input-group-icon"></i></button>
														</div>
													</div>
												<?php $count_2++; ?>
												<?php } ?>
												<div class="col-1">
													<button type="button" class="btn btn-outline-primary" onclick="addOption(<?php echo $form_field->mod_meta_id; ?>)">
														<i class="fas fa-plus"></i>
													</button>
												</div>
												<input type="text" id="option_count<?php echo $form_field->mod_meta_id ?>" value="<?php echo $count_2; ?>" name="<?php echo $form_field->mod_meta_id ?>_oc">
											</div>
										</div>
									</div>
								</div>
								<!-- END Field card -->
							</td>
						</tr>
						<?php $count_1++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-12">
				<div class="d-grid gap-2">
					<button id="add_field_btn" class="btn btn-outline-primary" type="button" onclick="addNewField()"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="col-12 text-end mt-3">
				<button type="button" class="btn btn-primary" onclick="next()">
					Next Step
				</button>
			</div>
		</div>
</form>




















		<div id="fielddiv2" class="row p-md-5">
			<div class="col-12">
				<div class="row justify-content-center">
					<div class="col-12 d-flex justify-content-center align-items-center">
						<div class="inline w-100 field">
							<label>Select Topics</label>
							<div class="label ui selection fluid dropdown multiple" tabindex="0" onclick="selection()">
								<select name="tnc_selection" multiple="">
									<option value="">Select Topics</option>
									<option value="1">Family</option>
									<option value="2">Family Law</option>
									<option value="3">Friends</option>
									<option value="4">Co-workers</option>
									<option value="5">Startup</option>
								</select>
								<table>
									<thead></thead>
									<tbody id="tnc_table_body">
									</tbody>
								</table>
								<i class="dropdown icon"></i>
								<div class="default text">Select Topics</div>
								<div id="tnc_menu" class="menu transition hidden" tabindex="-1">
									<div class="item" data-value="1">Family</div>
									<div class="item" data-value="2">Family Law</div>
									<div class="item" data-value="3">Friends</div>
									<div class="item" data-value="4">Co-workers</div>
									<div class="item" data-value="5">Startup</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-3 d-flex flex-row justify-content-between">
				<button type="button" class="btn btn-primary" onclick="goback()">
					Back
				</button>
				<button type="button" class="btn btn-primary" onclick="window.location.replace('https://playground.dart-frog.io/rr/formlist');">
					Confirm
				</button>
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

<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>
<script src="../assets/plugins/ionicons/dist/ionicons/ionicons.js"></script>
<script src="../assets/plugins/parsleyjs/dist/parsley.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>

	// Make form field sortable
	$('#field_table_body').sortable({
		update: function(event,ui){
			$(this).children().children().children().each(function(index){
					$(this).attr('sequence_value', (index+1));
			});
		}
	});

	function addOption(mod_meta_parent_id) {
// 		var a = $('#option_count'+mod_meta_parent_id).val();
// 		var b = a.indexOf('_');
// 		var c = a.substring(parseInt(b)+2);
// 		var d = c.substring(0, c.length-1);
//		var option_count = parseInt(c) + 1;
		var a = $('#option_count'+mod_meta_parent_id).val();
		var b = parseInt(a)+1;
		var c = parseInt(b) - 1;
		var row = $(event.target).closest('.row');
		var lastcol = $(event.target).closest('.row').find('.col-1');
		var newcol = '';
			newcol += '<div class="col-md-3">';
			newcol +=		'<input type="text" value="'+mod_meta_parent_id+'_o'+c+'">';
			newcol +=		'<div class="input-group mb-3">';
			newcol +=			'<input type="text" class="form-control" name="'+mod_meta_parent_id+'_o'+c+'">';
			newcol +=			'<button class="input-group-text bg-danger" onclick="deleteOption('+mod_meta_parent_id+')"><i class="fa fa-trash text-light input-group-icon"></i></button>';
			newcol +=		'</div>';
			newcol += '</div>';
		$(newcol).insertBefore(lastcol);
		$('#option_count'+mod_meta_parent_id).val(b);
		$('#option_count'+mod_meta_parent_id).attr('name',mod_meta_parent_id+'_oc');
	}

	function deleteOption(mod_meta_parent_id) {
		var a = $('#option_count'+mod_meta_parent_id).val();
		var b = a.indexOf('_');
		var c = a.substring(parseInt(b)+2);
		var option_count = parseInt(c) - 1;
		var deletediv = $(event.target).closest('div.col-md-3');
		deletediv.remove();
		$('#option_count'+mod_meta_parent_id).val(option_count);
		$('#option_count'+mod_meta_parent_id).attr('name',mod_meta_parent_id+'_o'+option_count+'c');
	}









	var tnc_total = 0;//total number of selected TNC options
    var field_node_id = $('#field_table_body tr').length + 1;//+ 1 for next tr node 
     $(document).ready(function (){
        $('#fielddiv2').hide();
        
        
    	$('#tnc_table_body').sortable({
    		update: function(event,ui){
    			$(this).children().children().children().each(function(index){
    					$(this).attr('sequence_value', (index+1));
    			});
    		}
    	});
        
        
        $("#navlink1").click(function(){
            goback();
        });
          
        $("#tnc_menu .item").click(function(){
            event.currentTarget.classList.add('active');
            event.currentTarget.classList.add('filtered');
            var menu_item_id = event.currentTarget.getAttribute('data-value');
            var menu_item_content = event.currentTarget.textContent;
            //alert("Hi" + menu_item_id);
            
            ++tnc_total;//to track total number of selected TNC
            // alert("tnc_total" + tnc_total);
            
            var tr = document.createElement('tr');//create a node
            var td = document.createElement('td');//create a node
            var nodehtml = '<a class="ui label transition visible" data-value="' + menu_item_id + '" style="display: inline-block !important;" sequence_value="' + tnc_total + '"><i class="fa fa-sort me-2" style="cursor:pointer"></i>'+ menu_item_content +'<i class="fa fa-close ms-2" onclick="deletetncbox()"></i></a>';   
            td.innerHTML = nodehtml;
            tr.appendChild(td);
            $( "#tnc_table_body" ).append(tr);
            //$( node ).insertBefore( ".default" );
            
            
        });
        
        
    });
    
    function deletetncbox(){
        //make menu item visible again
        let menu_item_id = $(event.currentTarget).parent().attr('data-value');
        let menu_item = $("#tnc_menu .item[data-value=" + menu_item_id + "]");
        if(menu_item.hasClass('active')){
            menu_item.removeClass('active filtered');
        }
        
        //remove the box(a->td->tr)
        $(event.currentTarget).closest("tr").remove();
        
        tnc_total--;
        //alert("tnc_total" + tnc_total);
        
        //loop thru every tr in tnc_table_body(!!!sort only after remove)
        var seq_val = 1;
        $("#tnc_table_body tr").each(function(){
            //alert("hi hello");
            $(this).children().children().attr("sequence_value",seq_val);
            seq_val++;
		});
    }
    
    function selection(){
        if(event.currentTarget.classList.contains('active'))
        {
            event.currentTarget.classList.remove('active');
            event.currentTarget.classList.remove('visible');
        }
        else{
            event.currentTarget.classList.add('active');
            event.currentTarget.classList.add('visible');
        }
        
        
        var arr = document.getElementById("tnc_menu");
        //to hide the menu
        if (arr.classList.contains('hidden')) {
            arr.classList.remove('hidden');
            arr.classList.add('visible');
        }
        else{
            arr.classList.add('hidden');
            arr.classList.remove('visible');
        }

    }
    
    function changepaneltitle(){
        let parent_panel = $(event.currentTarget).closest("div.panel.panel-inverse");
        let parent_panel_id_num = $(event.currentTarget).closest("div.panel.panel-inverse").attr('id');
        let panel_body = parent_panel.find(".panel-body");
        let panel_title = parent_panel.find(".panel-title");
        let field_name = "#name_"+ parent_panel_id_num.charAt(parent_panel_id_num.length - 1);
        if( $(panel_body).css("display") == "none" ){
            $(panel_title).text("Field");//Default name when panel_body is displayed
        }
        else{
            $(panel_title).text($(field_name).val());
        }
    }
    
    function deletepanel(){
        $(event.currentTarget).closest("tr").remove();
        
        //loop thru every tr in tnc_table_body(!!!sort only after remove)
        var seq_val = 1;
        $("#field_table_body tr").each(function(){
            //alert("hi hello");
            $(this).children().children().attr("sequence_value",seq_val);
            seq_val++;
		});
		
    }
    
    function addNewField(){
        // var newcolumn = $('.column1:last').clone();
        // $(newcolumn).insertAfter($('.column1:last'));

        var tr = document.createElement('tr');//create a node
        var td = document.createElement('td');//create a node
        
        td.innerHTML = getFieldHTML(field_node_id);
        tr.appendChild(td);
        //alert(tr.innerHTML);

        //$(newInfo).insertBefore($("#add_field_btn").parent().parent());
        document.getElementById('field_table_body').append(tr);
        field_node_id++;
        
        //loop thru every tr in tnc_table_body(!!!sort only after add new tr)
        var seq_val = 1;
        $("#field_table_body tr").each(function(){
            //alert("hi hello");
            $(this).children().children().attr("sequence_value",seq_val);
            seq_val++;
		});
    }
    
    // function goback() {
    //     if(document.getElementById("navlink1").classList.contains('completed')){
    //         document.getElementById("navlink1").classList.add('active');
    //         document.getElementById("navlink1").classList.remove('completed');
            
    //         document.getElementById("navlink2").classList.add('disabled');
    //         document.getElementById("navlink2").classList.remove('active');
            
    //         $("#fielddiv1").show();
    //         $("#fielddiv2").hide();
    //     }
        
    // }
    // function next(){
    //     if(document.getElementById("navlink1").classList.contains('active')){
    //         document.getElementById("navlink1").classList.remove('active');
    //         document.getElementById("navlink1").classList.add('completed');
            
    //         document.getElementById("navlink2").classList.remove('disabled');
    //         document.getElementById("navlink2").classList.add('active');
    //         $("#fielddiv1").hide();
    //         $("#fielddiv2").show();
    //     }
    // }
    
    function getFieldHTML(field_id){
        var html="";
        html += '<div id="field_' + field_id + '" class="panel panel-inverse my-3" sequence_value="' + field_id + '">';
        html += '        			    <div class="panel-heading">';
        html += '        			        <h5 class="panel-title">Field</h5>';
        html += '        			        <div class="panel-heading-btn">';
        html += '<a class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" onclick="changepaneltitle()" data-tooltip-init="true"><i class="fa fa-minus"></i></a>';
        html += '<a class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove" onclick="deletepanel()" data-tooltip-init="true"><i class="fa fa-times"></i></a>';
        html += '    						</div>';
        html += '        			    </div>';
        html += '                       <div class="panel-body">';
        html += '                            <div class="row px-3" >';
        html += '                                 <div class="col-md-4">';
        html += '                                    <div>';
        html += '                                        <label class="form-label" for="name">Name</label></label>';
        html += '                                        <input placeholder="name" name="name" type="text" id="name_'+ field_id +'" class="form-control" data-parsley-required="true">';
        html += '                                      </div>';
        html += '                                  </div>';
        html += '                                  <div class="col-md-4">';
        html += '                                      <div>';
        html += '                                          <label class="form-label" for="required">Required</label>';
        html += '                                          <select aria-label="Default select example" name="required" class="form-select" id="required" data-parsley-required="true">';
        html += '                                              <option value="Required">Required</option>';
        html += '                                              <option value="Optional">Optional</option>';
        html += '                                          </select>';
        html += '                                      </div>';
        html += '                                  </div>';
        html += '                                  <div class="col-md-4">';
        html += '                                      <div>';
        html += '                                          <label class="form-label" for="type">Type</label>';
        html += '                                          <select aria-label="Default select example" name="type" class="form-select" id="type" data-parsley-required="true">';
        html += '                                              <option value="checkbox_custom">Checkbox (with custom)</option>';
        html += '                                              <option value="checkbox">Checkbox</option>';
        html += '                                              <option value="radio_custom">Radio (with custom)</option>';
        html += '                                              <option value="radio">Radio</option>';
        html += '                                              <option value="text">Text</option>';
        html += '                                          </select>';
        html += '                                      </div>';
        html += '                                  </div>';
        html += '                              </div>';
        html += '                              <div id="option_div" class="">';
        html += '                              <hr class="hr">';
        html += '                                <div class="row px-3" >';
        html += '                                    <label class="fw-bold">Option(s)</label>';
        html += '                                    <div class="col-md-3">';
        html += '                                        <div class="input-group mb-3">';
        html += '            								<input type="text" class="form-control">';
        html += '            								<button class="input-group-text bg-danger" onclick="deleteOption()"><i class="fa fa-trash text-light input-group-icon"></i></button>';
        html += '            							</div>';
        html += '                                    </div>';
        html += '                                    <div class="col-1">';
        html += '                                        <button type="button" class="btn btn-outline-primary" onclick="addOption()">';
        html += '                                          <i class="fas fa-plus"></i>';
        html += '                                        </button>';
        html += '                                    </div>';
        html += '                                </div>';
        html += '                                </div>';
        html += '                            </div>';
        html += '                	</div>';
        return html;
    }




</script>