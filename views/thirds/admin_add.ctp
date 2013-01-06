<div class="thirds form">
<?php echo $this->Form->create('Third');?>
	<fieldset>
 		<legend><?php __('Admin Add Third'); ?></legend>
	<?php
		echo $this->Form->input('CATID');
		echo $this->Form->input('user_id');
		echo $this->Form->input('THIRD');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Thirds', true), array('action' => 'index'));?></li>
	</ul>
</div>