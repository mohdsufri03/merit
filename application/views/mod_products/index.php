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
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<?php $this->load->view('includes/top_nav');?>
		<?php $this->load->view('includes/sidebar',array('active'=>16));?>
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-3">
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:;">Extra</a></li>
						<li class="breadcrumb-item active">Products</li>
					</ol>
					<h1 class="page-header mb-0">Products</h1>
				</div>
				<div class="ms-auto">
					<a href="#" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Product</a>
				</div>
			</div>
			
			<div class="mb-3 d-sm-flex fw-bold">
				<div class="mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-download fa-fw me-1 text-dark text-opacity-50"></i> Export</a></div>
				<div class="ms-sm-4 ps-sm-1 mt-sm-0 mt-2"><a href="#" class="text-dark text-decoration-none"><i class="fa fa-upload fa-fw me-1 text-dark text-opacity-50"></i> Import</a></div>
				<div class="ms-sm-4 ps-sm-1 mt-sm-0 mt-2 dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="fa fa-cog fa-fw me-1 text-dark text-opacity-50"></i> More Actions <b class="caret"></b></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div role="separator" class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
				</div>
			</div>
			
			<div class="card border-0">
				<ul class="nav nav-tabs nav-tabs-v2 px-3">
					<li class="nav-item me-2"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
					<li class="nav-item me-2"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Published</a></li>
					<li class="nav-item me-2"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">Expired</a></li>
					<li class="nav-item me-2"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Deleted</a></li>
				</ul>
				<div class="tab-content p-3">
					<div class="tab-pane fade show active" id="allTab">
						<!-- BEGIN input-group -->
						<div class="input-group mb-3">
							<button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter products <b class="caret"></b></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
							<div class="flex-fill position-relative">
								<div class="input-group">
									<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0 pe-0" style="z-index: 1;">
										<i class="fa fa-search opacity-5"></i>
									</div>
									<input type="text" class="form-control ps-35px bg-light" placeholder="Search products..." />
								</div>
							</div>
						</div>
						<!-- END input-group -->
						
						<!-- BEGIN table -->
						<div class="table-responsive">
							<table class="table table-hover text-nowrap">
								<thead>
									<tr>
										<th class="pt-0 pb-2"></th>
										<th class="pt-0 pb-2">Product</th>
										<th class="pt-0 pb-2">Inventory</th>
										<th class="pt-0 pb-2">Type</th>
										<th class="pt-0 pb-2">Vendor</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product1">
												<label class="form-check-label" for="product1"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-6.jpg" />
												</div>
												<div class="ms-3">
													<a href="<?php echo site_url('mod_products/read/1')?>" class="text-dark text-decoration-none">Force Majeure White T Shirt</a>
												</div>
											</div>
										</td>
										<td class="align-middle">83 in stock for 3 variants</td>
										<td class="align-middle">Cotton</td>
										<td class="align-middle">Force Majeure</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product2">
												<label class="form-check-label" for="product2"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-7.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Eco-friendly fashion, organic cotton, slow fashion polo shirts</a>
												</div>
											</div>
										</td>
										<td class="align-middle">79 in stock for 3 variants</td>
										<td class="align-middle">Cotton</td>
										<td class="align-middle">Polo</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product3">
												<label class="form-check-label" for="product3"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-8.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Nike Shoes (Red Color)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">19 in stock for 1 variants</td>
										<td class="align-middle">Sports</td>
										<td class="align-middle">Nike</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product4">
												<label class="form-check-label" for="product4"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-9.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Nike Air Max (Blue Color)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">19 in stock for 1 variants</td>
										<td class="align-middle">Sports</td>
										<td class="align-middle">Nike</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product5">
												<label class="form-check-label" for="product5"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-10.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Skate Sneaker (Orange Color)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">19 in stock for 1 variants</td>
										<td class="align-middle">Sports</td>
										<td class="align-middle">Skate</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product6">
												<label class="form-check-label" for="product6"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-11.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Teen Fashion T-shirt (Black)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">30 in stock for 4 variants</td>
										<td class="align-middle">T-Shirt</td>
										<td class="align-middle">Tulsa</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product7">
												<label class="form-check-label" for="product7"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-12.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Levis Blue Jeans</a>
												</div>
											</div>
										</td>
										<td class="align-middle">49 in stock for 8 variants</td>
										<td class="align-middle">Jeans</td>
										<td class="align-middle">Levis</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product8">
												<label class="form-check-label" for="product8"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-13.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Boots (White Color)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">19 in stock for 1 variants</td>
										<td class="align-middle">Sports</td>
										<td class="align-middle">Nike</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product9">
												<label class="form-check-label" for="product9"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-14.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Hiking Boots</a>
												</div>
											</div>
										</td>
										<td class="align-middle">94 in stock for 1 variants</td>
										<td class="align-middle">Sports</td>
										<td class="align-middle">Skate</td>
									</tr>
									<tr>
										<td class="w-10px align-middle">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="product10">
												<label class="form-check-label" for="product10"></label>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
													<img alt="" class="mw-100 mh-100" src="../assets/img/product/product-15.jpg" />
												</div>
												<div class="ms-3">
													<a href="#" class="text-dark text-decoration-none">Dress (Pink)</a>
												</div>
											</div>
										</td>
										<td class="align-middle">23 in stock for 5 variants</td>
										<td class="align-middle">Dress</td>
										<td class="align-middle">Sktoe</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- END table -->
						
						<div class="d-md-flex align-items-center">
							<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
								Showing 1 to 10 of 57 entries
							</div>
							<ul class="pagination mb-0 justify-content-center">
								<li class="page-item disabled"><a class="page-link">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#">6</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>
				
				<!-- BEGIN theme-list -->
				<div class="theme-list">
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="theme-teal" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
				</div>
				<!-- END theme-list -->
				
				<div class="theme-panel-divider"></div>
				
				<div class="row mt-10px">
					<div class="col-8 control-label text-dark fw-bold">
						<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
						<div class="lh-14">
							<small class="text-dark opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>
				
				<div class="theme-panel-divider"></div>
				
				<!-- BEGIN theme-switch -->
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" checked />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
					<div class="col-md-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>
				<!-- END theme-switch -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Admin Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/default.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_transparent/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/transparent.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_apple/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/apple.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_material/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/material.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_facebook/index_v2.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/theme/facebook.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_google/index_v2.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/google.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Language Version (7)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index.html" class="theme-version-link active">
							<span style="background-image: url(../assets/img/version/html.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_ajax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/ajax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular1x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs13/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/angular10x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/laravel.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_vuejs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/vuejs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_reactjs/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/reactjs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(../assets/img/version/dotnet.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<h5>Frontend Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_e_commerce/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/blog.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/forum.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
							<span style="background-image: url(../assets/img/theme/corporate.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->
				
				<div class="theme-panel-divider"></div>
				
				<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
			</div>
		</div>
		<!-- END theme-panel -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<?php $this->load->view('includes/js_footer');?>
	<!-- ================== END core-js ================== -->
</body>
</html>