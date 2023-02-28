<?php include 'src/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/diminas.png" type="image/x-icon">
  <title>INTRANET DIMINAS | Cooperativa Mista dos Produtores Rurais de Conselheiro Pena.</title>
  <link rel="stylesheet" href="<?php print DIR_ROOT_CSS . "main.css" ?> ">
  <link rel="stylesheet" href="css/style.css">
  <link href="/website/css/uicons-solid-rounded.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <main>
      <div class="intranet">
        <img src="img/logo.png" alt="">
        <h2>INTRA<span class="danger">NET&nbsp;</span>DIMI<span class="primary">NAS</span></h2>
        <hr>
      </div>
      <h1>Para onde vamos agora?</h1>
      <div class="insights" id="cards">

        <!-- <div class="card">
          <img src="svg/controle.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <h1>Controle de Frotas</h1>
              <small class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='#controle_frotas' onclick="OpenModal('controle_frotas')">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="svg/convenio.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <h1>Portal de Convênio</h1>
              <small class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='http://www.diminas.com.br/convenio/login' target="_blank">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="card3">
          <img src="svg/social.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <h1>Capital Social</h1>
              <small class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='#capital_social' onclick="OpenModal('capital_social')">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="card4"> <img src="svg/temperatura.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <div>
                <h1>Controle de Temperatura</h1>
                <small class="text-muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
              </div>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='#controle_temp' onclick="OpenModal('controle_temp')">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="card5"> <img src="svg/help.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <div>
                <h1>Help Desk</h1>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
              </div>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='#help_desk' onclick="OpenModal('help_desk')">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="card6"> <img src="svg/HW.svg" alt="">
          <div class="centro">
            <div class="conteudo">
              <div>
                <h1>Pagamento de Leite</h1>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure possimus ullam, magnam eos aperiam nisi quasi ad eius nemo dignissimos, accusantium libero aliquid et vitae obcaecati itaque eum. Magni, vitae.</small>
              </div>
            </div>
          </div>
          <hr>
          <div class="login">
            <div>
              <a class="btn-open" href='#hw' onclick="OpenModal('hw')">
                <h3>Entrar</h3>
              </a>
            </div>
          </div>
        </div> -->

      </div>
    </main>
  </div>


  <!--- MODAL -->
  <section class="modal hidden">
    <div class="flex">
      <img src="img/diminas.png" width="40px" height="40px" alt="img" />
      <button class="btn-close" onclick="closeModal()">⨉</button>
    </div>
    <div>
      <h3>Gostaria de se conectar?</h3>
      <p>
        Digite o email e senha de acesso para acessar esta página! :)
      </p>
    </div>
    <input type="email" id="email" placeholder="email@email.com" />
    <input type="password" id="password" />
    <button class="btn" onclick="Login()">Entrar</button>
    <div id="result"></div>
  </section>
  <input type="hidden" id="system_target">
  <div class="overlay hidden"></div>
  <!-- FIM MODAL -->

  <footer>
    <div class="footer">
      <div class="container">
        <h3>Siga-nos nas redes sociais!</h3>
        <div class="redes">
          <a href="https://bit.ly/diminaswhatsapp" target="_blank"><img src="svg/wpp.svg" alt=""></a>
          <a href="https://www.instagram.com/laticinios_diminas/" target="_blank"><img src="svg/insta.svg" alt=""></a>
          <a href="https://github.com/diminas" target="_blank"><img src="svg/github.svg" alt=""></a>
          <a href="https://pt-br.facebook.com/Laticioniodiminas/" target="_blank"><img src="svg/facebook.svg" alt=""></a>
          <a href="https://diminas.com.br/" target="_blank"><img src="svg/internet.svg" alt=""></a>
        </div>
        <hr class="dashed" />
        <p><b>Laticínios DIMINAS
          </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">(33) 3261-1531</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="">informatica@diminas.com.br</a>&nbsp;&nbsp;&nbsp;&nbsp;Setor de Tecnologia
        <p>© 2022 <b>-</b> Todos os direitos reservados.</p>
        <p><b>
      </div>
    </div>
  </footer>
  <script src="js/index.js"></script>

  <!-- <script>
    function Login() {
      var div_result = document.getElementById('result');
      var system_target = document.getElementById('system_target').value;
      var email = document.getElementById('email').value;
      var password = btoa(document.getElementById('password').value);
      
      const d = new Date();
      var array = {
        "system_target": system_target,
        "email": email,
        "password": password
      }
      data = JSON.stringify(array);
      $.ajax({
        url: 'src/validation.php',
        method: 'post',
        data: {
          "data": data
        },
        success: function(response) {
          console.log(response);   
          //div_result.classList.add('success');
          var obj = JSON.parse(response);
          console.log(obj);
          //div_result.innerHTML = response;
        }
      });

    }
  </script> -->

<script>
  function Login() {
    var div_result = document.getElementById('result');
    div_result.classList.remove;
    div_result.innerHTML = '';

    var system_target = document.getElementById('system_target').value;
    var email = document.getElementById('email').value;
    var password = btoa(document.getElementById('password').value);
    var data = ('system_target='+system_target+'&email='+email+'&password='+password);
    
    //Defaul
    var msg = '';
    var url_target = '';
    var user_name = '';
    
    const xhr = new XMLHttpRequest();
    const method = "POST";
    const url = "src/validation.php";

    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type' ,'application/x-www-form-urlencoded');

    xhr.onreadystatechange = () => {
      var div_result = document.getElementById('result');
    div_result.classList.remove;
    div_result.innerHTML = '';
      // In local files, status is 0 upon success in Mozilla Firefox
      if (xhr.readyState === XMLHttpRequest.DONE) {
        const status = xhr.status;
        //console.log(status);
        if (status === 0 || (status >= 200 && status < 400)) {
          // The request has been completed successfully                              
          var response = xhr.responseText;
          // console.log(response);
          var obj = JSON.parse(response);
          console.log(obj);          

          //
          Object.entries(obj).forEach(([key, value]) => {   
                
            //URL de destino
            if(`${key}` == 'url'){
              url_target = `${value}`;
            }
            //Usuario
            if(`${key}` == 'user_name'){
              user_name = `${value}`;
            }
            //Captura mensagem
            if(`${key}` == 'msg'){
              msg = `${value}`;
              
            }
            
            //Verifica tipo de retorno
            if(`${key}` == 'return'){
              if(`${value}` == 'true'){
                div_result.className = 'alert alert-success alert-dismissable';
                div_result.innerHTML = "Seja Bem-vindo(a), " + user_name + "! Por favor, aguarde.";
              }else{
                div_result.className = 'alert alert-danger alert-dismissable';
                div_result.innerHTML = "Ops! Algo deu errado! Por favor, tente novamente!";
              }
            }
            
          });


        } else {
          // Oh no! There has been an error with the request!
        }
      }
    };
    xhr.send(data);
  }
</script>



  <script>
    const xhr = new XMLHttpRequest();
    const method = "GET";
    const url = "./cards.php";

    xhr.open(method, url, true);
    xhr.onreadystatechange = () => {
      // In local files, status is 0 upon success in Mozilla Firefox
      if (xhr.readyState === XMLHttpRequest.DONE) {
        const status = xhr.status;
        console.log(status);
        if (status === 0 || (status >= 200 && status < 400)) {
          // The request has been completed successfully          
          document.getElementById('cards').innerHTML = xhr.responseText;
        } else {
          // Oh no! There has been an error with the request!
        }
      }
    };
    xhr.send();
  </script>
</body>

</html>