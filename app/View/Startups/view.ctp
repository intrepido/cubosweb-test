<div class="startups view">
<h2><?php  echo __('Startup'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($startup['Startup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($startup['Startup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($startup['Startup']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($startup['Startup']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Founder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($startup['Founder']['name'], array('controller' => 'founders', 'action' => 'view', $startup['Founder']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Startup'), array('action' => 'edit', $startup['Startup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Startup'), array('action' => 'delete', $startup['Startup']['id']), null, __('Are you sure you want to delete # %s?', $startup['Startup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Startups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Startup'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Founders'), array('controller' => 'founders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('controller' => 'founders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadisticas'), array('controller' => 'estadisticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadistica'), array('controller' => 'estadisticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estadisticas'); ?></h3>
	<?php if (!empty($startup['Estadistica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Startup Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($startup['Estadistica'] as $estadistica): ?>
		<tr>
			<td><?php echo $estadistica['id']; ?></td>
			<td><?php echo $estadistica['name']; ?></td>
			<td><?php echo $estadistica['percent']; ?></td>
			<td><?php echo $estadistica['startup_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estadisticas', 'action' => 'view', $estadistica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estadisticas', 'action' => 'edit', $estadistica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estadisticas', 'action' => 'delete', $estadistica['id']), null, __('Are you sure you want to delete # %s?', $estadistica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estadistica'), array('controller' => 'estadisticas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
