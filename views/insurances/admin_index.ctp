<div class="insurances index">
	
	<h2><?php ___('insurances');?></h2>
	 	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'container_class' => 'toolbar_container_list'));
	?>

	<?php
	echo $alaxosForm->create('Insurance', array('url' => $this->passedArgs));
	?>
    
	<table cellspacing="0" class="administration">
	
	<tr class="sortHeader">
		<th style="width:5px;"></th>
		<th><?php echo $this->Paginator->sort(__('name', true), 'Insurance.name');?></th>
		<th style="width:120px;"><?php echo $this->Paginator->sort(__('created', true), 'Insurance.created');?></th>
		<th style="width:120px;"><?php echo $this->Paginator->sort(__('modified', true), 'Insurance.modified');?></th>
		
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	
	<tr class="searchHeader">
		<td></td>
			<td>
			<?php
				echo $this->AlaxosForm->filter_field('name');
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
			echo $alaxosForm->create('Insurance', array('id' => 'chooseActionForm', 'url' => array('controller' => 'insurances', 'action' => 'actionAll')));
			?>
    	</td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($insurances as $insurance):
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
		echo $alaxosForm->checkBox('Insurance.' . $i . '.id', array('value' => $insurance['Insurance']['id']));
		?>
		</td>
		<td>
			<?php echo $insurance['Insurance']['name']; ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($insurance['Insurance']['created']); ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($insurance['Insurance']['modified']); ?>
		</td>
		<td class="actions">

			<?php echo $html->link($html->image('/alaxos/img/toolbar/loupe.png'), array('action' => 'view', $insurance['Insurance']['id']), array('class' => 'to_detail', 'escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_edit.png'), array('action' => 'edit', $insurance['Insurance']['id']), array('escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_drop.png'), array('action' => 'delete', $insurance['Insurance']['id']), array('escape' => false), sprintf(___("are you sure you want to delete '%s' ?", true), $insurance['Insurance']['name'])); ?>

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