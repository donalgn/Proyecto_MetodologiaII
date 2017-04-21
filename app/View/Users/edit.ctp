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
 <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Edit', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/users\'' 
)); ?>
    <?php $this->Form->end() ?>
   
   </p>
</div>
</div>
        </div>
    </div>