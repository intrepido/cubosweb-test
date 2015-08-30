<div class="licenses form">
<?php echo $this->Form->create('License'); ?>
	<fieldset>
		<legend><?php echo __('Edit License'); ?></legend>
	<?php
		echo $this->Form->input('driver_id');
		echo $this->Form->input('serial');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('License.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('License.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
