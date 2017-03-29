<div class="jobsLogs view">
<h2><?php echo __('Jobs Log'); ?></h2>
	<dl>
		<dt><?php echo __('IdBitacora'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['idBitacora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Work'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['date_work']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Hours'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['total_hours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsLog['Category']['category_id'], array('controller' => 'categories', 'action' => 'view', $jobsLog['Category']['category_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Project Id'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['user_project_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Id'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['project_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobs Log'), array('action' => 'edit', $jobsLog['JobsLog']['idBitacora'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jobs Log'), array('action' => 'delete', $jobsLog['JobsLog']['idBitacora']), array('confirm' => __('Are you sure you want to delete # %s?', $jobsLog['JobsLog']['idBitacora']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
