<div class="users form">

	<?php echo $this->AlaxosForm->create('User');?>
	<?php echo $this->AlaxosForm->input('id'); ?>
	
 	<h2><?php ___('admin edit user'); ?></h2>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'back_to_view_id' => $user['User']['id']));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr>
		<td>
			<?php ___('role_id') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('role_id', array('label' => false)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('username') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('username', array('label' => false, 'class' => 'largeBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('password') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('new_password', array('type' => 'password', 'label' => false, 'class' => 'largeBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('firstname') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('firstname', array('label' => false, 'class' => 'largeBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('lastname') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('lastname', array('label' => false, 'class' => 'largeBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('email') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('email', array('label' => false, 'class' => 'largeBox')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('enabled') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('enabled', array('label' => false)); ?>
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
