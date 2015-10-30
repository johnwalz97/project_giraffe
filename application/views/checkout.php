<?php
$this->load->view('partials/customers', ['title' => 'Checkout']);
if(!empty($address)){
	$first = $address['first_name'];
	$last = $address['last_name'];
	$street = $address['street'];
	$city = $address['city'];
	$state = $address['state'];
	$zip = $address['zip'];
}
else {
	$first = '';
	$last = '';
	$street = '';
	$city = '';
	$state = '';
	$zip = '';
}
?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- SHIPPING INFO BEGIN -->
<div class="container">
  	<h2>Shipping Information</h2>
  	<form action="/shopping/checkout" method="post" class="form-horizontal" role="form">
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="first_name" name="first_name" value="<?=$first?>" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="last_name" name="last_name" value="<?=$last?>" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="street" name="street" value="<?=$street?>" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="city" name="city" value="<?=$city?>" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="state" name="state" maxlength="2" value="<?=$state?>" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="zipcode"  name="zip" maxlength="5" value="<?=$zip?>" placeholder="Zipcode...">
	      	</div>
	    </div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- BILLING INFO BEGIN -->
<?php
if(!empty($address)){
	$first = $address['bill_first_name'];
	$last = $address['bill_last_name'];
	$street = $address['bill_street'];
	$city = $address['bill_city'];
	$state = $address['bill_state'];
	$zip = $address['bill_zip'];
	$card = $address['card_number'];
	$name = $address['name'];
	$cvc = $address['cvc'];
	$expiration = $address['expiration'];
}
else {
	$first = '';
	$last = '';
	$street = '';
	$city = '';
	$state = '';
	$zip = '';
	$card = '';
	$name = '';
	$cvc = '';
	$expiration = '';
}
?>
  	<h2>Billing Information</h2>
		<div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      	<div class="checkbox">
		        	<label><input type="checkbox" id="same" name="same_shipping"> Same as Shipping</label>
		      	</div>
		    </div>
		</div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_first_name" name="bill_first_name" value="<?=$first?>" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_last_name" name="bill_last_name" value="<?=$last?>" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_street" name="bill_street" value="<?=$street?>" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_city" name="bill_city" value="<?=$city?>" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_state" name="bill_state" maxlength="2" value="<?=$state?>" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="bill_zipcode" name="bill_zip" value="<?=$zip?>" maxlength="5" placeholder="Zipcode...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2"><i class="fa fa-credit-card"></i> Card#:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="card_number" name="card_number" value="<?=$card?>" placeholder="Card#...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="name" name="name" value="<?=$name?>" placeholder="Name On Card...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">CVC (security code):</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="cvc" name="cvc" maxlength="3" value="<?=$cvc?>" placeholder="CVC...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Card Expiration:</label>
	      	<div class="col-sm-3">
	        	<input type="month" class="form-control" name="expiration" id="expiration" value="<?=$expiration?>" maxlength="5">
	      	</div>
	    </div>		
	    <div class="form-group">
	      	<label class="control-label col-sm-2"></label>
	      	<div class="col-sm-1">
	        	<input type="submit" class="form-control btn btn-primary" id="submit"  name="billing" value="Pay">
	      	</div>
	    </div>	    
	</form>
</div>
<script>
	$('#same').change(function(){
		if (this.checked) {
			$('#bill_first_name').val($('#first_name').val());
			$('#bill_last_name').val($('#last_name').val());
			$('#bill_street').val($('#street').val());
			$('#bill_city').val($('#city').val());
			$('#bill_state').val($('#state').val());
			$('#bill_zipcode').val($('#zipcode').val());
		}
		else {
			$('#bill_first_name').val("");
			$('#bill_last_name').val("");
			$('#bill_street').val("");
			$('#bill_city').val("");
			$('#bill_state').val("");
			$('#bill_zipcode').val("");			
		}
	})
</script>