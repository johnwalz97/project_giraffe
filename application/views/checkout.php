<?php
$this->load->view('partials/customers', ['title' => 'Checkout']);
var_dump($this->cart->contents());
?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- SHIPPING INFO BEGIN -->
<div class="container">
  	<h2>Shipping Information</h2>
  	<form action="/shopping/checkout" method="post" class="form-horizontal" role="form">
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="street" name="street" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="city" name="city" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="state" name="state" maxlength="2" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="zipcode"  name="zip" maxlength="5" placeholder="Zipcode...">
	      	</div>
	    </div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- BILLING INFO BEGIN -->
  	<h2>Billing Information</h2>
		<div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      	<div class="checkbox">
		        	<label><input type="checkbox" name="same_shipping"> Same as Shipping</label>
		      	</div>
		    </div>
		</div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">First Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="first_name" name="bill_first_name" placeholder="First name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Last Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="last_name" name="bill_last_name" placeholder="Last name...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Street Address:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="street" name="bill_street" placeholder="Address...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">City:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="city" name="bill_city" placeholder="City...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">State:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="state" name="bill_state" maxlength="2" placeholder="State...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Zipcode:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="zipcode" name="bill_zip" maxlength="5" placeholder="Zipcode...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2"><i class="fa fa-credit-card"></i> Card#:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card#...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Name:</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="name" name="name" placeholder="Name On Card...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">CVC (security code):</label>
	      	<div class="col-sm-3">
	        	<input type="text" class="form-control" id="cvc" name="cvc" maxlength="3" placeholder="CVC...">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-sm-2">Card Expiration:</label>
	      	<div class="col-sm-3">
	        	<input type="month" class="form-control" name="expiration" id="expiration"  maxlength="5">
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