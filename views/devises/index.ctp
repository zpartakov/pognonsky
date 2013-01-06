<div class="devises index">
	<h2><?php __('Devises');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('lib');?></th>
			<th><?php echo $this->Paginator->sort('short');?></th>
			<th><?php echo $this->Paginator->sort('change');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($devises as $devise):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $devise['Devise']['id']; ?>&nbsp;</td>
		<td><?php echo $devise['Devise']['lib']; ?>&nbsp;</td>
		<td><?php echo $devise['Devise']['short']; ?>&nbsp;</td>
		<td><?php echo $devise['Devise']['change']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $devise['Devise']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $devise['Devise']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $devise['Devise']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $devise['Devise']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Devise', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>