<?php
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php
?>
<div class="comptes view">
<h2><?php  __('Compte');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $compte['Compte']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($compte['User']['username'], array('controller' => 'users', 'action' => 'view', $compte['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lib'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<h1><?php echo $compte['Compte']['lib']; ?></h1>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Solde'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php 		
				

			soldecompte($compte['Compte']['id'], date("Y-m-d")); 
			//$solde=number_format($solde, 2, '.', '\'');
			?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>



<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compte', true), array('action' => 'edit', $compte['Compte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Compte', true), array('action' => 'delete', $compte['Compte']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $compte['Compte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="extraitcompte">
<?
echo extraitcompte($compte['Compte']['id'],'2011-01-01','2011-12-31');
?>
</div>
