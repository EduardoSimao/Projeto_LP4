<html>

<head>
<title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Pagina Inicial</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ver todos eventos</a></li>
              <li><a href="#">Cadastrar evento</a></li>
            </ul>
          </li>
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Sobre</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <h1 class="well">Entrar</h1>
        <div class="col-lg-12 well">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Usuario</label>
                <input type="text" placeholder="username.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Senha</label>
                <input type="password" placeholder="password.." class="form-control">
              </div>
            </div>
            <div class="row">				
              <div class="col-sm-12 text-center">
              <button type="button" class="btn btn-block btn-info">Login</button> 
              </div>
            </div>				  
        </div>
      </div>
  </body>

  <footer class="">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="index.php"> xxxxx</a>
        </div>
  </footer>

</html>