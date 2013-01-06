<div class="members view">
<h2><?php  __('Member');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Firstname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['firstname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lastname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['lastname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $member['Member']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member', true), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Member', true), array('action' => 'delete', $member['Member']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Invoices');?></h3>
	<?php if (!empty($member['Invoice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Insurance Id'); ?></th>
		<th><?php __('Member Id'); ?></th>
		<th><?php __('Reference Number'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Sent To Insurance'); ?></th>
		<th><?php __('Refund'); ?></th>
		<th><?php __('Refund Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Invoice'] as $invoice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $invoice['id'];?></td>
			<td><?php echo $invoice['insurance_id'];?></td>
			<td><?php echo $invoice['member_id'];?></td>
			<td><?php echo $invoice['reference_number'];?></td>
			<td><?php echo $invoice['description'];?></td>
			<td><?php echo $invoice['amount'];?></td>
			<td><?php echo $invoice['sent_to_insurance'];?></td>
			<td><?php echo $invoice['refund'];?></td>
			<td><?php echo $invoice['refund_date'];?></td>
			<td><?php echo $invoice['created'];?></td>
			<td><?php echo $invoice['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
