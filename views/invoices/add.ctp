<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
		<legend><?php __('Add Invoice'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Insurances', true), array('controller' => 'insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insurance', true), array('controller' => 'insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>