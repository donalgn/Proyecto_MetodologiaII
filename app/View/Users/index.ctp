<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-users',

   ));
?>

<div id="contenedor-users"> 

<div class="page-header">
	<h2><?php echo __('Users'); ?></h2>
        
             </div>
	<table class="table table-striped">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname_1'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname_2'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('enable_user'); ?></th>
			<th><?php echo $this->Paginator->sort('profile_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname_1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname_2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mail']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['enable_user']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Profile']['profile_name'], array('controller' => 'profiles', 'action' => 'view', $user['Profile']['profile_name'])); ?>
		</td>
		<td class="actions">
	
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['user_id']), array('class' => 'btn btn-sm btn-default')); ?>
			
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
