<?php

require_once 'src/config.php';
require_once DIR_AUTH . '/system.class.php';

$systems = new Systems();

if ($ret = json_decode($systems->List(), true)) {
  //var_dump($ret);
  foreach ($ret as $key => $value) {
    # code...
    $svg =  'svg/' . $value['icon'];

?>
    <div class="card">
      <img src="<?php print $svg ?>" alt="">
      <div class="centro">
        <div class="conteudo">
          <h1><?php print $value['name']; ?></h1>
          <small class="text-muted"> <?php print $value['description']; ?></small>
        </div>
      </div>
      <hr>
      <div class="login">
        <div>
          <a class="btn-open" href='#' onclick="OpenModal(<?php print $value['id']; ?>)">
            <h3>Entrar</h3>
          </a>
        </div>
      </div>
    </div>
<?php
  }
} else {
  print 'Nada a exibir';
}
