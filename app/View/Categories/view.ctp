<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('IdCategorias'); ?></dt>
		<dd>
			<?php echo h($category['Category']['idCategorias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Categoria'); ?></dt>
		<dd>
			<?php echo h($category['Category']['Nombre_Categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['idCategorias'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['idCategorias']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['idCategorias']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
