<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id User'); ?></dt>
		<dd>
			<?php echo h($user['User']['id_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido 1'); ?></dt>
		<dd>
			<?php echo h($user['User']['Apellido_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido 2'); ?></dt>
		<dd>
			<?php echo h($user['User']['Apellido_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($user['User']['Correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profiles Id Perfil'); ?></dt>
		<dd>
			<?php echo h($user['User']['profiles_id_Perfil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
