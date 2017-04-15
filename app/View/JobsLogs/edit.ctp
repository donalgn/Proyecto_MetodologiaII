<div class="jobsLogs form">
<?php echo $this->Form->create('JobsLog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobs Log'); ?></legend>
	<?php
		echo $this->Form->input('idBitacora');
		echo $this->Form->input('username');
		echo $this->Form->input('project_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('date');
		echo $this->Form->input('date_work');
		echo $this->Form->input('observations');
		echo $this->Form->input('total_hours');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobsLog.idBitacora')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('JobsLog.idBitacora')))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
