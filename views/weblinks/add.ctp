<div class="weblinks form">
<?php echo $this->Form->create('Weblink');?>
	<fieldset>
		<legend><?php __('Add Weblink'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
		echo $this->Form->input('published');
		echo $this->Form->input('ordering');
		echo $this->Form->input('archived');
		echo $this->Form->input('approved');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Weblinks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>