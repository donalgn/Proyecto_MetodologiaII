<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-categories',

   ));
?>

<div id="contenedor-categories"> 

    <div class="page-header">
        
	<h2><?php echo __('Categories'); ?></h2>
        
        </div>
    
  <div class="col-md-12">

        
	<table class="table table-striped">    
 
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('category_name'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_category'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
	
		<td><?php echo h($category['Category']['category_name']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['enable_category']); ?>&nbsp;</td>
		<td class="actions">
	
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['category_id']),
                                 array('class' => 'btn btn-sm btn-default')); ?>
                    
                    <?php echo $this->Form->postLink('Delete', array( 'action' => 'delete',$category['Category']['category_id'] ),
   
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
