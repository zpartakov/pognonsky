<?
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php
?>
<div class="comptes index">
	<h2><?php __('Comptes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('lib');?></th>
			<th>solde</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($comptes as $compte):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $compte['Compte']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($compte['User']['username'], array('controller' => 'users', 'action' => 'view', $compte['User']['id'])); ?>
		</td>
		<td><?#php echo $compte['Compte']['lib']; ?>&nbsp;
		
		<?php echo $this->Html->link(__($compte['Compte']['lib'], true), array('action' => 'view', $compte['Compte']['id'])); ?>
		
		</td>
		<td>
		<?
				global $solde;
$solde="";
			soldecompte($compte['Compte']['id'], date("Y-m-d")); 
			echo $solde;
		?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $compte['Compte']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $compte['Compte']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $compte['Compte']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $compte['Compte']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Compte', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
