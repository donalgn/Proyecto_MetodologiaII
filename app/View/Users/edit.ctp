<div class="container">
    <div class="row">
        <div class="col-md-6">

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	
		<?php echo $this->Form->input('user_id'); ?>
		<?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Username'));?>
		<?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Name')); ?>
		<?php echo $this->Form->input('lastname_1',array('class' => 'form-control', 'label' => 'Last Name 1')); ?>
		<?php echo $this->Form->input('lastname_2',array('class' => 'form-control', 'label' => 'Last Name 2')); ?>
		<?php echo $this->Form->input('mail',array('class' => 'form-control', 'label' => 'Email')); ?>

               <p>
                <?php $options = array ('Y'=> 'Y', 'N'=>'N');
                 echo $this->Form->input
                ('enable_user', array ('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold')); ?>
		</p>
               <P>
                 <?php echo $this->Form->input('profile_id',array('class' => 'form-control', 'label' => 'Profile')); ?>
                </P>
	</fieldset>
 <p>
        <?php echo $this->Form->end(array('label' => 'Edit', 'class' =>'btn btn-success')); ?>
            </p>
</div>
</div>
        </div>
    </div>