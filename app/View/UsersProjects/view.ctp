<div class="usersProjects view">
<h2><?php echo __('Users Project'); ?></h2>
	<dl>
		<dt><?php echo __('Users Id User'); ?></dt>
		<dd>
			<?php echo h($usersProject['UsersProject']['users_id_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects IdProyectos'); ?></dt>
		<dd>
			<?php echo h($usersProject['UsersProject']['projects_idProyectos']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Users Project'), array('action' => 'edit', $usersProject['UsersProject']['users_id_user'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Project'), array('action' => 'delete', $usersProject['UsersProject']['users_id_user']), array('confirm' => __('Are you sure you want to delete # %s?', $usersProject['UsersProject']['users_id_user']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Project'), array('action' => 'add')); ?> </li>
	</ul>
</div>
