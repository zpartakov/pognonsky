<div class="impots index">
<h2><?php __('Impots');?></h2> <a href="export">export csv</a>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Annee');?></th>
			<th><?php echo $this->Paginator->sort('Revenus');?></th>
			<th><?php echo $this->Paginator->sort('Fortune');?></th>
			<th><?php echo $this->Paginator->sort('AssuranceVie');?></th>
			<th><?php echo $this->Paginator->sort('Immobilier');?></th>
			<th>Résultat</th>
			<th>Mensuel</th>
			<th><?php echo $this->Paginator->sort('rem');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($impots as $impot):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $impot['Impot']['id']; ?>&nbsp;</td>
		<td><?php echo $impot['Impot']['Annee']; ?>&nbsp;</td>
		<td><?php echo $impot['Impot']['Revenus']; ?>&nbsp;</td>
		<td><?php echo $impot['Impot']['Fortune']; ?>&nbsp;</td>
		<td><?php echo $impot['Impot']['AssuranceVie']; ?>&nbsp;</td>
		<td><?php echo $impot['Impot']['Immobilier']; ?>&nbsp;</td>
		<td></td>
		<td><?php echo $impot['Impot']['rem']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $impot['Impot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $impot['Impot']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $impot['Impot']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $impot['Impot']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Impot', true), array('action' => 'add')); ?></li>
	</ul>
</div>