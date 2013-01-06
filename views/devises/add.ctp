<div class="devises form">
<?php echo $this->Form->create('Devise');?>
	<fieldset>
		<legend><?php __('Add Devise'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Devises', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>