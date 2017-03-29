<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-Profiles',

   ));
?>

<div id="contenedor-profiles"> 

    <div class="page-header">
        
    
	<h2><?php echo __('Profiles'); ?></h2>
        
     </div>
        <div class="col-md-12">

        
	<table class="table table-striped">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('profile_name'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_profile'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($profiles as $profile): ?>
	<tr>
	
		<td><?php echo h($profile['Profile']['profile_name']); ?>&nbsp;</td>
		<td><?php echo h($profile['Profile']['enable_profile']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profile['Profile']['profile_id']),
                         array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profile['Profile']['profile_id']), 
                                array('class' => 'btn btn-sm btn-default'),__('Are you sure you want to delete # %s?', $profile['Profile']['profile_id'])); ?>
		
                
                </td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
            </div>
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
        