<?php
session_start();
if(!isset ($_SESSION['nome']) == true)
{
  unset($_SESSION['nome']);
  header('location:homepage.php');
 

}
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

            <?php while ($row = mysqli_fetch_array($compromissos))  { ?>
                <tbody >
                <th scope="row"><?php echo $row['idagenda']; ?></th>
                <td> <?php echo $row['titulo']; ?> </td>
                <td> <?php echo $row['data']; ?> </td>
                <td> <?php echo $row['hora']; ?> </td>
                <td> <?php echo $row['descricao']; ?> </td>
                <td> <?php echo $row['local']; ?> </td>
                <td class="actions">
                  <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                  <a class="btn btn-warning btn-xs" href="alterarEvento.php?idagenda=<?php echo $row["idagenda"];?>">Editar</a>
                  <a class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#delete-modal"><input type="button" value="Excluir Evento" onclick="javascript: if (confirm('Você realmente deseja excluir seu Evento?'))location.href='listarevento.php?ok=excluir&idagenda=<?php echo $row["idagenda"]; ?>'" /></a>
                </td>
                </tbody>
            <?php } ?>
        </table>
</div>

</body>

<footer>
    <?php include("footer.php");?>
</footer>
</html>