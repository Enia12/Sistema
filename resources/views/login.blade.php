<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login -Sistema</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
       <!-- <h1>Sistema Gestão de Serviços</h1>-->
      </div>
      <div class="login-box">
        <form class="login-form" method="post" action="/login">  <!-- para onde enviar endereço-->
         @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Entrar</h3>
          <div class="form-group">
            <label class="control-label">E-mail</label>
            <input class="form-control" type="email" name="login" placeholder="E-mail" autofocus required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" name="Senha" placeholder="Senha">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox" name="Manter"><span class="label-text">Manter conectado</span>
                </label>
              </div>
           <!--   <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Recuperar senha?</a></p>-->
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>ENTRAR</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
         <!-- <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Recuperar password ?</h3>-->
          <div class="form-group">
            <label class="control-label">E-mail</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg fa-fw"></i>Recuperar</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Voltar ao Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>