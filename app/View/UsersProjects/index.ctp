<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-usersprojects',

   ));
?>

<div id="contenedor-profiles"> 

    <div class="page-header">
        
	<h2><?php echo __('Users by Projects'); ?></h2>
        
    </div>
        
	  <div class="col-md-12">

        
	<table class="table table-striped">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('project_id', 'Projects'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id', 'Users'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_user_project', 'Enable'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usersProjects as $usersProject): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($usersProject['Project']['project_name'], array('controller' => 'projects', 'action' => 'view', $usersProject['Project']['project_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersProject['User']['name'], array('controller' => 'users', 'action' => 'view', $usersProject['User']['user_id'])); ?>
		</td>
		<td><?php echo h($usersProject['UsersProject']['enable_user_project']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersProject['UsersProject']['user_project_id']), 
                         array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersProject['UsersProject']['user_project_id']),
                      array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $usersProject['UsersProject']['user_project_id']))); ?>
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
