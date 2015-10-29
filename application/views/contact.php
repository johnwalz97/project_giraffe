<?php
$this->load->view('partials/head_signin', ['title' => 'Contact Us']);
$this->load->view('partials/nav_customer');
?>
<div class="container">
	<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Contact Us</div>
			</div>  
			<div class="panel-body" >
				<form id="signupform" class="form-horizontal" role="form" action="/welcome/contact_submit" method="post">
					<div class="form-group">
						<label for="email" class="col-md-3 control-label">Email</label>
						<div class="col-md-9">
							<input required type="email" class="form-control" name="email" placeholder="Email Address">
						</div>
					</div>
					<div class="form-group">
						<label for="firstname" class="col-md-3 control-label">Name</label>
						<div class="col-md-9">
							<input required type="text" class="form-control" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-md-3 control-label">Comment</label>
						<div class="col-md-9">
							<textarea required class="form-control" name="last_name" placeholder="Comment"></textarea>
						</div>
					</div>
					<div class="form-group">
						<!-- Button -->                                        
						<div class="col-md-offset-3 col-md-9">
							<input id="btn-signup" type="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>