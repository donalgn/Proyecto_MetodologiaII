<div class="container">
    <div class="row">
        <div class="col-md-6">
            
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	
       
		<?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Username'));?>
		<?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Name')); ?>
		<?php echo $this->Form->input('lastname_1',array('class' => 'form-control', 'label' => 'Last Name 1')); ?>
		<?php echo $this->Form->input('lastname_2',array('class' => 'form-control', 'label' => 'Last Name 2')); ?>
		<?php echo $this->Form->input('mail',array('class' => 'form-control', 'label' => 'E-mail')); ?>
		<?php echo $this->Form->input('password',array('class' => 'form-control', 'label' => 'Password')); ?>
                <p>
                <?php $options = array ('Y'=> 'Y', 'N'=>'N');
                 echo $this->Form->input
                ('enable_user',array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
            'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
		</p>
                <P>
                 <?php echo $this->Form->input('profile_id',array(
                'type' => 'select',
                'empty' => 'Select Profile', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'Profile'));?>        
                </P>
	</fieldset>
          
             <p>
            
         <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Add', ['class' =>'btn btn-success']); ?>
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
             