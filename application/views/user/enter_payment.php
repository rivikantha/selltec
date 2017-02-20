<h1>Enter Payment</h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('user/enter_payment');?>
  
	<label for="payment_date">Payment Date</label>
	<input type="text" id="payment_date" name="payment_date" value="<?php echo set_value('payment_date'); ?>"></br></br>
	
	<label for="voucher_no">Voucher No</label>
	<input type="text" id="voucher_no" name="voucher_no" value="<?php echo set_value('voucher_no'); ?>"></br></br>

	<label for="payable_to">Payable to</label>
	<input type="text" id="payable_to" name="payable_to" value="<?php echo set_value('payable_to'); ?>"></br></br>

	<label for="payment_description">Payment Description</label>
	<input type="text" id="payment_description" name="payment_description" value="<?php echo set_value('payment_description'); ?>"></br></br>
	

	<label for="account_code">Account Code</label>
	<input type="text" id="account_code" name="account_code" value="<?php echo set_value('account_code'); ?>"></br></br>

	<label for="payment_amount">Amount</label>
	<input type="text" id="payment_amount" name="payment_amount" value="<?php echo set_value('payment_amount'); ?>"></br></br>

	<label for="payment_type">Payment Type</label>
	<input type="radio" name="payment_type" value="0">Bank
  	<input type="radio" name="payment_type" value="1">Cash<br><br>

  	<label for="payment_check_no">Check No</label>
	<input type="text" id="payment_check_no" name="payment_check_no" value="<?php echo set_value('payment_check_no'); ?>"></br></br>
	
	
	<input type="submit" name="enter_payment" value="Enter Payment">
			
</form>