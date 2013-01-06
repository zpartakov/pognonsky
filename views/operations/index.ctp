<?
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php

?>
<div class="operations index">
	<h2><?php __('Operations');?></h2>
<?php echo $this->Paginator->sort('id');?>
	<table cellpadding="0" cellspacing="0">
	<tr>

		
			<th><?php echo $this->Paginator->sort('DATES');?></th>
			<th><?php echo $this->Paginator->sort('Débit','account_id');?></th>
			<th><?php echo $this->Paginator->sort('Crédit','third_id');?></th>
			<th><?php echo $this->Paginator->sort('Libellé','COMMENTS');?></th>
			<th><?php echo $this->Paginator->sort('Montant','IMP');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($operations as $operation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $operation['Operation']['DATES']; ?>&nbsp;</td>
				<td>
			<?php echo $this->Html->link($operation['Account']['ACCOUNT'], array('controller' => 'accounts', 'action' => 'view', $operation['Account']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['Third']['THIRD'], array('controller' => 'thirds', 'action' => 'view', $operation['Third']['id'])); ?>
		</td>
		<td><?php echo $operation['Operation']['COMMENTS']; ?>&nbsp;</td>
		<td style="text-align: right"><?php echo normalisermontant($operation['Operation']['IMP']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $operation['Operation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $operation['Operation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $operation['Operation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operation['Operation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Operation', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thirds', true), array('controller' => 'thirds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Third', true), array('controller' => 'thirds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
