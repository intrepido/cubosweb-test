<div class="estadisticas form">
<?php echo $this->Form->create('Estadistica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estadistica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('percent');
		echo $this->Form->input('startup_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estadistica.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Estadistica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estadisticas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Startups'), array('controller' => 'startups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Startup'), array('controller' => 'startups', 'action' => 'add')); ?> </li>
	</ul>
</div>
