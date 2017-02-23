<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('IdProyectos'); ?></dt>
		<dd>
			<?php echo h($project['Project']['idProyectos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Proyecto'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Nombre_Proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horas Extras'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Horas_Extras']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activacion'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Activacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Fecha_Inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Fecha_Final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiempo Total'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Tiempo_Total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiempo Trabajado'); ?></dt>
		<dd>
			<?php echo h($project['Project']['Tiempo_Trabajado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['idProyectos'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['idProyectos']), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['idProyectos']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($project['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id User'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido 1'); ?></th>
		<th><?php echo __('Apellido 2'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Profiles Id Perfil'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id_user']; ?></td>
			<td><?php echo $user['Nombre']; ?></td>
			<td><?php echo $user['Apellido_1']; ?></td>
			<td><?php echo $user['Apellido_2']; ?></td>
			<td><?php echo $user['Correo']; ?></td>
			<td><?php echo $user['Password']; ?></td>
			<td><?php echo $user['profiles_id_Perfil']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id_user'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id_user'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id_user']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id_user']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
