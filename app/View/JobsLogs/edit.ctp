<div class="container">
    <div class="row">
        <div class="col-md-6">

<div class="jobsLogs form">
<?php echo $this->Form->create('JobsLog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobs Log'); ?></legend>
                
	<?php echo $this->Form->input('idBitacora');?>
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
                    
                 
                  <script>
                $(function() {
                 $("#datepicker").datepicker({
                      dateFormat: 'yy-mm-dd'
                     
                 }
                         );
          
                          
                         
                });
                </script>
		<?php 
               echo $this->Form->input('date_work', 
                array(
                'class' => 'form-control',
                'id'=>'datepicker',
                 'type'=>'text','value' =>"", 'readonly' => "readonly",
                 'format' => 'yyyy-mm-dd'   
        ));
             ?>
                </p>
                  <p>
		<?php echo $this->Form->input('observations',array('class' => 'form-control', 'label' => 'Observations'));  ?>
                 </p>
                  <p>
		

                      
                      <?php echo $this->Form->input('total_hours',array('class' => 'form-control', 'label' => 'Total Hours'));  ?>
                      </p>
           
	</fieldset>
 <p>
 <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Edit', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/jobslogs\'' 
)); ?>
    <?php $this->Form->end() ?>
   
   </p>

</div>
