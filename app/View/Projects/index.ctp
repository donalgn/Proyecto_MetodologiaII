<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-projects',

   ));
?>

<div id="contenedor-projects"> 

    <div class="page-header">
	<h2><?php echo __('Projects'); ?></h2>
        
        </div>
     <div class="col-md-12">

      <table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_name'); ?></th>
			<th><?php echo $this->Paginator->sort('extra_hours'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('finish_date'); ?></th>
			<th><?php echo $this->Paginator->sort('total_time'); ?></th>
			<th><?php echo $this->Paginator->sort('time_worked'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['project_id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['project_name']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['extra_hours']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['active']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['finish_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['total_time']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['time_worked']); ?>&nbsp;</td>
		<td class="actions">
		
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['project_id']),
                                array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['project_id']),
                                array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['project_id']))); ?>
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
	?>	
        
        </p>
	<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
</div>

