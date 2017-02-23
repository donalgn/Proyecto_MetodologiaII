<div class="profiles form">
<?php echo $this->Form->create('Profile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profile'); ?></legend>
	<?php
		echo $this->Form->input('id_Perfil');
		echo $this->Form->input('Nombre_Perfil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profile.id_Perfil')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Profile.id_Perfil')))); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
	</ul>
</div>
