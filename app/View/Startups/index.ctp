<div class="startups index">
	<h2><?php echo __('Startups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('founder_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($startups as $startup): ?>
	<tr>
		<td><?php echo h($startup['Startup']['id']); ?>&nbsp;</td>
		<td><?php echo h($startup['Startup']['name']); ?>&nbsp;</td>
		<td><?php echo h($startup['Startup']['address']); ?>&nbsp;</td>
		<td><?php echo h($startup['Startup']['type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($startup['Founder']['name'], array('controller' => 'founders', 'action' => 'view', $startup['Founder']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $startup['Startup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $startup['Startup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $startup['Startup']['id']), null, __('Are you sure you want to delete # %s?', $startup['Startup']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Startup'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Founders'), array('controller' => 'founders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('controller' => 'founders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadisticas'), array('controller' => 'estadisticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadistica'), array('controller' => 'estadisticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
