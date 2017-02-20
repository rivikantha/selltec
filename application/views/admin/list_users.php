<ul>
	<li><?php echo anchor('admin', 'Back to Admin');?></li>
	<li>log out</li>

</ul>

<table border="1">
	
	<th>User ID</th>
	<th>User Name</th>
	<th>User Role</th>
	<th>Project ID</th>
	<th></th>


<?php foreach ($users->result() as $row):?>

	<tr>

		<td><?php echo $row->user_id;?></td>
		<td><?php echo $row->user_name;?></td>
		<td><?php echo $row->user_role;?></td>
		<td><?php echo $row->project_id;?></td>
		<td><?php echo anchor('admin/edit_user/'.$row->project_id, 'Edit');?></td>

	</tr>	

<?php endforeach;?>

</table>