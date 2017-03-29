<div class="alarms index">
	<h2><?php echo __('Alarms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_alarm'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_alarm'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alarms as $alarm): ?>
	<tr>
		<td><?php echo h($alarm['Alarm']['id_alarm']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alarm['Project']['project_id'], array('controller' => 'projects', 'action' => 'view', $alarm['Project']['project_id'])); ?>
		</td>
		<td><?php echo h($alarm['Alarm']['enable_alarm']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alarm['Alarm']['id_alarm'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alarm['Alarm']['id_alarm'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alarm['Alarm']['id_alarm']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['Alarm']['id_alarm']))); ?>
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
		<li><?php echo $this->Html->link(__('New Alarm'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
