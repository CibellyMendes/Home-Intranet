
<?php
if ($data = $_POST['data']) {
  //var_dump($data);
  $array = json_decode($data, false);

  include 'config.php';
  require_once DIR_AUTH . '/login.class.php';

  $login = new Login;

  if ($login->Login($array->system_target, $array->email, base64_encode($array->password)) == true) {
    var_dump($login);
  } else {
    var_dump($login);
    print 'false';
  }
}
