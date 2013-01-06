<div class="thirds index">
	<h2><?php __('Thirds');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('CATID');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('THIRD');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($thirds as $third):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $third['Third']['id']; ?>&nbsp;</td>
		<td><?php echo $third['Third']['CATID']; ?>&nbsp;</td>
		<td><?php echo $third['Third']['user_id']; ?>&nbsp;</td>
		<td><?php echo $third['Third']['THIRD']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $third['Third']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $third['Third']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $third['Third']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $third['Third']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Third', true), array('action' => 'add')); ?></li>
	</ul>
</div>