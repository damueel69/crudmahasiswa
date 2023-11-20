


</style>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" action=<?= base_url('auth/registrasi') ?> class="my-login-validation" >
								<div class="form-group">
									<label for="nama">Name</label>
									<input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>"required autofocus>
									<?= form_error('nama', '<div class="text-danger">', '</div>'); ?>								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" required>
									<?= form_error('email', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" value="<?= set_value('password'); ?>"required
										data-eye>
									<?= form_error('password', '<div class="text-danger">', '</div>'); ?>
								</div>

								<div class="form-group">
									<label for="password2">Password</label>
									<input id="password2" type="password" class="form-control" name="password2" required
										data-eye>
									<?= form_error('password2', '<div class="text-danger">', '</div>'); ?>
								</div>
								

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input"
											required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms
												and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="<?= base_url() ?>auth/login">Login</a>
								</div>
							</form>
						</div>
					</div>
				