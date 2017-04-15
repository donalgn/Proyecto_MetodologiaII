   <h2>Welcome <?= $current_user['username'] ?></h2>

   <div class="container">
    <div class="row">
        <div class="col-md-6">

            
            
            <p></p>
            <p></p>
	<fieldset>
		<legend><?php echo __('Profile User'); ?></legend>
                
             <?php echo $this->Html->link(
					$this->Html->image('user-icon.png', array( 'border' => '0')),
					'',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>


            
                <p>
		<?php echo $this->Form->input('Name',array ('class' => 'form-control','type'=>'text','value' => $current_user['name'], 'readonly' => "readonly"));?>
                </p>
                <p>
                <?php echo $this->Form->input('Last Name ',array ('class' => 'form-control','type'=>'text','value' => $current_user['lastname_1'], 'readonly' => "readonly"));?>
                </p>
                <p>
               <?php echo $this->Form->input('E-mail',array ('class' => 'form-control','type'=>'text','value' => $current_user['mail'], 'readonly' => "readonly"));?>
                </p>
	</fieldset>

</div>
 </div>
 </div>

   
               
              