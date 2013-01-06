<div class="invoices index">
	<h2><?php __('Invoices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('insurance_id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th><?php echo $this->Paginator->sort('reference_number');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('sent_to_insurance');?></th>
			<th><?php echo $this->Paginator->sort('refund');?></th>
			<th><?php echo $this->Paginator->sort('refund_date');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($invoices as $invoice):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $invoice['Invoice']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Insurance']['name'], array('controller' => 'insurances', 'action' => 'view', $invoice['Insurance']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Member']['fullname'], array('controller' => 'members', 'action' => 'view', $invoice['Member']['id'])); ?>
		</td>
		<td><?php echo $invoice['Invoice']['reference_number']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['description']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['amount']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['sent_to_insurance']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['refund']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['refund_date']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['created']; ?>&nbsp;</td>
		<td><?php echo $invoice['Invoice']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $invoice['Invoice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $invoice['Invoice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Insurances', true), array('controller' => 'insurances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insurance', true), array('controller' => 'insurances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>