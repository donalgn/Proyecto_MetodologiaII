<div class="profiles view">
<h2><?php echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id Perfil'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id_Perfil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Perfil'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['Nombre_Perfil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id_Perfil'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id_Perfil']), array('confirm' => __('Are you sure you want to delete # %s?', $profile['Profile']['id_Perfil']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
	</ul>
</div>
