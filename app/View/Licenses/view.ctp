<div class="licenses view">
<h2><?php  echo __('License'); ?></h2>
	<dl>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($license['Driver']['nombre'], array('controller' => 'drivers', 'action' => 'view', $license['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
			<?php echo h($license['License']['serial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($license['License']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit License'), array('action' => 'edit', $license['License']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete License'), array('action' => 'delete', $license['License']['id']), null, __('Are you sure you want to delete # %s?', $license['License']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
