<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('idCategorias');
		echo $this->Form->input('Nombre_Categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.idCategorias')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Category.idCategorias')))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>