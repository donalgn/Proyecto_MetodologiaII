<div class="alarms form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alarm'); ?></legend>
	<?php
		echo $this->Form->input('id_alarm');
		echo $this->Form->input('project_id');
		echo $this->Form->input('enable_alarm');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alarm.id_alarm')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Alarm.id_alarm')))); ?></li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
