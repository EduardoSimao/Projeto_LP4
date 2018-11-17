<?php

require_once('../controller/controllerUsuario.php');
Processo('altFoto');

?>   
<div class="text-center">
    <form name="editFoto" action=""  method="post" enctype="multipart/form-data">
        <center>
            <img src="../view/img/<?php echo $row['foto']; ?>" class="avatar img-circle img-thumbnail" alt="avatar" height="50" width="300">
            <h6>Alterar Foto</h6>
            <input type="file"  name="foto" class="text-center center-block file-upload">
        </center><br />
        <input type="button" class="btn btn-light" name="button" value="Alterar Foto" onclick="validarImagem(document.editFoto);"/>
        <input type="hidden" name="ok" id="ok" />
        <input type="hidden" name="processo" />
    </form>
</div>