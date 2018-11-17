
<h1 align="center"> Olá Mundo !</h1>


<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:index.php');
 
  }
 
//$logado = $_SESSION['nome'];
echo "<p>Sess&atilde;o iniciada com sucesso como {$_SESSION['nome']}</p>";

?>

 <form action="controller/logout.php">
            <input type="submit" name="button" id="button" value="sair" />
</form>