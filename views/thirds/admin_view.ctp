<div class="thirds view">
<h2><?php  __('Third');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $third['Third']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CATID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $third['Third']['CATID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $third['Third']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('THIRD'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $third['Third']['THIRD']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Third', true), array('action' => 'edit', $third['Third']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Third', true), array('action' => 'delete', $third['Third']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $third['Third']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Thirds', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Third', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
