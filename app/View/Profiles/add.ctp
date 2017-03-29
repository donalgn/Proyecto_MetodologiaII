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
                  ('enable_profile', array('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold'));
		?>
	
	</fieldset>
            <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
            </p>

           
    
 </div>
     </div>
         </div>