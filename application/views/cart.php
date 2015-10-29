<?php echo form_open(base_url().'shopping/update'); ?>
<?php $this->load->view('partials/customers', ['title' => 'Cart']) ?>
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
</div>
<div class="container">
	<a href="/mains/checkout" class="btn btn-primary">Checkout --></a>
</div>
</body>
</html>