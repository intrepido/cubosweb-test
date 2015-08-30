<div class="startups form">
<?php echo $this->Form->create('Startup'); ?>
	<fieldset>
		<legend><?php echo __('Add Startup'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('type');
		echo $this->Form->input('founder_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Startups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Founders'), array('controller' => 'founders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Founder'), array('controller' => 'founders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadisticas'), array('controller' => 'estadisticas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estadistica'), array('controller' => 'estadisticas', 'action' => 'add')); ?> </li>
	</ul>
</div>
