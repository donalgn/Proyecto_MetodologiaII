<div class="usersProjects view">
<h2><?php echo __('Users Project'); ?></h2>
	<dl>
		<dt><?php echo __('User Project Id'); ?></dt>
		<dd>
			<?php echo h($usersProject['UsersProject']['user_project_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersProject['Project']['project_id'], array('controller' => 'projects', 'action' => 'view', $usersProject['Project']['project_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersProject['User']['name'], array('controller' => 'users', 'action' => 'view', $usersProject['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable'); ?></dt>
		<dd>
			<?php echo h($usersProject['UsersProject']['enable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Project'), array('action' => 'edit', $usersProject['UsersProject']['user_project_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Project'), array('action' => 'delete', $usersProject['UsersProject']['user_project_id']), array('confirm' => __('Are you sure you want to delete # %s?', $usersProject['UsersProject']['user_project_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
