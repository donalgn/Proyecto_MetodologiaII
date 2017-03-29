<div class="container">
    <div class="row">
        <div class="col-md-6">

       <?php echo $this->Form->create('JobsLog'); ?>
                           
	<fieldset>
		<legend><?php echo __('Add Jobs Log'); ?></legend>              
	
	<?php echo $this->Form->input('users_id', array('class' => 'form-control','type' => 'text','default'=>$usuario,'readonly' => 'readonly'));;?>
		</p>
                <p>
                <?php echo $this->Form->input('projects_id', array ('class' => 'form-control','type' => 'select', 'options' => $proyectos)); ?>
                </p>
                <p>
		<?php echo $this->Form->input('category_id',array('class' => 'form-control', 'label' => 'Category')); ?>
                </p>
                <p>
		<?php echo $this->Form->input('date_work');  ?>
                </p>
                <?php echo $this->Form->input('total_hours',array('class' => 'form-control', 'label' => 'Total Hours'));  ?>
                <p>
		<?php echo $this->Form->input('observations',array('class' => 'form-control', 'label' => 'Observations'));  ?>
		</p>
	
	</fieldset>
            <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
            </p>
</div>

