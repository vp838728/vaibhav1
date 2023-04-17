<?php
include_once('heder.php');
?>
	<form>
		<label for="account">Account Number</label>
		<input type="text" id="account" name="account" placeholder="Enter your account number" required>

		<label for="amount">Amount</label>
		<input type="number" id="amount" name="amount" placeholder="Enter transaction amount" required>

		<label for="type">Transaction Type</label>
		<select id="type" name="type" required>
			<option value="">Select transaction type</option>
			<option value="deposit">Deposit</option>
			<option value="withdraw">Withdraw</option>
		</select>

		<button type="submit" class="py-3">Submit</button>
	</form>
</body>
</html>
