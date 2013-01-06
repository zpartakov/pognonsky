<div class="impots form">
<?php echo $this->Form->create('Impot');?>
	<fieldset>
		<legend><?php __('Add Impot'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Impots', true), array('action' => 'index'));?></li>
	</ul>
</div>