<div class="journals index">
	<h2><?php __('Journals');?></h2>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('cc');?></th>
			<th><?php echo $this->Paginator->sort('cd');?></th>
			<th><?php echo $this->Paginator->sort('mont');?></th>
			<th><?php echo $this->Paginator->sort('lib');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($journals as $journal):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $journal['Journal']['date']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journal['cc']['lib'], array('controller' => 'comptes', 'action' => 'view', $journal['cc']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($journal['cd']['lib'], array('controller' => 'comptes', 'action' => 'view', $journal['cd']['id'])); ?>
		</td>
		<td><?php echo $journal['Journal']['mont']; ?>&nbsp;</td>
		<td><?php echo $journal['Journal']['lib']; ?>&nbsp;</td>
		<td><?php echo $journal['Journal']['id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $journal['Journal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $journal['Journal']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $journal['Journal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $journal['Journal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Journal', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comptes', true), array('controller' => 'comptes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cc', true), array('controller' => 'comptes', 'action' => 'add')); ?> </li>
	</ul>
	<!-- begin search form -->
	<?php
	echo $form->create("Journal",array('action' => 'index'));
	?>
	
			<?
				echo $form->input("q", array('label' => 'Search for', 'style' => 'width: 100px; font-size: smaller'));
			?>

				<?
				echo $form->end("Search"); 
				?>

<!-- end search form --> 
</div>
