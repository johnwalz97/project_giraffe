<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/bootstrap.css">
	<title>Shopping Cart</title>
</head>
<body>
<!-- SHOPPING CART TABLE -->
	<div class="container">           
  		<table class="table table-bordered">
    		<thead>
      			<tr>
        			<th>Item</th>
        			<th>Price</th>
        			<th>Quantity</th>
        			<th>Total</th>
      			</tr>
    		</thead>
    		<?php "<tbody>" ?>
      			<?php"<tr>" ?>
       				<?= "<td>" . $product['name'] . "</td>"?>
        			<?= "<td>" . $product['price'] . "</td>"?>
        			<?= "<td>" . "QTY" . "</td>"?>
        			<?= "<td>" . "TOTAL" . "</td>"?>
      			<?php"</tr>" ?>
    		<?php "</tbody>" ?>
  		</table>
  		<p>Total: $PHP</p>
  		<button type="button" class="btn btn-success"><a href="#">Continue Shopping</a></button>

	</div>

<!-- SHIPPING INFO BEGIN -->
	<div class="container">
  		<h2>Shipping Information</h2>
	  	<form action="" methop="post" class="form-horizontal" role="form">
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
		        	<input type="text" class="form-control" id="zipcode"  name="zipcode" maxlength="5" placeholder="Zipcode...">
		      	</div>
		    </div>
		</div>
	</form>

<!-- BILLING INFO BEGIN -->
	<div class="container">
  		<h2>Billing Information</h2>
	  	<form action="" methop="post" class="form-horizontal" role="form">
  			<div class="checkbox">
    			<label><input type="checkbox" name="same_shipping"> Same as Shipping</label>
  			</div>
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
		        	<input type="text" class="form-control" id="zipcode" name="zipcode" maxlength="5" placeholder="Zipcode...">
		      	</div>
		    </div>
		    <div class="form-group">
		      	<label class="control-label col-sm-2">Card#:</label>
		      	<div class="col-sm-3">
		        	<input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card#...">
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
		        	<input type="submit" class="form-control" id="submit"  name="billing" value="Pay">
		      	</div>
		    </div>	    
		</div>
	</form>




</body>
</html>