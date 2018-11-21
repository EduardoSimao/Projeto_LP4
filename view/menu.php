<?php 

if(empty($_SESSION['nome'])){
?>  
<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Agenda</a>
        </div>
          <ul class="nav navbar-nav">
            <li><a href="sobre.php">Conheça a Equipe</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="cadastroUsuario.php"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
          </ul>
    </div>
  </nav> 
<?php }else{ ?>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Agenda</a>
      </div>
      <ul class="nav navbar-nav">
            <li><a href="sobre.php">Conheça a Equipe</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Compromissos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="listarevento.php">Listar Eventos</a></li>
                <li><a href="evento.php">Cadastrar Evento</a></li>
              </ul>
            </li>
            <li><a href="userPerfil.php">Perfil</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="navbar-brand"><?php echo "Bem vindo, " . $_SESSION['nome'] ?></li>
          <li><a href="../controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
          </ul>
        </div>
    </nav>
  
<?php } ?>
