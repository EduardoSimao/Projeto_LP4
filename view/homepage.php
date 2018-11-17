<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:homepage.php');
 
  }
 
//$logado = $_SESSION['nome'];


?>
<html>
<head>
    <title></title>
    <?php include("bootstrap.php");?>
</head>

<body>
    <header>
    <?php include("menu.php");?>
    </header>
</body>

<footer>
    <?php include("footer.php");?>
</footer>
</html>
