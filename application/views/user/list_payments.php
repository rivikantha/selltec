<ul>
	<li><?php echo anchor('user', 'Back to User');?></li>
	<li>log out</li>

</ul>

<h1>Payments of the project <?php echo "{Project Name}"?></h1>

<table border="1">
	
	<th>Date</th>
	<th>Voucher No</th>
	<th>Payable To</th>
	<th>Voucher Description</th>
	<th>Account Code</th>
	<th>Amount Cash</th>
	<th>Amount Bank</th>
	<th>Check No</th>
	<th></th>


<?php foreach ($payments->result() as $row):?>

	<tr>

		<td><?php echo $row->payment_date;?></td>
		<td><?php echo $row->voucher_no;?></td>
		<td><?php echo $row->payable_to;?></td>
		<td><?php echo $row->payment_description;?></td>
		<td><?php echo $row->account_code;?></td>

		<?php if($row->payment_type == 1):?>

			<td><?php echo $row->payment_amount;?></td>
			<td></td>
			<td></td>

		<?php else:?>

			<td></td>
			<td><?php echo $row->payment_amount;?></td>
			<td><?php echo $row->payment_check_no;?></td>

		<?php endif;?>
		
		<td><?php echo anchor('user/edit_payment/'.$row->voucher_no, 'Edit');?></td>

	</tr>	

<?php endforeach;?>

</table>