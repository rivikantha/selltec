<h1>create project</h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('admin/create_project');?>
  
	<label for="project_id">Project id</label>
	<input type="text" id="project_id" name="project_id" value="<?php echo set_value('project_id'); ?>"></br></br>
	
	<label for="project_name">Project Name</label>
	<input type="text" id="project_name" name="project_name" value="<?php echo set_value('project_name'); ?>"></br></br>
	
	<label for="project_description">Project Description</label>
	<textarea id="project_description" name="project_description" rows="10" cols="30"><?php echo set_value('project_description'); ?></textarea></br></br>
	
	<input type="submit" name="create_project" value="Create Project">
			
</form>