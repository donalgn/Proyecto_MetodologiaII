<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

                echo $this->Html->css(array('style.css' ,'bootstrap.min', 'bootstrap-theme.min'));
		echo $this->Html->script(array('jquery.min','docs.min','bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    
   <?php
    echo $this->Session->flash();
    echo $this->Session->flash('auth');
?>
 
   <?php  if ($this->request->here == '/Registro_Laboral/'): ?>
  
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

    <div class="container">

    <div class="jumbotron">
        <h1>Welcome</h1>
        <p>Labor Registration System, for the control of our daily projects </p>
      </div>
        </div>
     
   

     <?php else: ?>
    
    <?php echo $this->element('menu');?>
      
      <div class="container" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->

			<?php echo $this->Flash->render(); ?>
                        <?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->fetch('content'); ?>
      
        <?php endif; ?>
      </div>
   </body>
</html>
