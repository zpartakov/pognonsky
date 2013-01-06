<div class="insurances form">

	<?php echo $this->AlaxosForm->create('Insurance');?>
	<?php echo $this->AlaxosForm->input('id'); ?>
	
 	<h2><?php ___('admin edit insurance'); ?></h2>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'back_to_view_id' => $insurance['Insurance']['id']));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr>
		<td>
			<?php ___('name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('name', array('label' => false)); ?>
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
