<div class="usersProjects form">
<?php echo $this->Form->create('UsersProject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Project'); ?></legend>
	<?php
		echo $this->Form->input('users_id_user');
		echo $this->Form->input('projects_idProyectos');
		echo $this->Form->input('enable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersProject.users_id_user')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UsersProject.users_id_user')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
