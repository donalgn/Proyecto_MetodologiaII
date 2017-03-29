 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('LRS', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
            
                         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="form-group">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Login', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


 <div class="jumbotron">
        <h1>Welcome</h1>
        <p>Labor Registration System, for the control of our daily projects </p>
      </div>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    
