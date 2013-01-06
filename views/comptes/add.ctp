<div class="comptes form">
<?php echo $this->Form->create('Compte');?>
	<fieldset>
		<legend><?php __('Add Compte'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		?>
Cpte id		<input id="CompteId" name="data[Compte][id]">
		<?
		echo $this->Form->input('lib');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comptes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
