<div class="users view">
	
	<h2><?php ___('user');?></h2>
	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $user['User']['id'], 'delete_id' => $user['User']['id'], 'delete_text' => ___('do you really want to delete this user ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('role'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('username'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $user['User']['username']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('firstname'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $user['User']['firstname']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('lastname'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $user['User']['lastname']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('email'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $user['User']['email']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('last login'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($user['User']['last_login']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('enabled'); ?>
		</td>
		<td>:</td>
		<td>
			<?php
			echo $alaxosHtml->get_yes_no($user['User']['enabled']);
			?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($user['User']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($user['User']['modified']); ?>
		</td>
	</tr>
	</table>
</div>
