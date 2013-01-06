<div class="operations form">
<?php echo $this->Form->create('Operation');?>
	<fieldset>
 		<legend><?php __('Edit Operation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('NUMID');
		echo $this->Form->input('TEMPID');
		echo $this->Form->input('user_id');
		echo $this->Form->input('DATES');
		echo $this->Form->input('CAT');
		echo $this->Form->input('third_id');
		echo $this->Form->input('COMMENTS');
		echo $this->Form->input('IMP');
		echo $this->Form->input('account_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Operation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Operation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thirds', true), array('controller' => 'thirds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Third', true), array('controller' => 'thirds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>