<div class="container">
    <div class="row">
        <div class="col-md-6">
    
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	
	<?php echo $this->Form->input('project_name', array('class' => 'form-control', 'label' => 'Project Name')); ?>
	<p>
        <?php $options = array ('Y'=> 'Y', 'N'=>'N');
        echo $this->Form->input
        ('extra_hours', array ('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold')); ?>
        </p>
        <p>
        <?php $options = array ('Y'=> 'Y', 'N'=>'N');
        echo $this->Form->input
        ('active', array ('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold')); ?>
        </p>
         <p>
	<?php echo $this->Form->input('start_date'); ?>
         </p>
          <p>
	<?php echo $this->Form->input('finish_date'); ?>
           </p>
	<?php echo $this->Form->input('total_time', array('class' => 'form-control', 'label' => 'Total Time')); ?>
	

	</fieldset>
     <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
          </p>
</div>
        
        </div>

    </div>

