		<!-- BEGIN #header -->
		<div id="header" class="app-header app-header-inverse">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="/" class="navbar-brand"><!--<i class="fab fa-facebook-square fa-lg"></i>--><i class="fa fa-spa"></i> <b>KSK STUDENT</b>RECORD</a>
				<a href="/" class="navbar-brand"><!--<i class="fab fa-facebook-square fa-lg"></i>--><i class="fa fa-spa"></i> <b>KOD KESALAHAN</b></a>
				<a href="/" class="navbar-brand"><!--<i class="fab fa-facebook-square fa-lg"></i>--><i class="fa fa-spa"></i> <b>SUMBANGAN MERIT</b></a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>

			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				<div class="navbar-item navbar-form">
					<form action="" method="GET" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" name="q" value="<?php echo isset($_GET['q']) ? $_GET['q']:''?>" autocomplete="off"/>
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
						
				
					</form>

				
				</div>
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon" disabled>
						<i class="fa fa-bell"></i>
						<!--<span class="badge">5</span>-->
					</a>
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-400"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="<?php echo base_url()?>/assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="<?php echo base_url()?>/assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-400"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-400"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<div class="px-2">
							<i class="fa fa-user"></i>
						</div>
						<!--<img src="<?php echo base_url()?>/assets/img/user/user-13.jpg" alt="" /> -->
						<span class="d-none d-md-inline"><?php echo $this->session->userdata('mod_users_username'); ?></span> <b class="caret ms-6px"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<!--<a href="javascript:;" class="dropdown-item">Edit Profile</a>-->
						<!--<a href="javascript:;" class="dropdown-item d-flex align-items-center">-->
						<!--	Inbox-->
						<!--	<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span> -->
						<!--</a>-->
						<!--<a href="javascript:;" class="dropdown-item">Calendar</a>-->
						<!--<a href="javascript:;" class="dropdown-item">Setting</a>-->
						<!--<div class="dropdown-divider"></div>-->
						<a href="<?php echo site_url('logout')?>" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->