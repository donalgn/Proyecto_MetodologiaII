<div class="container">
    <div class="row">
        <div class="col-md-6">
    
<?php echo $this->Form->create('UsersProject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Project'); ?></legend>
	
                    <?php echo $this->Form->input('user_project_id'); ?>
                
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
                  ('enable_user_project', array('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold'));
		?>
                </p>
		
	</fieldset>
<p>
        <?php echo $this->Form->end(array('label' => 'Edit', 'class' =>'btn btn-success')); ?>
            </p>
</div>

