<ul>
	<li><?php echo anchor('admin', 'Back to Admin');?></li>
	<li>log out</li>

</ul>


<h1>Edit project <?php echo $project['project_id']; ?> </h1>

<?php echo validation_errors(); ?>	  

<?php echo form_open('admin/edit_project');?>
  
	<label for="project_id">Project id</label>
	<input type="hidden" id="project_id" name="project_id" value="<?php echo $project['project_id']; ?>"></br></br>
	
	<label for="project_name">Project Name</label>
	<input type="text" id="project_name" name="project_name" value="<?php echo $project['project_name']; ?>"></br></br>
	
	<label for="project_description">Project Description</label>
	<textarea id="project_description" name="project_description" rows="10" cols="30"><?php echo $project['project_description']; ?></textarea></br></br>
	
	<input type="submit" name="Edit_project" value="Edit Project">
			
</form>



