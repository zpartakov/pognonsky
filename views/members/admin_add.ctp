<div class="members form">

	<?php echo $this->AlaxosForm->create('Member');?>
	
 	<h2><?php ___('admin add member'); ?></h2>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr>
		<td>
			<?php ___('firstname') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('firstname', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('lastname') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('lastname', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
 		<td></td>
 		<td></td>
 		<td>
			<?php echo $this->AlaxosForm->end(___('submit', true)); ?> 		</td>
 	</tr>
	</table>

</div>
