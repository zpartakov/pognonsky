<div class="roles form">

	<?php echo $this->AlaxosForm->create('Role');?>
	<?php echo $this->AlaxosForm->input('id'); ?>
	
 	<h2><?php ___('admin edit role'); ?></h2>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'back_to_view_id' => $role['Role']['id']));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr>
		<td>
			<?php ___('name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('name', array('label' => false, 'class' => 'largeBox mandatory')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('order') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('order', array('label' => false, 'class' => 'smallBox mandatory')); ?>
		</td>
	</tr>
	<tr>
 		<td></td>
 		<td></td>
 		<td>
			<?php echo $this->AlaxosForm->end(___('update', true)); ?> 		</td>
 	</tr>
	</table>

</div>
