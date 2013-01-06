<div class="journals view">
<h2><?php  __('Journal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $journal['Journal']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($journal['cc']['lib'], array('controller' => 'comptes', 'action' => 'view', $journal['cc']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cd'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($journal['cd']['lib'], array('controller' => 'comptes', 'action' => 'view', $journal['cd']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mont'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $journal['Journal']['mont']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lib'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $journal['Journal']['lib']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $journal['Journal']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journal', true), array('action' => 'edit', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Journal', true), array('action' => 'delete', $journal['Journal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cc', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>
