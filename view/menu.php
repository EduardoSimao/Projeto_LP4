<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
<?php 

if(empty($_SESSION['nome'])){
?>  
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Pagina Inicial</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="cadastroUsuario.php"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
          </ul>
    </div>
  </nav> 
<?php }else{ ?>
  
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ver todos eventos</a></li>
                <li><a href="#">Cadastrar evento</a></li>
              </ul>
            </li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Sobre</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="navbar-brand"><?php echo "Bem vindo, " . $_SESSION['nome'] ?></li>
          <li><a href="../controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
          </ul>
        </div>
    </nav>
  
<?php } ?>
