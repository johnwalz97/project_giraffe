<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
</head>
<body>
	<h1>Shipping Information</h1>
	<form action="" method="post">
		<p>First Name: <input type="text" name="first_name"></p>
		<p>Last Name: <input type="text" name="last_name"></p>
		<p>Street Address: <input type="text" name="street"></p>
		<p>City: <input type="text" name="city"></p>
		<p>State: <input type="text" name="state" maxlength="2"></p>
		<p>Zipcode: <input type="text" name="zip" maxlength="5"></p>
		<p><input type="submit" value="submit" name="shipping"></p>
	</form>

	<h1>Billing Information</h1>
	<form action="" method="post">
		<p><input type="checkbox" name="same_shipping">Same as Shipping</p>
		<p>First Name: <input type="text" name="first_name"></p>
		<p>Last Name: <input type="text" name="last_name"></p>
		<p>Street Address: <input type="text" name="street"></p>
		<p>City: <input type="text" name="city"></p>
		<p>State: <input type="text" name="state" maxlength="2"></p>
		<p>Zipcode: <input type="text" name="zip" maxlength="5"></p>
		<p>Card#:<input type="text" name="card_number"></p>
		<p>CVC (security code): <input type="text" name="cvc" maxlength="3"></p>
		<p>Expiration: <input type="month" name="expiration"></p>
		<p><input type="submit" value="Pay" name="billing"></p>
	</form>	

</body>
</html>