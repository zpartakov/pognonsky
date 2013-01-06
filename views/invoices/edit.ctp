<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
		<legend><?php __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('insurance_id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('reference_number');
		echo $this->Form->input('description');
		echo $this->Form->input('amount');
		echo $this->Form->input('sent_to_insurance');
		echo $this->Form->input('refund');
		echo $this->Form->input('refund_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Invoice.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Insurances', true), array('controller' => 'insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insurance', true), array('controller' => 'insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>