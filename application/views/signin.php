<?php
$this->load->view('partials/head_signin', ['title' => 'Sign In']);
$this->load->view('partials/nav_customer');
$this->load->view('partials/foot');
if(!empty($this->session->flashdata('errors'))){
	$display = '';
} else {
	$display = 'none';
}
?>
<div class="container">
	<div id="loginbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 sol-sm-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Sign In</div>
			</div>
			<div style="padding-top: 30px;" class="panel-body">
				<div style="display: <?=$display?>" id="login-alert" class="alert alert-danger col-sm-12"><?=$this->session->flashdata('errors')?></div>
				<form id="loginform" class="form-horizontal" role="form" action="/welcome/signin" method="post">
					<div style="margin-bottom: 25px" class="input-group">
						<input id="login-username" type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div style="margin-bottom: 25px" class="input-group">
						<input id="login-password" class="form-control" type="password" placeholder="Password" name="password" required>
					</div>
					<div class="col-sm-12 controls">
						<input id="btn-login" class="btn btn-primary" type="submit" value="Sign-In">
					</div>
				</form>
			</div>
		</div>
        <p><a href="/welcome/register_page" style="color: white;">Don't have an account? Register!</a></p>
	</div>
</div>