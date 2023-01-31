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
                    <li class="breadcrumb-item"><a href ="javascript:;">Developer</a></li>
                    <li class="breadcrumb-item active">SENARAI NAMA ISK</a></li>
                </ol>
                <!-- END breadcrumb -->
				<!-- BEGIN page-header -->
                <h1 class="page-header">Student Management<small></small></h1>
                <!-- END page-header -->
                
                <!-- BEGIN panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                        <h4 class="panel-title">SENARAI NAMA ISK</h4>
                        <div class="panel-heading-btn">
                            <a href="<?php echo site_url('student/create')?>" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> New Student</a>
                        </div>
                      </div>
                      <div class="panel-body">
                      
                      <div class="table-responsive">
                    <!--  	  <button class="btn btn-falcon-default btn-sm" type="button" onclick="location.href = '<?php echo site_url('student/create')?>'">
                          <span><span class="fas fa-plus"></span>&nbsp; New Plug_customer</span></button>
                      </div>-->
                        
                        <table class="table mb-0">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th><input class="ml-3" type="checkbox" aria-label="Checkbox for this table"></th>
                                <th>No</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Student ID</th>
								
								<th>Action</th>
                              </tr>
                          </thead>
                          <tbody><?php foreach($student_data as $student):?>
							<tr>
								<td class="align-middle"><input class="ml-3" type="checkbox" aria-label="Checkbox for this row"></td>
								<td width="80px" class="align-middle"><?php echo ++$start ?></td>
								<td class="align-middle"><?php echo $student->plug_customer_name ?></td>
								<td class="align-middle"><?php echo $student->plug_customer_last_name ?></td>
								<td class="align-middle"><?php echo $student->plug_customer_ic ?></td>
								<td class="align-middle">
								    <a class="btn btn-outline-danger btn-xs" href="<?php echo site_url("student/delete/".$student->plug_customer_id)?>" onclick="javascript: return confirm('This action cannot be recovered. Continue ?')">Delete</a>
									
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
          <!--END panel -->
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