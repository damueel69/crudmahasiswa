<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<?=$this->session->flashdata('message');?>
							<form method="POST" class="my-login-validation" action="<?= base_url('auth/login')?>">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" required autofocus>
									<?= form_error('email', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="<?= base_url() ?>auth/lupa_password" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" required data-eye>
								    <?= form_error('password', '<div class="text-danger">', '</div'); ?>								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="<?= base_url() ?>auth/registrasi">Create One</a>
								</div>
							</form>
						</div>
					</div>
					
