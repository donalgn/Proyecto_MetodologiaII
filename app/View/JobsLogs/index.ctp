<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-jobslogs',

   ));
?>

<div id="contenedor-jobslogs"> 

<div class="page-header">
	<h2><?php echo __('Labor Register'); ?></h2>
        
          </div>
	<table class="table table-striped">
	<tr>
		
			<th><?php echo $this->Paginator->sort('date'); ?></th>
                        <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('project_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_work'); ?></th>
                        <th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('total_hours'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobsLogs as $jobsLog): ?>
	<tr>
	
		<td><?php echo h($jobsLog['JobsLog']['date']); ?>&nbsp;</td>
                <td><?php echo h($jobsLog['JobsLog']['user_id']); ?>&nbsp;</td>
                <td><?php echo h($jobsLog['JobsLog']['project_id']); ?>&nbsp;</td>
                <td>
		<?php echo $this->Html->link($jobsLog['Category']['category_id'], array('controller' => 'categories', 'action' => 'view', $jobsLog['Category']['category_id'])); ?>
		</td>
		<td><?php echo h($jobsLog['JobsLog']['date_work']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['observations']); ?>&nbsp;</td>
		<td><?php echo h($jobsLog['JobsLog']['total_hours']); ?>&nbsp;</td>
		

	
		
		<td class="actions">
			
<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobsLog['JobsLog']['idBitacora']), array('class' => 'btn btn-sm btn-default')); ?>
                    
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
	        
        </p>
	<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
</div>
