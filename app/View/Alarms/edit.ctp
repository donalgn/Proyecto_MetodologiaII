<div class="container">
    <div class="row">
        <div class="col-md-6">

<div class="users form">
<?php echo $this->Form->create('Alarm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alarm'); ?></legend>
	
		<?php echo $this->Form->input('id_alarm'); ?>
                <p>
		 <?php echo $this->Form->input('project_id',array(
                'type' => 'select',

                'class' => 'form-control', 'label' => 'Projects')); ?>
                 <p>
		<?php  echo $this->Form->input('percentage',array('class' => 'form-control', 'label' => 'Percentage (%)'));  ?>
                </p>
                <p>
                <?php  $options = array('Y'=>'Y', 'N'=>'N');
                 echo $this->Form->input
                  ('enable_alarm',array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
                      
              )); ?>
		</p>
	</fieldset>

       <p>
 <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Edit', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/alarms\'' 
)); ?>
    <?php $this->Form->end() ?>
   
   </p>

</div>

</div>
        
</div>
    