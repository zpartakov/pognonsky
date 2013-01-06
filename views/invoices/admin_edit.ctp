<div class="invoices form">

	<?php echo $this->AlaxosForm->create('Invoice');?>
	<?php echo $this->AlaxosForm->input('id'); ?>
	
 	<h2><?php ___('admin edit invoice'); ?></h2>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'back_to_view_id' => $invoice['Invoice']['id']));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr>
		<td>
			<?php ___('member_id') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('member_id', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('reference_number') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('reference_number', array('label' => false, 'class' => 'megaBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('description') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('description', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('amount') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('amount', array('label' => false, 'class' => 'mediumBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('sent_to_insurance') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('sent_to_insurance', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('insurance_id') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('insurance_id', array('label' => false, 'empty' => true)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('refund') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('refund', array('label' => false, 'class' => 'mediumBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('refund_date') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('refund_date', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
 		<td></td>
 		<td></td>
 		<td>
			<?php echo $this->AlaxosForm->end(___('update', true)); ?> 		</td>
 	</tr>
	</table>

</div>
