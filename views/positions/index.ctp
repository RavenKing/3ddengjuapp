<div class="positions index">
	<h2><?php __('Positions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('width');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($positions as $position):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $position['Position']['id']; ?>&nbsp;</td>
		<td><?php echo $position['Position']['name']; ?>&nbsp;</td>
		<td><?php echo $position['Position']['width']; ?>&nbsp;</td>
		<td><?php echo $position['Position']['height']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $position['Position']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $position['Position']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Position', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Product Pics', true), array('controller' => 'product_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Pic', true), array('controller' => 'product_pics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Pics', true), array('controller' => 'store_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Pic', true), array('controller' => 'store_pics', 'action' => 'add')); ?> </li>
	</ul>
</div>