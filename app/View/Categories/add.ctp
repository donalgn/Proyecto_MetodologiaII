<div class="container">
    <div class="row">
        <div class="col-md-6">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('category_name',array('class' => 'form-control', 'label' => 'Category Name')); ?>
		 </p>
                <?php
              
                  $options = array('Y'=>'Y', 'N'=>'N');
                 echo $this->Form->input
                  ('enable_category',array('class' => 'form-control','type' => 'select', 'options' => $options, 'selected' => 'Put On Hold'));
		?>
	
	</fieldset>
  <p>
        <?php echo $this->Form->end(array('label' => 'Add', 'class' =>'btn btn-success')); ?>
            </p>
</div>
<div class="actions">
	
</div>
        </div>
    </div>
