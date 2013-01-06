<div class="bilans view">
<h2><?php  __('Bilan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bilan['Bilan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Compte'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($bilan['Compte']['lib'], array('controller' => 'comptes', 'action' => 'view', $bilan['Compte']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lib'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bilan['Bilan']['lib']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Montant'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bilan['Bilan']['montant']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bilan['Bilan']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Annee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bilan['Bilan']['annee']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bilan', true), array('action' => 'edit', $bilan['Bilan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Bilan', true), array('action' => 'delete', $bilan['Bilan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bilan['Bilan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bilans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bilan', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>
