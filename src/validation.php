
<?php
if(isset($_POST)){
  $email = $_POST['email'];  
  $password = $_POST['password'];
  $system_target = $_POST['system_target'];
  
  require_once 'config.php';
  require_once DIR_AUTH . '/login.class.php';
  
  $login = new Login;  
  print $login->Login($system_target, $email, $password);
}
