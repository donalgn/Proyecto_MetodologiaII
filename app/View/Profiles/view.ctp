<div class="profiles view">
<h2><?php echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Profile Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['profile_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Name'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['profile_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enable Profile'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['enable_profile']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['profile_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['profile_id']), array('confirm' => __('Are you sure you want to delete # %s?', $profile['Profile']['profile_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($profile['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lastname 1'); ?></th>
		<th><?php echo __('Lastname 2'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Enable User'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profile['User'] as $user): ?>
		<tr>
			<td><?php echo $user['user_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['lastname_1']; ?></td>
			<td><?php echo $user['lastname_2']; ?></td>
			<td><?php echo $user['mail']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['enable_user']; ?></td>
			<td><?php echo $user['profile_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['user_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['user_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['user_id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['user_id']))); ?>
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
