		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
				    <!--
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										Sean Ngu
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>-->
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>
					<div class="menu-header">MENU</div>
					<!--
					<div class="menu-item has-sub active">
					    
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-sitemap"></i>
							</div>
							<div class="menu-text">Dashboard</div>
							<div class="menu-caret"></div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="index.html" class="menu-link"><div class="menu-text">Dashboard v1</div></a>
							</div>
							<div class="menu-item">
								<a href="index_v2.html" class="menu-link"><div class="menu-text">Dashboard v2</div></a>
							</div>
							<div class="menu-item active">
								<a href="index_v3.html" class="menu-link"><div class="menu-text">Dashboard v3</div></a>
							</div>
						</div>
					</div>-->
					<!--
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-hdd"></i>
							</div>
							<div class="menu-text">Email</div>
							<div class="menu-badge">10</div>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="email_inbox.html" class="menu-link">
									<div class="menu-text">Inbox</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_compose.html" class="menu-link">
									<div class="menu-text">Compose</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_detail.html" class="menu-link">
									<div class="menu-text">Detail</div>
								</a>
							</div>
						</div>
					</div>-->
					
					<?php foreach($this->session->userdata('menu') as $menu):?>
					<?php 
					    $active = isset($active) ? $active:0;
					    $parent_url = strlen($menu['mod_groups_key']) > 0 ? site_url($menu['mod_groups_key']):'javascript:;';
					?>
					<?php //print_r($menu)?>
					<div class="menu-item <?php echo isset($menu['children']) ? 'has-sub':''?> <?php echo $menu['mod_groups_id'] == $active ? 'active':'' ?>">
						<?php if($menu['mod_groups_enabled'] == 1): ?>
							<!--PARENT ID-->
							<a href="<?php echo $parent_url?>" class="menu-link">
								<div class="menu-icon">
									<i class="<?php echo $menu['mod_groups_icon']?>"></i>
								</div>
								<div class="menu-text">
									<?php echo $menu['mod_groups_name']?>
								    <!--<span class="menu-label">NEW</span>-->
								</div> 
								<?php if(isset($menu['children'])):?>
								<div class="menu-caret"></div>
								<?php endif?>
							</a>
							<!--CHILD MENU-->
							<?php if(isset($menu['children'])):?>
							
							<div class="menu-submenu">
							    <?php foreach($menu['children'] as $mc):?>
								<div class="menu-item">
									<a href="<?php echo site_url($mc['mod_groups_key'])?>" class="menu-link">
										<div class="menu-text"><?php echo $mc['mod_groups_name']?> </div>
									</a>
								</div>
								<?php endforeach?>
							</div>
							<?php endif?>
						<?php endif ?>
					</div>
					<?php endforeach?>
					
					
					
					
					
					<!--<div class="menu-item has-sub">-->
					<!--	<a href="javascript:;" class="menu-link">-->
					<!--		<div class="menu-icon">-->
					<!--			<i class="fa fa-align-left"></i>-->
					<!--		</div>-->
					<!--		<div class="menu-text">Menu Level</div>-->
					<!--		<div class="menu-caret"></div>-->
					<!--	</a>-->
					<!--	<div class="menu-submenu">-->
					<!--		<div class="menu-item has-sub">-->
					<!--			<a href="javascript:;" class="menu-link">-->
					<!--				<div class="menu-text">Menu 1.1</div>-->
					<!--				<div class="menu-caret"></div>-->
					<!--			</a>-->
					<!--			<div class="menu-submenu">-->
					<!--				<div class="menu-item has-sub">-->
					<!--					<a href="javascript:;" class="menu-link">-->
					<!--						<div class="menu-text">Menu 2.1</div>-->
					<!--						<div class="menu-caret"></div>-->
					<!--					</a>-->
					<!--					<div class="menu-submenu">-->
					<!--						<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 3.1</div></a></div>-->
					<!--						<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 3.2</div></a></div>-->
					<!--					</div>-->
					<!--				</div>-->
					<!--				<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 2.2</div></a></div>-->
					<!--				<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 2.3</div></a></div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 1.2</div></a></div>-->
					<!--		<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 1.3</div></a></div>-->
					<!--	</div>-->
					<!--</div>-->
					
					
					
					
					
					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->