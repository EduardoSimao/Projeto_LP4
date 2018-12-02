<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:listarevento.php');
 

}
require_once('../controller/controllerAgenda.php');
Processo('excluir');

$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'agendadb';

$row = array();

$connection = new mysqli($hostname, $username, $password);
mysqli_select_db($connection, $db);

$select_user = "SELECT * FROM agenda WHERE id_users=".$_SESSION['id_usurio']."";
$compromissos = mysqli_query($connection, $select_user) or die ('Error');

?>

<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <?php include("bootstrap.php");?>
</head>

<body>
<?php include("menu.php");?>
<div class="container">
        <table class="table">
            <thead align="center">
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
            <th scope="col">Descrição</th>
            <th scope="col">Local</th>
            <th class="actions">Ações</th>
            </thead>
            <?php if (!isset($compromissoss)){ ?>
                    <tbody >           
                    <td colspan=7><center> Nenhum compromissos cadastrado!  </center></td>
                    </tbody>
            <?php } ?>

            <?php while ($row = mysqli_fetch_array($compromissos))  { ?>
                
                
                <tbody >
                <th scope="row"><?php echo $row['idagenda']; ?></th>
                <td> <?php echo $row['titulo']; ?> </td>
                <td> <?php echo $row['data']; ?> </td>
                <td> <?php echo $row['hora']; ?> </td>
                <td> <?php echo $row['descricao']; ?> </td>
                <td> <?php echo $row['local']; ?> </td>
                <td class="actions">
                  <a class="btn btn-success btn-xs" href="alterarEvento.php?idagenda=<?php echo $row["idagenda"];?>">Visualizar</a>
                </td>
                </tbody>
            <?php } ?>
        </table>
</div>
<footer class="footerListar">
    <?php include("footer.php");?>
</footer>
</body>


</html>