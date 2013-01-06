<div class="bilans index">
	<h2><?php __('Bilans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('compte_id');?></th>
			<th><?php echo $this->Paginator->sort('lib');?></th>
			<th><?php echo $this->Paginator->sort('montant');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('annee');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bilans as $bilan):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bilan['Bilan']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bilan['Compte']['lib'], array('controller' => 'comptes', 'action' => 'view', $bilan['Compte']['id'])); ?>
		</td>
		<td><?php echo $bilan['Bilan']['lib']; ?>&nbsp;</td>
		<td><?php echo $bilan['Bilan']['montant']; ?>&nbsp;</td>
		<td><?php echo $bilan['Bilan']['type']; ?>&nbsp;</td>
		<td><?php echo $bilan['Bilan']['annee']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bilan['Bilan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bilan['Bilan']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bilan['Bilan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bilan['Bilan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bilan', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compte', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
</div>