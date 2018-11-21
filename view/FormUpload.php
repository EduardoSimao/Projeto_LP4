<!--
  O código neste arquivo é responsável por construir formulário HTML para que o usuário selecione dois arquivos para Upload,ou seja, arquivos que serão transferidos para o servidor que hospeda a aplicação. O primeiro arquivo deve ser CSV (arquivo texto com separador de dados, ponto-e-vírgula neste caso) com o conteúdo apresentado a seguir. O segundo arquivo pode ser um qualquer, seus dados não serão tratados pelo código PHP executado no servidor. O código PHP executado no servidor incluirá os dados do 1o arquivo em tabela do MYSQL (criar banco de dados "ESCOLA" e tabela "ALUNO" usando comando a seguir).
  O elemento <input type="file" ... /> implementa interface para o usuário selecionar o arquivo. 

  Conteúdo 1o Arquivo
  ===================
  ID;NOME;ENDERECO
  1;JOAO;RUA X
  2;MARIA;RUA Y
  3;JOSE;RUA W
  4;CARLOS;RUA Z

  Criação de tabela
  =================
  CREATE TABLE ALUNO(ID INT NOT NULL PRIMARY KEY, NOME VARCHAR(100) NOT NULL, ENDERECO VARCHAR(100) NOT NULL)
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Upload CSV</title>
  <?php include("bootstrap.php"); ?>
</head>
<body>
  <h3>Formulário Upload</h3>
  <form method="post" enctype="multipart/form-data" action="GravaDados.php">
   <label for="idArq1">Arquivo 1</label>
   <input type="file" name="arq1" value="" id="idArq1"/>
   <br/>
   <label for="idArq2">Arquivo 2</label>
   <input type="file" name="arq2" value="" id="idArq2"/>
   <br/>
   <input type="submit" name="cmd" value="Carregar" />
  </form>
  <h3>Links relacionados</h3>
  <a href="https://www.w3schools.com/tags/att_form_enctype.asp">multipart/form-data</a>
  <br/>
  <a href="https://www.w3schools.com/php/php_file_upload.asp">Upload Arquivo</a>
</body>
</html>