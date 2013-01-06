<div class="devises form">
<?php echo $this->Form->create('Devise');?>
	<fieldset>
		<legend><?php __('Edit Devise'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lib');
		echo $this->Form->input('short');
		echo $this->Form->input('change');
		echo $this->Form->input('Compte');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Devise.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Devise.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Devises', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>