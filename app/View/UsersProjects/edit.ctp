<div class="container">
    <div class="row">
        <div class="col-md-6">
     
            <div class="usersprojects form">       
            
<?php echo $this->Form->create('UsersProject'); ?>
	<fieldset>
		<legend>
                  
                    <?php echo __('Edit Users by Projects'); ?></legend>
	
		<?php echo $this->Form->input('user_project_id');?>
		 <p>
		<?php echo $this->Form->input('project_id', array('class' => 'form-control', 'label' => 'Project'));?>
                </p>
                <p>
		<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'label' => 'Username'));?>
                </p>
                <p>
		<?php
              
                $options = array('Y'=>'Y', 'N'=>'N');
                 echo $this->Form->input
                  ('enable_user_project', array('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold')); ?>
		  </p>
                
	
	</fieldset
       
         <p>
 <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Edit', ['class' =>'btn btn-success']); ?>
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
