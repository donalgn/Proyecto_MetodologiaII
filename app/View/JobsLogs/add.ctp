<div class="container">
    <div class="row">
        <div class="col-md-6">

       <?php echo $this->Form->create('JobsLog'); ?>
            
  
      
	<fieldset>
		<legend><?php echo __('Add Jobs Log'); ?></legend>
	
		<?php echo $this->Form->input('username', array('class' => 'form-control','type' => 'text','default'=>$usuario,'readonly' => 'readonly'));;?>
		
                <p>
                <?php echo $this->Form->input('project_id',array(
                'type' => 'select',
                'empty' => 'Select Project', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'Projects'));?>
                 </p>
                <p>
		<?php echo $this->Form->input('category_id',array(
                'type' => 'select',
                'empty' => 'Select Category', // <-- Shows as the first item and has no value
                'class' => 'form-control', 'label' => 'Category'   
                    ));?>
                </p>
                <p>
		<?php echo $this->Form->input('date_work');  ?>
                </p>
                  <p>
		<?php echo $this->Form->input('observations',array('class' => 'form-control', 'label' => 'Observations'));  ?>
                 </p>
                  <p>
		

                      
                      <?php echo $this->Form->input('total_hours',array('class' => 'form-control', 'label' => 'Total Hours'));  ?>
                      </p>
           
	</fieldset>
 <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
       
            </p>
</div>
