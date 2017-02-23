<div class="projects index">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idProyectos'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre_Proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('Horas_Extras'); ?></th>
			<th><?php echo $this->Paginator->sort('Activacion'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha_Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha_Final'); ?></th>
			<th><?php echo $this->Paginator->sort('Tiempo_Total'); ?></th>
			<th><?php echo $this->Paginator->sort('Tiempo_Trabajado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['idProyectos']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Nombre_Proyecto']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Horas_Extras']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Activacion']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Fecha_Inicio']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Fecha_Final']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Tiempo_Total']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['Tiempo_Trabajado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['idProyectos'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['idProyectos'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['idProyectos']), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['idProyectos']))); ?>
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
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
