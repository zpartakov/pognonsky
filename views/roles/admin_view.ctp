<div class="roles view">
	
	<h2><?php ___('role');?></h2>
	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $role['Role']['id'], 'delete_id' => $role['Role']['id'], 'delete_text' => ___('do you really want to delete this role ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('name'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $role['Role']['name']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('order'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $role['Role']['order']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($role['Role']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($role['Role']['modified']); ?>
		</td>
	</tr>
	</table>
	
	<h3><?php echo ___('users', true); ?></h3>
	
	<table border="0" class="view">
	<?php 
	foreach($role['User'] as $user)
	{
	?>
	<tr>
		<td>
			<?php
			echo $this->AlaxosHtml->link($user['firstname'] . ' ' . $user['lastname'] . ' (' . $user['username'] . ')', '/admin/users/view/' . $user['id']);
			?>
		</td>
	</tr>
	<?php 
	}
	?>
	</table>
	
</div>
