<div class="impots form">
<?php echo $this->Form->create('Impot');?>
	<fieldset>
		<legend><?php __('Edit Impot'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Annee');
		echo $this->Form->input('Revenus');
		echo $this->Form->input('Fortune');
		echo $this->Form->input('AssuranceVie');
		echo $this->Form->input('Immobilier');
		echo $this->Form->input('rem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Impot.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Impot.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Impots', true), array('action' => 'index'));?></li>
	</ul>
</div>