<div class="weblinks index">
	<h2><?php __('Weblinks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('ordering');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($weblinks as $weblink):
		$idaction=$weblink['Weblink']['id'];
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($weblink['Category']['name'], array('controller' => 'categories', 'action' => 'view', $weblink['Category']['id'])); ?>
		</td>
		<td><?php 
		e($html->link($html->image('toolbar/loupe.png', array('alt' => 'Voir')), array('action'=>'view', $idaction), array('alt' => 'Voir', 'title' => 'Voir', 'escape' => false)));
		echo "&nbsp;";
		echo $weblink['Weblink']['title']; ?>&nbsp;
		</td>
		<td><?php echo $this->Html->link($weblink['Weblink']['url'], null, array('target'=>'_blank')); ?>&nbsp;</td>
		<td><?php echo $weblink['Weblink']['date']; ?>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="actions">

			<?php				
			e($html->link($html->image('toolbar/loupe.png', array('alt' => 'Voir')), array('action'=>'view', $idaction), array('alt' => 'Voir', 'title' => 'Voir', 'escape' => false)));
			e($html->link($html->image('toolbar/editor.png', array('alt' => 'Modifier')), array('action'=>'edit', $idaction), array('alt' => 'Modifier', 'title' => 'Modifier', 'escape' => false)));
			$delete_text = isset($delete_text) ? $delete_text : ___d('alaxos', 'do you really want to delete this item ?', true);
			e($html->link($html->image('toolbar/drop.png', array('alt' => __d('alaxos', 'delete', true))), array('action' => 'delete', $idaction), array('alt' => ___d('alaxos', 'delete', true), 'title' => ___d('alaxos', 'delete', true), 'escape' => false), $delete_text));
?>
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
		<li><?php 
		e($html->link($html->image('toolbar/add.png', array('alt' => 'Nouveau')), array('action'=>'add'), array('alt' => 'Nouveau', 'title' => 'Nouveau', 'escape' => false)));
		?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
