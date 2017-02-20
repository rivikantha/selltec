<h1>Create User</h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('admin/create_user');?>
  
	<!--<label for="user_id">User id</label>
	<input type="text" id="user_id" name="user_id" value="<?php echo set_value('user_id'); ?>"></br></br>-->
	
	<label for="user_name">User Name</label>
	<input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>"></br></br>

	<label for="user_password">User Password</label>
	<input type="password" id="user_password" name="user_password" value="<?php echo set_value('user_password'); ?>"></br></br>

	<label for="user_role">User Role</label>
	<input type="text" id="user_role" name="user_role" value="<?php echo set_value('user_role'); ?>"></br></br>

	<label for="project_id">Project ID</label>
	<input type="text" id="project_id" name="project_id" value="<?php echo set_value('project_id'); ?>"></br></br>
	
	
	
	<input type="submit" name="create_project" value="Create Project">
			
</form>