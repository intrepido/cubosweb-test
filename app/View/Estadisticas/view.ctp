<div class="estadisticas view">
<h2><?php  echo __('Estadistica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estadistica['Estadistica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estadistica['Estadistica']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($estadistica['Estadistica']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Startup'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estadistica['Startup']['name'], array('controller' => 'startups', 'action' => 'view', $estadistica['Startup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estadistica'), array('action' => 'edit', $estadistica['Estadistica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estadistica'), array('action' => 'delete', $estadistica['Estadistica']['id']), null, __('Are you sure you want to delete # %s?', $estadistica['Estadistica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadisticas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadistica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Startups'), array('controller' => 'startups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Startup'), array('controller' => 'startups', 'action' => 'add')); ?> </li>
	</ul>
</div>
