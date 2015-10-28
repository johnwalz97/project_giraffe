<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/style.css">
	<style>
		body {
			background: url("/assets/bg-body.png");
		}
	</style>
</head>
<body>
<?php
$this->load->view('partials/foot');
if ($this->session->flashdata('errors')){
    $display = '';
}
else {
    $display = 'none';
}
?>
<div class="container">
	<div id="loginbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 sol-sm-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading sign_in">
				<div class="panel-title">Sign In</div>
			</div>
			<div style="padding-top: 30px;" class="panel-body login">
				<div style="display: <?=$display?>" id="login-alert" class="alert alert-danger col-sm-12"><?=$this->session->flashdata('errors')?></div>
				<form id="loginform" class="form-horizontal" role="form" action="/admins/login" method="post">
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i style="color: white" class="fa fa-user fa-lg "></i></span>
						<input id="login-username" type="text" class="form-control" placeholder="Username" name="user_name" required>
					</div>
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i style="color: white" class="fa fa-key fa-lg"></i></span>
						<input id="login-password" class="form-control" type="password" placeholder="Password" name="password" required>
					</div>
					<div class="col-sm-12 controls">
						<input id="btn-login" class="btn btn-success" type="submit" value="Sign-In">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>