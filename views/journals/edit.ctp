<div class="journals form">
<?php echo $this->Form->create('Journal');?>
	<fieldset>
		<legend><?php __('Edit Journal'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('cc');
		echo $this->Form->input('cd');
		echo $this->Form->input('mont');
		echo $this->Form->input('lib');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Journal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Journal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Journals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cc', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>