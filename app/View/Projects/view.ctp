<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Project Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra Hours'); ?></dt>
		<dd>
			<?php echo h($project['Project']['extra_hours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($project['Project']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finish Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['finish_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Time'); ?></dt>
		<dd>
			<?php echo h($project['Project']['total_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Worked'); ?></dt>
		<dd>
			<?php echo h($project['Project']['time_worked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percentaje'); ?></dt>
		<dd>
			<?php echo h($project['Project']['percentaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['profile_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['project_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['project_id']), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['project_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
	</ul>
</div>
