
	<?php
	
	 include_once('heder.php');
	// include_once('model.php');
	?>
	<h1>Add Customer</h1>
	<form action="#" method="get">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea>
		
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
		<label for="account">accountno:</label>
		<input type="tel" id="phone" name="accountno"  required>
		
		<label for="account-type">Account Type:</label>
		<select id="account-type" name="account-type" required>
			<option value="">Select Account Type</option>
			<option value="Savings Account">Savings Account</option>
			<option value="Checking Account">Checking Account</option>
			<option value="Credit Card Account">Credit Card Account</option>
		</select>
		
		<label for="initial-deposit">Initial Deposit:</label>
		<input type="number" id="initial-deposit" name="initial-deposit" min="0" required>
		
		<input type="submit" name="submit"class="btn btn-primary ps-123">
	</form>
</body>
</html>
