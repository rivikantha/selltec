<h1>Celltec Cache Book Management System  - Admin Panel</h1>

<ul>
	<li>Projects
		<ul>
			<li><?php echo anchor('admin/create_project', 'Create Project');?></li>
			<li><?php echo anchor('admin/List_projects', 'List Project');?></li>
			<li><?php echo anchor('admin/cash_books', 'Cash Books');?></li>			
		</ul>
	</li>

	<li>User

		<ul>
			<li><?php echo anchor('admin/create_user', 'Create User');?></li>
			<li><?php echo anchor('admin/list_users', 'List Users');?></li>
			<li><?php echo anchor('admin/manage_users', 'Manage Users');?></li>			
		</ul>

	</li>

	<li>Account

		<ul>
			<li><?php echo anchor('admin/create_account', 'Create Account');?></li>
			<li><?php echo anchor('admin/list_accounts', 'List Accounts');?></li>
			<li><?php echo anchor('admin/assign_acccounts_to_project', 'Assign Accounts to Project');?></li>			
		</ul>

	</li>
</ul>