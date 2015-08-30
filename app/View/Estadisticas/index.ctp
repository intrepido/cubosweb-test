<div class="estadisticas index">
	<h2><?php echo __('Estadisticas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('percent'); ?></th>
			<th><?php echo $this->Paginator->sort('startup_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($estadisticas as $estadistica): ?>
	<tr>
		<td><?php echo h($estadistica['Estadistica']['id']); ?>&nbsp;</td>
		<td><?php echo h($estadistica['Estadistica']['name']); ?>&nbsp;</td>
		<td><?php echo h($estadistica['Estadistica']['percent']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estadistica['Startup']['name'], array('controller' => 'startups', 'action' => 'view', $estadistica['Startup']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadistica['Estadistica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadistica['Estadistica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadistica['Estadistica']['id']), null, __('Are you sure you want to delete # %s?', $estadistica['Estadistica']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estadistica'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Startups'), array('controller' => 'startups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Startup'), array('controller' => 'startups', 'action' => 'add')); ?> </li>
	</ul>
</div>
