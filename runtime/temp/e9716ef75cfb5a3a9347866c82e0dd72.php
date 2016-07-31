<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"F:\www\my\public/../application/admin\view\user\login.html";i:1466956267;}*/ ?>

<div class="login-container">

	<div class="row">

		<div class="col-sm-6">

			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					// Reveal Login form
					setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);


					// Validation and Ajax action
					$("form#login").validate({
						rules: {
							username: {
								required: true
							},

							passwd: {
								required: true
							}
						},

						messages: {
							username: {
								required: '请输入您的用户名.'
							},

							passwd: {
								required: '请输入您的密码.'
							}
						},

						// Form Processing via AJAX
						submitHandler: function(form)
						{
							showLoadingBar(70); // Fill progress bar to 70% (just a given value)

							var opts = {
								"closeButton": true,
								"debug": false,
								"positionClass": "toast-top-full-width",
								"onclick": null,
								"showDuration": "300",
								"hideDuration": "10000",
								"timeOut": "5000",
								"extendedTimeOut": "1000",
								"showEasing": "swing",
								"hideEasing": "linear",
								"showMethod": "fadeIn",
								"hideMethod": "fadeOut"
							};

							$.ajax({
								url: "admin/user/login",
								method: 'POST',
								dataType: 'json',
								data: {
								
									account: $(form).find('#username').val(),
									password: $(form).find('#passwd').val(),
								},
								success: function(resp)
								{
									showLoadingBar({
										delay: .5,
										pct: 100,
										finish: function(){

											// Redirect after successful login page (when progress bar reaches 100%)
											if(resp)
											{
												window.location.hash = '#/app/dashboard-variant-1';
												//$('body').removeClass('login-page login-light lockscreen-page');
																							}
																						else
											{
												toastr.error("用户名或者密码错误,请再试一次。", "登入失败", opts);
												$(form).find('#passwd').select();
											}
																					}
									});

																	}
							});

						}
					});

					// Set Form focus
					$("form#login .form-group:has(.form-control):first .form-control").focus();
				});
			</script>

			<!-- Errors container -->
			<div class="errors-container">

				
			</div>

			<!-- Add class "fade-in-effect" for login form effect -->
			<form method="post" role="form" id="login" class="login-form fade-in-effect">

				<div class="login-header">
					<a href="#/app/dashboard-variant-1" class="logo">
						<img src="/assets/images/logo@2x.png" alt="" width="80" />
						<span>登入</span>
					</a>

					<p>亲爱的用户,欢迎登入管理平台!</p>
				</div>


				<div class="form-group">
					<label class="control-label" for="username">用户名</label>
					<input type="text" class="form-control input-dark" name="username" id="username" autocomplete="off" />
				</div>

				<div class="form-group">
					<label class="control-label" for="passwd">密码</label>
					<input type="password" class="form-control input-dark" name="passwd" id="passwd" autocomplete="off" />
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-dark  btn-block text-left">
						<i class="fa-lock"></i>
						登入
					</button>
				</div>

				<div class="login-footer">
					<a href="">忘记密码?</a>

					<div class="info-links">
						<a href="">ToS</a> -
						<a href="">服务和协议</a>
					</div>

				</div>

			</form>

			<!-- External login -->
			<div class="external-login">
				<a href="" class="facebook">
					<i class="fa-facebook"></i>
					Facebook 登入
				</a>

			</div>

		</div>

	</div>

</div>