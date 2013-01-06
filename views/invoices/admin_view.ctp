<div class="invoices view">
	
	<h2><?php ___('invoice');?></h2>
	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $invoice['Invoice']['id'], 'delete_id' => $invoice['Invoice']['id'], 'delete_text' => ___('do you really want to delete this invoice ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('member'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->Html->link($invoice['Member']['fullname'], array('controller' => 'members', 'action' => 'view', $invoice['Member']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('reference number'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $invoice['Invoice']['reference_number']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('description'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosHtml->format_text($invoice['Invoice']['description']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('amount'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $invoice['Invoice']['amount']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('sent to insurance'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['sent_to_insurance']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('insurance'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->Html->link($invoice['Insurance']['name'], array('controller' => 'insurances', 'action' => 'view', $invoice['Insurance']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('refund'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $invoice['Invoice']['refund']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('refund date'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['refund_date']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['modified']); ?>
		</td>
	</tr>
	</table>
</div>
