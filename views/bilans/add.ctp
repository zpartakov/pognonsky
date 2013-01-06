<div class="bilans form">
<?php echo $this->Form->create('Bilan');?>
	<fieldset>
		<legend><?php __('Add Bilan'); ?></legend>
	<?php
		echo $this->Form->input('compte_id');
		echo $this->Form->input('lib');
		echo $this->Form->input('montant');
		echo $this->Form->input('type');
		echo $this->Form->input('annee');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bilans', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>