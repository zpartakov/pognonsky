<div class="weblinks form">
<?php echo $this->Form->create('Weblink');?>
	<fieldset>
		<legend><?php __('Edit Weblink'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Weblink.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Weblink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Weblinks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>