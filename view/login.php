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
          <div class="col-sm-6 form-group">
            <label>Usuario</label>
            <input type="text" placeholder="Usuario" class="form-control">
          </div>
          <div class="col-sm-6 form-group">
           <label>Senha</label>
           <input type="password" placeholder="Senha" class="form-control">
          </div>
        </div>
        <div class="row">				
          <div class="col-sm-12 text-center">
          <button type="button" class="btn btn-block btn-info">Entrar</button> 
        </div>
      </div>				  
      </div>
    </div>
  </body>

  <footer class="">
    <?php include("footer.php"); ?>
  </footer>

</html>