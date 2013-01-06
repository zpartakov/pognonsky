<div class="journals form">
<?php echo $this->Form->create('Journal');?>
	<fieldset>
		<legend><?php __('Add Journal'); ?></legend>
	<?php
		echo $this->Form->input('date');
		#echo $this->Form->input('cc');
		comptes("Crédit","Cc","cc");
		#echo $this->Form->input('cd');
		comptes("Débit","Cd","cd");
		echo $this->Form->input('mont', array("style"=>"height: 12px; width: 200px;"));
		echo $this->Form->input('lib', array("type"=>"textarea", "cols"=>"30", "rows"=>"3", "style"=>"width: 200px;"));

		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>(
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Journals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cc', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>
