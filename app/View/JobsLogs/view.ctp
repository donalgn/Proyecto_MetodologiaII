<div class="jobsLogs view">
<h2><?php echo __('Jobs Log'); ?></h2>
	<dl>
		<dt><?php echo __('IdBitacora'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['idBitacora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['Observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['Fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicio'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['Hora_Inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Final'); ?></dt>
		<dd>
			<?php echo h($jobsLog['JobsLog']['Hora_Final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsLog['Users'][''], array('controller' => 'users', 'action' => 'view', $jobsLog['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsLog['Projects'][''], array('controller' => 'projects', 'action' => 'view', $jobsLog['Projects']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categories'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobsLog['Categories'][''], array('controller' => 'categories', 'action' => 'view', $jobsLog['Categories']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
