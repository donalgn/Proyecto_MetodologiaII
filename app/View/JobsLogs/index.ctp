<div class="jobsLogs index">
	<h2><?php echo __('Jobs Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idBitacora'); ?></th>
			<th><?php echo $this->Paginator->sort('Observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('Hora_Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('Hora_Final'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('projects_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categories_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobsLogs as $jobsLog): ?>
	<tr>
		<td><?php echo h($jobsLog['JobsLog']['idBitacora']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['Observacion']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['Fecha']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['Hora_Inicio']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['Hora_Final']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobsLog['Users'][''], array('controller' => 'users', 'action' => 'view', $jobsLog['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobsLog['Projects'][''], array('controller' => 'projects', 'action' => 'view', $jobsLog['Projects']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobsLog['Categories'][''], array('controller' => 'categories', 'action' => 'view', $jobsLog['Categories']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobsLog['JobsLog']['idBitacora'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobsLog['JobsLog']['idBitacora'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobsLog['JobsLog']['idBitacora']), array('confirm' => __('Are you sure you want to delete # %s?', $jobsLog['JobsLog']['idBitacora']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Jobs Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
