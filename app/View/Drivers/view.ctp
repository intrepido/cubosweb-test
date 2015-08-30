<div class="drivers view">
<h2><?php  echo __('Driver'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver'), array('action' => 'edit', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver'), array('action' => 'delete', $driver['Driver']['id']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Licenses'); ?></h3>
	<?php if (!empty($driver['License'])): ?>
		<dl>
			<dt><?php echo __('Driver Id'); ?></dt>
		<dd>
	<?php echo $driver['License']['driver_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
	<?php echo $driver['License']['serial']; ?>
&nbsp;</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $driver['License']['id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit License'), array('controller' => 'licenses', 'action' => 'edit', $driver['License']['id'])); ?></li>
			</ul>
		</div>
	</div>
	