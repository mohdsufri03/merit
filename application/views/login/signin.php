<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('includes/header');?>
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="Sign in sign in-with-news-feed">
			<!-- BEGIN news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-79.jpg)"></div>
				<!--<div class="news-caption">
					<h4 class="caption-title"><b>Color</b> Admin App</h4>
					<p>
						Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>-->
			</div>
			<!-- END news-feed -->
			
			<!-- BEGIN login-container -->
			<div class="signin-container">
				<!-- BEGIN login-header -->
				<div class="sign in-header mb-30px text-center">
				    <div class="brand">
						<div class="d-block align-items-center">
						    <img src="../assets/img/logo/logo2.png" style="width: 200px;">
						    <div class="">
						        <b>PORTAL SISTEM</b> <b> MERIT DEMERIT </b>
						    </div>
						</div>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
                <form action="signin.php" method="post">
                <div class="sign in-content">
					<form id="form" method="post" class="fs-13px">
						<div class="form-floating mb-15px">
							<input type="text" class="form-control h-45px fs-13px" placeholder="Email Address" id="emailAddress" name="username"/ autocomplete="off">
							<label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Username</label>
						</div>
						<div class="form-floating mb-15px">
							<input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" name="password"/>
							<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
						</div>
						<div class="form-check mb-30px">
							<input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
							<label class="form-check-label" for="rememberMe">
							<a href="signup.php"class = "ca"> create an account </a>

							</label>

						<div class="mb-15px">
							<button id="form-submit" type="button" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign up</button>
						</div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center  mb-0">
							PORTAL SISTEM MERIT DEMERIT KSK KV MIRI 2023
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<!-- required files -->
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
    
    <script>
    function prompt_error(){

      $.gritter.add({
        title: 'Login Failed',
        text: 'Your user ID or password is incorrect',
        /*image: '../assets/img/user/user-2.jpg',*/
        sticky: false,
        time: '',
        class_name: 'my-sticky-class gritter-light',
        before_open: function(){ },
        after_open: function(e){ },
        before_close: function(manual_close) { },
        after_close: function(manual_close){ } 
      });        
    }
      /*
      $.gritter.removeAll({
        before_close: function(e){ },
        after_close: function(){ }
      });*/
    </script>
	
	
	
	<script type = "text/javascript" > $(document).ready(function() {
    	$('input[type=password]').on('keydown', function(e) {
    		if (e.which == 13) {
    			e.preventDefault();
    			//alert("1");
    			$("signin").click();
    		}
    	});
    });
    $('#form-submit').on('click', function() {
        //console.log('hi')
        //alert("hi");
    	var username = $("email").val();
    	var password = $("password").val();
    	//var dataString = '&username=' + username + '&password=' + password;
    	var dataToBeSent = $("form").serialize();
    	//alert(dataToBeSent);
    	//var $this = $(this);
    	//$this.button('loading');
    	if (username == '' || password == '') {
    		/*
    		Messenger().post({
    		    message: 'Email and Password are required!',
    		    type: 'error',
    		    showCloseButton: true
    		});*/
    		//$("#email").focus();
    		//$this.button('reset');
    	}else{
    		setTimeout(function() {
    			var login_url = "<?php echo site_url('verifysignin')?>";
    			$.ajax({
    				type: "POST",
    				url: login_url,
    				data: dataToBeSent,
    				dataType: "json",
    				cache: false,
    				success: function(data) {
    					//alert(data);  //as a debugging message.
    					console.log(data);
    					//console.log(data['success']);
    					if (data.success == 1) {
    						window.location.href = "<?php echo site_url()?>";
    						//alert('success'+data);
    					}else if(data.success == 0) {
    					    prompt_error();
    					    /*
    						$.toast({
    							heading: '<strong>Failed</strong>',
    							text: 'Username or password incorrect.',
    							position: 'top-right',
    							loaderBg: '#ff6849',
    							icon: 'error',
    							hideAfter: 6000
    						});*/
    					}else{
    						$.toast({
    							heading: '<strong>Error</strong>',
    							text: 'Something goes wrong,please contact developer',
    							position: 'top-right',
    							loaderBg: '#ff6849',
    							icon: 'error',
    							hideAfter: 6000
    						});
    					}
    				}
    			});
    			return false;
    		},100);
    	}
    }); 
    </script>
</body>
</html>