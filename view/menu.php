<?php 

if(empty($_SESSION['nome'])){
?>  
<nav class="navbar navbar-inverse" style="box-shadow:0 10px 6px -6px #777">
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
  <nav class="navbar navbar-inverse"style="box-shadow:0 10px 6px -6px #777">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../view/listarevento.php">Agenda</a>
      </div>
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Compromissos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="listarevento.php">Listar Compromissos</a></li>
                <li><a href="evento.php">Cadastrar Compromisso</a></li>
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
