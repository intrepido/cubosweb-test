<div class="founders view">
<h2><?php  echo __('Founder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($founder['Founder']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Founder'), array('action' => 'edit', $founder['Founder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Founder'), array('action' => 'delete', $founder['Founder']['id']), null, __('Are you sure you want to delete # %s?', $founder['Founder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Founders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Startups'), array('controller' => 'startups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Startup'), array('controller' => 'startups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Startups'); ?></h3>
	<?php if (!empty($founder['Startup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Founder Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($founder['Startup'] as $startup): ?>
		<tr>
			<td><?php echo $startup['id']; ?></td>
			<td><?php echo $startup['name']; ?></td>
			<td><?php echo $startup['address']; ?></td>
			<td><?php echo $startup['type']; ?></td>
			<td><?php echo $startup['founder_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'startups', 'action' => 'view', $startup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'startups', 'action' => 'edit', $startup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'startups', 'action' => 'delete', $startup['id']), null, __('Are you sure you want to delete # %s?', $startup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Startup'), array('controller' => 'startups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
