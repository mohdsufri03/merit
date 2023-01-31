<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('includes/header');?><!-- ================== END core-css ================== -->
  <title></title>
</head>
<body>
  <!-- BEGIN #loader -->
  <div class="app-loader" id="loader">
    <span class="spinner"></span>
  </div><!-- END #loader -->
  <!-- BEGIN #app -->
  <div class="app app-header-fixed app-sidebar-fixed app-content-full-height" id="app">
    <!-- BEGIN #header -->
    <?php $this->load->view('includes/top_nav');?>
    <?php $this->load->view('includes/sidebar',array('active'=>12));?><!-- BEGIN #content -->
    <div class="app-content d-flex flex-column p-0" id="content">
      <!-- BEGIN content-container -->
      <div class="app-content-padding flex-grow-1 overflow-hidden" data-height="100%" data-scrollbar="true">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:;">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript:;">Developer</a>
          </li>
          <li class="breadcrumb-item active">Meta Management</li>
        </ol><!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Meta Management</h1><!-- END page-header -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse">
          <div class="panel-heading">
            <h4 class="panel-title">Meta List</h4>
            <div class="panel-heading-btn">
              <a class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand" href="javascript:;"><i class="fa fa-expand"></i></a> <a class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload" href="javascript:;"><i class="fa fa-redo"></i></a> <a class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" href="javascript:;"><i class="fa fa-minus"></i></a> <a class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove" href="javascript:;"><i class="fa fa-times"></i></a>
            </div>
          </div>
          <div class="panel-body">
            <div class='align-middle text-right'>
              <a class="btn btn-primary btn-xs" data-bs-toggle="modal" data-target="#modal-dialog" href="#modal-dialog">Add Child</a>
            </div><!--<a href="#modal-dialog" class="btn btn-primary" data-bs-toggle="modal">Modal</a>-->
            <br>
            <br>
            <?php print_r($child)?>
            <div id="jstree-default">
              <ul>
                <li data-jstree='{"opened":true}'>
                  <?php echo $child[0]->mod_meta_name?>
                  <ul>
                      <?php foreach($child as $cv):?>
                      <li><?php echo $cv->mod_groups_name ?> [<?php echo $cv->mod_groups_key?>]</li>
                      <?php endforeach?>
                    <!--
                                <li data-jstree='{"opened":true, "selected":true }'>Initially Selected</li>
                                <li onclick='alert("aaa")'>Folder 1</li>-->
                    <?php foreach($dat as $mod_meta):?>
                    <li><?php echo $mod_meta->mod_meta_name ?></li><?php endforeach?>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- END panel -->
      </div><!-- END content-container -->
      <?php $this->load->view('includes/footer');?>
    </div><!-- END #content -->
    <!-- BEGIN scroll-top-btn -->
    <a class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top" href="javascript:;"><i class="fa fa-angle-up"></i></a> <!-- END scroll-top-btn -->
  </div><!-- END #app -->
  <!-- toggler -->
  <!-- Modal -->
  <!-- toggler -->
  <!-- #modal-dialog -->
  <div class="modal fade" id="modal-dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:transparent;">
        <div class="modal-body">
          <div class="panel panel-inverse" data-sortable-id="form-stuff-2">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading ui-sortable-handle">
              <h4 class="panel-title">Create Child</h4>
              <div class="panel-heading-btn">
                <a class="btn btn-xs btn-icon btn-danger" data-bs-dismiss="modal" href="javascript:;"><i class="fa fa-times"></i></a>
              </div>
            </div><!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
              <form action="<?php echo site_url('mod_meta/child_create_action')?>" id="form_submit" method="post" name="form_submit">
                <div class="row mb-15px">
                  <label class="form-label col-form-label col-md-3">Group Type</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mod_meta_key" type="text" value="<?php echo $child[0]->mod_meta_name?>" id="mod_meta_key">
                  </div>
                </div>
                <div class="row mb-15px">
                  <label class="form-label col-form-label col-md-3">Group Name</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="mod_meta_name" type="text" autocomplete="off" id="mod_meta_name">
                  </div>
                </div>
                <div class="row mb-15px">
                  <label class="form-label col-form-label col-md-3">Enabled</label>
                  <div class="col-md-9 pt-2">
                    <div class="form-check form-switch mb-2">
                      <input checked class="form-check-input" id="flexSwitchCheckChecked" name="mod_meta_enabled" type="checkbox">
                    </div>
                  </div>
                </div>
              </form>
              <div class="panel-footer text-end">
                <a class="btn btn-white btn-sm" data-bs-dismiss="modal" href="#">Cancel</a> <a class="btn btn-primary btn-sm ms-5px" href="#" onclick="document.getElementById('form_submit').submit();">Save Changes</a>
              </div>
            </div><!-- END panel-body -->
          </div>
        </div>
      </div>
    </div>
  </div><?php $this->load->view('includes/js_footer');?><!-- required files -->
  <link href="<?php echo base_url()?>/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/plugins/jstree/dist/jstree.min.js">
  </script> <!-- html -->
  <script>
  $("#jstree-default").jstree({
    "plugins": ["types"],
    "core": {
      "themes": { "responsive": false  }            
      },
    "types": {
      "default": { "icon": "fa fa-folder text-warning fa-lg" },
      "file": { "icon": "fa fa-file text-dark fa-lg" }
    }
  });
  </script>
</body>
</html>