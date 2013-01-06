<div class="insurances view">
	
	<h2><?php ___('insurance');?></h2>
	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $insurance['Insurance']['id'], 'delete_id' => $insurance['Insurance']['id'], 'delete_text' => ___('do you really want to delete this insurance ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('name'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $insurance['Insurance']['name']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($insurance['Insurance']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($insurance['Insurance']['modified']); ?>
		</td>
	</tr>
	</table>
</div>
