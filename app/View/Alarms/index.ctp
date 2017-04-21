<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-alarms',

   ));
?>

<div id="contenedor-alarms"> 

    <div class="page-header">
	<h2><?php echo __('Alarms'); ?></h2>
   
                </div>
    
  <div class="col-md-12">

        
	<table class="table table-striped">    
 
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_alarm'); ?></th>
			
		
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alarms as $alarm): ?>
	<tr>
		
		
		<td>
			<?php echo $this->Html->link($alarm['Project']['project_name'], array('controller' => 'projects', 'action' => 'view', $alarm['Project']['project_name'])); ?>
		</td>
                
		<td><?php echo h($alarm['Alarm']['percentage']),'%'; ?>&nbsp;</td>
                <td><?php echo h($alarm['Alarm']['enable_alarm']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alarm['Alarm']['id_alarm']),
                                 array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alarm['Alarm']['id_alarm']), 
                                  array('class' => 'btn btn-sm btn-default',
        'confirm' => __('Are you sure you want to delete')
    )
);?>
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
	</div>
</div>
