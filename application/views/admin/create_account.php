<ul>
	<li><?php echo anchor('admin', 'Back to Admin');?></li>
	<li>log out</li>

</ul>


<h1>Create Account</h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('admin/create_account');?>
  
	<label for="account_code">Account Code</label>
	<input type="text" id="account_code" name="account_code" value="<?php echo set_value('account_code'); ?>"></br></br>
	
	<label for="account_name">Account Name</label>
	<input type="text" id="account_name" name="account_name" value="<?php echo set_value('account_name'); ?>"></br></br>
	

	<label for="account_location">Account Location</label>
	<input type="text" id="account_location" name="account_location" value="<?php echo set_value('account_location'); ?>"></br></br>

	<label for="balance_sheet_code">Balance Sheet Code</label>
	<input type="text" id="balance_sheet_code" name="balance_sheet_code" value="<?php echo set_value('balance_sheet_code'); ?>"></br></br>
	
	
	<input type="submit" name="create_project" value="Create Account">
			
</form>