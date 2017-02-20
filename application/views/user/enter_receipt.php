<ul>
	<li><?php echo anchor('user', 'Back to User');?></li>
	<li>log out</li>

</ul>

<h1>Enter Receipt</h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('user/enter_receipt');?>
  
	<label for="receipt_date">Receipt Date</label>
	<input type="text" id="receipt_date" name="receipt_date" value="<?php echo set_value('receipt_date'); ?>"></br></br>
	
	<label for="receipt_no">Receipt No</label>
	<input type="text" id="receipt_no" name="receipt_no" value="<?php echo set_value('receipt_no'); ?>"></br></br>

	<label for="received_from">Reveived From</label>
	<input type="text" id="received_from" name="received_from" value="<?php echo set_value('received_from'); ?>"></br></br>

	<label for="receipt_description">Receipt Description</label>
	<input type="text" id="receipt_description" name="receipt_description" value="<?php echo set_value('receipt_description'); ?>"></br></br>
	

	<label for="account_code">Account Code</label>
	<input type="text" id="account_code" name="account_code" value="<?php echo set_value('account_code'); ?>"></br></br>

	<label for="receipt_amount">Amount</label>
	<input type="text" id="receipt_amount" name="receipt_amount" value="<?php echo set_value('receipt_amount'); ?>"></br></br>

	<label for="amount_type">Amount Type</label>
	<input type="radio" name="amount_type" value="0">Bank
  	<input type="radio" name="amount_type" value="1">Cash</br></br>

  	<label for="receipt_check_no">Check No</label>
	<input type="text" id="receipt_check_no" name="receipt_check_no" value="<?php echo set_value('receipt_check_no'); ?>"></br></br>
	
	
	<input type="submit" name="enter_receipt" value="Enter Receipt">
			
</form>