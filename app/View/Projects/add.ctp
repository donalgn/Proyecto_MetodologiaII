<div class="container">
    <div class="row">
        <div class="col-md-6">
    
<?php echo $this->Form->create('Project'); ?>
            
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	
	<?php echo $this->Form->input('project_name', array('class' => 'form-control', 'label' => 'Project Name')); ?>
	
        <p>
        <?php $options = array ('Y'=> 'Y', 'N'=>'N');
        echo $this->Form->input ('active', array ('class' => 'form-control',
            'type' => 'select', 'options' => $options, 
            'empty' => 'Select Yes/No' , // <-- Shows as the first item and has no value
              )); ?>
        </p>
        
           
            <script>
                $(function() {
                 $("#datepicker").datepicker({
                      dateFormat: 'yy-mm-dd'
                     
                 }
                         );
          
                          
                         
                });
                </script>    
	<?php 
               echo $this->Form->input('start_date', 
                array(
                'class' => 'form-control',
                'id'=>'datepicker',
                 'type'=>'text','value' =>"", 'readonly' => "readonly",
                 'format' => 'yyyy-mm-dd'   
        ));
             ?>
           <p>
              
            <script>
                $(function() {
                 $("#datepicker1").datepicker({
                      dateFormat: 'yy-mm-dd'
                     
                 }
                         );
          
                          
                         
                });
                </script>    
	<?php 
               echo $this->Form->input('finish_date', 
                array(
                'class' => 'form-control',
                'id'=>'datepicker1',
                 'type'=>'text','value' =>"", 'readonly' => "readonly",
                 'format' => 'yyyy-mm-dd'   
        ));
             ?>
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
     <div class="form-group">
   <label class="col-xs-0 control-label"></label>
    <?php echo $this->Form->button('Add', ['class' =>'btn btn-success']); ?>
 <?php echo $this->Form->button('Cancel', array(
   'type' => 'button',
   'class' => 'btn btn-danger',
   'onclick' => 'location.href=\'/Registro_Laboral/projects\'' 
)); ?>
    <?php $this->Form->end() ?>
   
</div>
        
        </div>

    </div>	
		
