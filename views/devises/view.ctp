<div class="devises view">
<h2><?php  __('Devise');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $devise['Devise']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lib'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $devise['Devise']['lib']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $devise['Devise']['short']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Change'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $devise['Devise']['change']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Devise', true), array('action' => 'edit', $devise['Devise']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Devise', true), array('action' => 'delete', $devise['Devise']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $devise['Devise']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devises', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devise', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Comptes');?></h3>
	<?php if (!empty($devise['Compte'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Lib'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($devise['Compte'] as $compte):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $compte['id'];?></td>
			<td><?php echo $compte['user_id'];?></td>
			<td><?php echo $compte['lib'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comptes', 'action' => 'view', $compte['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comptes', 'action' => 'edit', $compte['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comptes', 'action' => 'delete', $compte['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $compte['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
