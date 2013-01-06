<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Firstname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['firstname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lastname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['lastname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Organisation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['organisation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prefered Language'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['prefered_language']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Login'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enabled'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['enabled']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified_by']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations', true), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation', true), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thirds', true), array('controller' => 'thirds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Third', true), array('controller' => 'thirds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Accounts');?></h3>
	<?php if (!empty($user['Account'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('ACCOUNT'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Account'] as $account):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $account['id'];?></td>
			<td><?php echo $account['user_id'];?></td>
			<td><?php echo $account['ACCOUNT'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'accounts', 'action' => 'delete', $account['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Comptes');?></h3>
	<?php if (!empty($user['Compte'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Lib'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Compte'] as $compte):
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
<div class="related">
	<h3><?php __('Related Operations');?></h3>
	<?php if (!empty($user['Operation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('NUMID'); ?></th>
		<th><?php __('TEMPID'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('DATES'); ?></th>
		<th><?php __('CAT'); ?></th>
		<th><?php __('Third Id'); ?></th>
		<th><?php __('COMMENTS'); ?></th>
		<th><?php __('IMP'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Operation'] as $operation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $operation['id'];?></td>
			<td><?php echo $operation['NUMID'];?></td>
			<td><?php echo $operation['TEMPID'];?></td>
			<td><?php echo $operation['user_id'];?></td>
			<td><?php echo $operation['DATES'];?></td>
			<td><?php echo $operation['CAT'];?></td>
			<td><?php echo $operation['third_id'];?></td>
			<td><?php echo $operation['COMMENTS'];?></td>
			<td><?php echo $operation['IMP'];?></td>
			<td><?php echo $operation['account_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation', true), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Thirds');?></h3>
	<?php if (!empty($user['Third'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('CATID'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('THIRD'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Third'] as $third):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $third['id'];?></td>
			<td><?php echo $third['CATID'];?></td>
			<td><?php echo $third['user_id'];?></td>
			<td><?php echo $third['THIRD'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'thirds', 'action' => 'view', $third['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'thirds', 'action' => 'edit', $third['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'thirds', 'action' => 'delete', $third['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $third['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Third', true), array('controller' => 'thirds', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
