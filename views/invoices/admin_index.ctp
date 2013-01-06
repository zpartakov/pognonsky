<div class="invoices index">
	
	<h2><?php ___('invoices');?></h2>
	 	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'container_class' => 'toolbar_container_list'));
	?>

	<?php
	echo $alaxosForm->create('Invoice', array('url' => $this->passedArgs));
	?>
    
	<table cellspacing="0" class="administration">
	
	<tr class="sortHeader">
		<th style="width:5px;"></th>
		<th><?php echo $this->Paginator->sort(__('insurance', true), 'Invoice.insurance_id');?></th>
		<th><?php echo $this->Paginator->sort(__('member', true), 'member_fullname');?></th>
		<th><?php echo $this->Paginator->sort(__('reference_number', true), 'Invoice.reference_number');?></th>
		<th><?php echo $this->Paginator->sort(__('description', true), 'Invoice.description');?></th>
		<th style="width:100px;"><?php echo $this->Paginator->sort(__('sent_to_insurance', true), 'Invoice.sent_to_insurance');?></th>
		<th style="width:80px;"><?php echo $this->Paginator->sort(__('amount', true), 'Invoice.amount');?></th>
		<th style="width:80px;"><?php echo $this->Paginator->sort(__('refund', true), 'Invoice.refund');?></th>
		<th style="width:100px;"><?php echo $this->Paginator->sort(__('created', true), 'Invoice.created');?></th>
		<th style="width:100px;"><?php echo $this->Paginator->sort(__('modified', true), 'Invoice.modified');?></th>
		
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	
	<tr class="searchHeader">
		<td></td>
			<td>
			<?php
				echo $this->AlaxosForm->filter_field('insurance_id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('member_id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('reference_number');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('description');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('sent_to_insurance');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('amount');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('refund');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('created');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('modified');
			?>
		</td>
		<td class="searchHeader" style="width:80px">
    		<div class="submitBar">
    					<?php echo $this->AlaxosForm->end(___('search', true));?>
    		</div>
    		
    		<?php
			echo $alaxosForm->create('Invoice', array('id' => 'chooseActionForm', 'url' => array('controller' => 'invoices', 'action' => 'actionAll')));
			?>
    	</td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($invoices as $invoice):
		$class = null;
		if ($i++ % 2 == 0)
		{
			$class = ' class="row"';
		}
		else
		{
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
		<?php
		echo $alaxosForm->checkBox('Invoice.' . $i . '.id', array('value' => $invoice['Invoice']['id']));
		?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Insurance']['name'], array('controller' => 'insurances', 'action' => 'view', $invoice['Insurance']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['Member']['fullname'], array('controller' => 'members', 'action' => 'view', $invoice['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $invoice['Invoice']['reference_number']; ?>
		</td>
		<td>
			<?php echo StringTool :: shorten($invoice['Invoice']['description'], 30); ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['sent_to_insurance']); ?>
		</td>
		<td>
			<?php echo $invoice['Invoice']['amount']; ?>
		</td>
		<td>
			<?php echo $invoice['Invoice']['refund']; ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['created']); ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($invoice['Invoice']['modified']); ?>
		</td>
		<td class="actions">

			<?php echo $html->link($html->image('/alaxos/img/toolbar/loupe.png'), array('action' => 'view', $invoice['Invoice']['id']), array('class' => 'to_detail', 'escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_edit.png'), array('action' => 'edit', $invoice['Invoice']['id']), array('escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_drop.png'), array('action' => 'delete', $invoice['Invoice']['id']), array('escape' => false), sprintf(___("are you sure you want to delete '%s' ?", true), $invoice['Invoice']['id'])); ?>

		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 |
	 	<?php echo $this->Paginator->numbers();?>	 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	
	<?php
if($i > 0)
{
	echo '<div class="choose_action">';
	echo ___d('alaxos', 'action to perform on the selected items', true);
	echo '&nbsp;';
	echo $alaxosForm->input_actions_list();
	echo '&nbsp;';
	echo $alaxosForm->end(array('label' =>___d('alaxos', 'go', true), 'div' => false));
	echo '</div>';
}
?>
	
</div>