<div class="members view">
	
	<h2><?php ___('member');?></h2>
	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $member['Member']['id'], 'delete_id' => $member['Member']['id'], 'delete_text' => ___('do you really want to delete this member ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('firstname'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $member['Member']['firstname']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('lastname'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $member['Member']['lastname']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($member['Member']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($member['Member']['modified']); ?>
		</td>
	</tr>
	</table>
</div>
