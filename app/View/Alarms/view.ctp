<div class="alarms view">
<h2><?php echo __('Alarm'); ?></h2>
	<dl>
		<dt><?php echo __('Id Alarm'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['id_alarm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable Alarm'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['enable_alarm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alarm['Project']['project_id'], array('controller' => 'projects', 'action' => 'view', $alarm['Project']['project_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percentage'); ?></dt>
		<dd>
			<?php echo h($alarm['Alarm']['percentage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alarm'), array('action' => 'edit', $alarm['Alarm']['id_alarm'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alarm'), array('action' => 'delete', $alarm['Alarm']['id_alarm']), array('confirm' => __('Are you sure you want to delete # %s?', $alarm['Alarm']['id_alarm']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Alarms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alarm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
