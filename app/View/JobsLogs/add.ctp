<div class="jobsLogs form">
<?php echo $this->Form->create('JobsLog'); ?>
	<fieldset>
		<legend><?php echo __('Add Jobs Log'); ?></legend>
	<?php
		echo $this->Form->input('Observacion');
		echo $this->Form->input('Fecha');
		echo $this->Form->input('Hora_Inicio');
		echo $this->Form->input('Hora_Final');
		echo $this->Form->input('users_id');
		echo $this->Form->input('projects_id');
		echo $this->Form->input('categories_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
