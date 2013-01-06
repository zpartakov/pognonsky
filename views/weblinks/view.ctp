<?php
App::import('Lib', 'functions'); //imports app/libs/functions
?>
<div class="weblinks view">
<h2><?php  __('Weblink');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($weblink['Category']['name'], array('controller' => 'categories', 'action' => 'view', $weblink['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php #echo $weblink['Weblink']['url']; ?>
<?php echo $this->Html->link($weblink['Weblink']['url'], null, array('target'=>'_blank')); ?>

			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo urlise($weblink['Weblink']['description']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ordering'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['ordering']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Archived'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['archived']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Approved'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weblink['Weblink']['approved']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<?
			$idaction=$weblink['Weblink']['id'];
			?>
			<li><?
			e($html->link($html->image('toolbar/editor.png', array('alt' => 'Modifier')), array('action'=>'edit', $idaction), array('alt' => 'Modifier', 'title' => 'Modifier', 'escape' => false)));
			?></li>
			<li><?
			$delete_text = isset($delete_text) ? $delete_text : ___d('alaxos', 'do you really want to delete this item ?', true);
			e($html->link($html->image('toolbar/drop.png', array('alt' => __d('alaxos', 'delete', true))), array('action' => 'delete', $idaction), array('alt' => ___d('alaxos', 'delete', true), 'title' => ___d('alaxos', 'delete', true), 'escape' => false), $delete_text));
			?></li>
		<li><?php 
			e($html->link($html->image('toolbar/list.png', array('alt' => 'Liste')), array('action'=>'index'), array('alt' => 'Liste', 'title' => 'Liste', 'escape' => false)));
		?></li>
		<li><?php 
		e($html->link($html->image('toolbar/add.png', array('alt' => 'Nouveau')), array('action'=>'add'), array('alt' => 'Nouveau', 'title' => 'Nouveau', 'escape' => false)));

		#echo $this->Html->link(__('New Weblink', true), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
