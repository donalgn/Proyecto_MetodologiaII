
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <?php echo $this->Html->link('LRS', array('controller' => 'users', 'action' => 'home'), array('class' => 'navbar-brand')) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
         
                <ul class="nav navbar-nav navbar-right">
        
              
              
               <?php if($current_user['profile_id'] == '1'): ?>
            
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Profile
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Profile List', array('controller' => 'profiles', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Profile', array('controller' => 'profiles', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Categories
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Categories List', array('controller' => 'categories', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Categorie', array('controller' => 'categories', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Users
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('User List', array('controller' => 'users', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New User', array('controller' => 'users', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
                     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projects
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Project List', array('controller' => 'projects', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Project', array('controller' => 'projects', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Users by Projects
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Users by Projects List', array('controller' => 'UsersProjects', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Users by Projects', array('controller' => 'UsersProjects', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Alarms
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Alarm List', array('controller' => 'alarms', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Alarm', array('controller' => 'alarms', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
           
            
             <?php elseif($current_user['profile_id'] == '2'): ?>
       
                 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projects
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Project List', array('controller' => 'projects', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Project', array('controller' => 'projects', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Users by Projects
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Users by Projects List', array('controller' => 'UsersProjects', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Users by Projects', array('controller' => 'UsersProjects', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
              
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Labor Register
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Labor Register List', array('controller' => 'JobsLogs', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Labor Register', array('controller' => 'JobsLogs', 'action' => 'add')) ?></li>
              </ul>
            </li>
            
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Alarms
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                 <li><a <?php echo $this -> Html->link('Alarm List', array('controller' => 'alarms', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Alarm', array('controller' => 'alarms', 'action' => 'add')) ?></li>
              </ul>
            </li>
               
            <?php else: ?>
            
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Labor Register
                  <span class="caret"></span></a>
              <ul class="dropdown-menu" role ="menu">
                <li><a <?php echo $this -> Html->link('Labor Register List', array('controller' => 'JobsLogs', 'action' => 'index')) ?></li>
                 <li><a <?php echo $this -> Html->link('New Labor Register', array('controller' => 'JobsLogs', 'action' => 'add')) ?></li>
              </ul>
            </li>       
            
            <?php endif; ?>
          
            
              <nav class="nav navbar-nav navbar-right">
              <li>
               <?php  echo $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')); ?>
                  
              </li>
            </nav>  
        
     
         
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>