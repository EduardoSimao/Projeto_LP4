<html>

<head>
<title></title>
  <?php include("bootstrap.php"); ?>
</head>

  <body>
  <?php include("menu.php"); ?>

    <div class="container">
      <h1 class="well">Entrar</h1>
      <div class="col-lg-12 well">
        <div class="row">
          <form method="POST" action="../controller/logar.php" name="formLogin">
                <div class="col-sm-6 form-group">
                  <label>Usuario</label>
                  <input type="text" placeholder="username.." class="form-control" name="username">
                </div>
                <div class="col-sm-6 form-group">
                  <label>Senha</label>
                  <input type="password" placeholder="password.." class="form-control" name="senha">
                </div>
              </div>
              <div class="row">				
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-block btn-info">Login</button> 
                </div>
              </div>
          </form>	
      </div>				  
      </div>
    </div>
  </body>

  <footer class="">
    <?php include("footer.php"); ?>
  </footer>

</html>