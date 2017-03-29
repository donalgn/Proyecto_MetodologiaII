<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable Category'); ?></dt>
		<dd>
			<?php echo h($category['Category']['enable_category']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['category_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['category_id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['category_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs Logs'), array('controller' => 'jobs_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobs Log'), array('controller' => 'jobs_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs Logs'); ?></h3>
	<?php if (!empty($category['JobsLog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdBitacora'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('Finish Time'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Total Hours'); ?></th>
		<th><?php echo __('Enable Jobs'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Users Projects User Project Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['JobsLog'] as $jobsLog): ?>
		<tr>
			<td><?php echo $jobsLog['idBitacora']; ?></td>
			<td><?php echo $jobsLog['date']; ?></td>
			<td><?php echo $jobsLog['user_id']; ?></td>
			<td><?php echo $jobsLog['project_id']; ?></td>
			<td><?php echo $jobsLog['start_time']; ?></td>
			<td><?php echo $jobsLog['finish_time']; ?></td>
			<td><?php echo $jobsLog['observations']; ?></td>
			<td><?php echo $jobsLog['total_hours']; ?></td>
			<td><?php echo $jobsLog['enable_jobs']; ?></td>
			<td><?php echo $jobsLog['category_id']; ?></td>
			<td><?php echo $jobsLog['users_projects_user_project_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs_logs', 'action' => 'view', $jobsLog['idBitacora'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs_logs', 'action' => 'edit', $jobsLog['idBitacora'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs_logs', 'action' => 'delete', $jobsLog['idBitacora']), array('confirm' => __('Are you sure you want to delete # %s?', $jobsLog['idBitacora']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobs Log'), array('controller' => 'jobs_logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
