<div class="container">
    <div class="row">
        <div class="col-md-6">
    
<?php echo $this->Form->create('UsersProject'); ?>
            
             
            
	<fieldset>
		<legend><?php echo __('Add Users by Project'); ?></legend>
                <p>
		<?php echo $this->Form->input('project_id', 
                array(
                'type' => 'select',
                'empty' => 'Select Project', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'Projects'));?>        
                </p>
                <p>
		<?php echo $this->Form->input('user_id', 
                array(
                'type' => 'select',
                'empty' => 'Select User', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'User'   
                    ));?>        
                </p>
                <p>
		<?php
                $options = array('Y'=>'Y', 'N'=>'N');
                 echo $this->Form->input
                  ('enable_user_project',array ('class' => 'form-control',
                'label' => 'Enable User by Project',   
                'type' => 'select', 'options' => $options, 
                'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
	
                   
                </p>
	
	</fieldset>
    
                <p>
            
         <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Add', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/UsersProjects\'' 
)); ?>
    <?php $this->Form->end() ?>

   </p>
            
</div>


</div>

</div>