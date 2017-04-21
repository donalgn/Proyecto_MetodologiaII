<div class="container">
    <div class="row">
        <div class="col-md-6">
    
        <?php echo $this->Form->create('Profile'); ?>
	<fieldset>
		<legend><?php echo __('Add Profile'); ?></legend>
	
             
                <p>
		<?php echo $this->Form->input('profile_name', array('class' => 'form-control', 'label' => 'Profile Name')); ?>
                    
                </p>
                <?php
              
                  $options = array('Y'=>'Y', 'N'=>'N');
                 echo $this->Form->input
                  ('enable_profile', array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
            'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
         
	</fieldset>
            
            <p>
            
         <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Add', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/profiles\'' 
)); ?>
    <?php $this->Form->end() ?>

   </p>

           
    
 </div>
     </div>
         </div>