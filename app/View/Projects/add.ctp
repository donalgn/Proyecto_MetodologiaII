<div class="container">
    <div class="row">
        <div class="col-md-6">
    
<?php echo $this->Form->create('Project'); ?>
            
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	
	<?php echo $this->Form->input('project_name', array('class' => 'form-control', 'label' => 'Project Name')); ?>
	<p>
        <?php $options = array ('Y'=> 'Y', 'N'=>'N');
        echo $this->Form->input ('extra_hours', array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
            'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
        </p>
        <p>
        <?php $options = array ('Y'=> 'Y', 'N'=>'N');
        echo $this->Form->input ('active', array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
            'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
        </p>
         <p>
	<?php echo $this->Form->input('start_date'); ?>
         </p>
          <p>
	<?php echo $this->Form->input('finish_date'); ?>
           </p>
	<?php echo $this->Form->input('total_time', array('class' => 'form-control', 'label' => 'Total Time')); ?>
         <p>           
       <?php echo $this->Form->input('user_id',array(
                'type' => 'select',
                'empty' => 'Select Team Leader', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'Team Leader'   
                    ));?>
               
       </p>	

	</fieldset>
     <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
          </p>
</div>
        
        </div>

    </div>	
		
