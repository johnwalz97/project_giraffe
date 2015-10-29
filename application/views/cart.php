<?php echo form_open(base_url().'shopping/update'); ?>
<?php $this->load->view('partials/customers', ['title' => 'Cart']);
if(!empty($this->session->flashdata('errors'))){
	$display = '';
} else {
	$display = 'none';
}
?>
<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- CART TABLE -->
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<table class="table table-bordered" cellpadding="6" cellspacing="1" style="width:100%" border="0">
		<tr class="info">
			<th></th>
			<th>QTY</th>
			<th>Item</th>
			<th style="text-align:right">Price</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($this->cart->contents() as $items): ?>
			<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
			<tr>
			  <td align="center"><?= anchor('shopping/delete/'.$items['rowid'], "<i class='fa fa-times'></i>"); ?></td>
			  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
			  <td>
				<?php echo $items['name']; ?>
					<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
						<p>
							<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
								<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
							<?php endforeach; ?>
						</p>
					<?php endif; ?>
			  </td>
			  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		<tr>
		  <td colspan="2"> </td>
		  <td class="right info"><strong>Total <i class="fa fa-usd"></i> (usd)</strong></td>
		  <td class="right info">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>
		</table>
		<input type="submit" class="btn  btn-warning" value="Update yout Cart">
		</form>
		<a href="/mains/" class="btn btn-success" role="button">Continue Shopping</a>
	</div>
	<a href="/mains/checkout" class="btn btn-primary col-md-2 col-md-offset-1">Checkout as Guest</a>
</div>
<div class="container">
	<div id="loginbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 sol-sm-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Log In to access your account</div>
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
		<p><a href="/welcome/register_page">Don't have an account? Register!</a></p>
	</div>
</div>
</body>
</html>