<ul>
	<li><?php echo anchor('admin', 'Back to Admin');?></li>
	<li>log out</li>

</ul>

<table border="1">
	
	<th>Project Id</th>
	<th>Project Name</th>
	<th>Project Description</th>
	<th></th>


<?php foreach ($projects->result() as $row):?>

	<tr>

		<td><?php echo $row->project_id;?></td>
		<td><?php echo $row->project_name;?></td>
		<td><?php echo $row->project_description;?></td>
		<td><?php echo anchor('admin/edit_project/'.$row->project_id, 'Edit');?></td>

	</tr>	

<?php endforeach;?>

</table>