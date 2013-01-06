<div class="members index">
	
	<h2><?php ___('members');?></h2>
	 	
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'container_class' => 'toolbar_container_list'));
	?>

	<?php
	echo $alaxosForm->create('Member', array('url' => $this->passedArgs));
	?>
    
	<table cellspacing="0" class="administration">
	
	<tr class="sortHeader">
		<th style="width:5px;"></th>
		<th><?php echo $this->Paginator->sort(__('firstname', true), 'Member.firstname');?></th>
		<th><?php echo $this->Paginator->sort(__('lastname', true), 'Member.lastname');?></th>
		<th style="width:120px;"><?php echo $this->Paginator->sort(__('created', true), 'Member.created');?></th>
		<th style="width:120px;"><?php echo $this->Paginator->sort(__('modified', true), 'Member.modified');?></th>
		
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	
	<tr class="searchHeader">
		<td></td>
			<td>
			<?php
				echo $this->AlaxosForm->filter_field('firstname');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('lastname');
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
			echo $alaxosForm->create('Member', array('id' => 'chooseActionForm', 'url' => array('controller' => 'members', 'action' => 'actionAll')));
			?>
    	</td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($members as $member):
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
		echo $alaxosForm->checkBox('Member.' . $i . '.id', array('value' => $member['Member']['id']));
		?>
		</td>
		<td>
			<?php echo $member['Member']['firstname']; ?>
		</td>
		<td>
			<?php echo $member['Member']['lastname']; ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($member['Member']['created']); ?>
		</td>
		<td>
			<?php echo DateTool :: sql_to_date($member['Member']['modified']); ?>
		</td>
		<td class="actions">

			<?php echo $html->link($html->image('/alaxos/img/toolbar/loupe.png'), array('action' => 'view', $member['Member']['id']), array('class' => 'to_detail', 'escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_edit.png'), array('action' => 'edit', $member['Member']['id']), array('escape' => false)); ?>
			<?php echo $html->link($html->image('/alaxos/img/toolbar/small_drop.png'), array('action' => 'delete', $member['Member']['id']), array('escape' => false), sprintf(___("are you sure you want to delete '%s' ?", true), $member['Member']['id'])); ?>

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