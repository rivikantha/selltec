<ul>
	<li><?php echo anchor('user', 'Back to User');?></li>
	<li>log out</li>

</ul>

<h1>Receipts of the project <?php echo "{Project Name}"?></h1>

<table border="1">
	
	<th>Date</th>
	<th>Receipt No</th>
	<th>Reveived From</th>
	<th>Receipt Description</th>
	<th>Account Code</th>
	<th>Amount Cash</th>
	<th>Amount Bank</th>
	<th>Check No</th>
	<th></th>


<?php foreach ($receipts->result() as $row):?>

	<tr>

		<td><?php echo $row->receipt_date;?></td>
		<td><?php echo $row->receipt_no;?></td>
		<td><?php echo $row->received_from;?></td>
		<td><?php echo $row->receipt_description;?></td>
		<td><?php echo $row->account_code;?></td>

		<?php if($row->amount_type == 1):?>

			<td><?php echo $row->receipt_amount;?></td>
			<td></td>
			<td></td>

		<?php else:?>

			<td></td>
			<td><?php echo $row->receipt_amount;?></td>
			<td><?php echo $row->receipt_check_no;?></td>

		<?php endif;?>
		
		<td><?php echo anchor('user/edit_receipt/'.$row->receipt_no, 'Edit');?></td>

	</tr>	

<?php endforeach;?>

</table>