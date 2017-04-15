<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('project_id');
		echo $this->Form->input('project_name');
		echo $this->Form->input('extra_hours');
		echo $this->Form->input('active');
		echo $this->Form->input('start_date');
		echo $this->Form->input('finish_date');
		echo $this->Form->input('total_time');
		echo $this->Form->input('time_worked');
		echo $this->Form->input('percentaje');
		echo $this->Form->input('user_id');
		echo $this->Form->input('profile_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.project_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Project.project_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
