function validar(formulario){

    for(i=0;i<=formulario.length-1;i++){
        
    if ((formulario[i].value=="")&&(formulario[i].title!="")){
        if ((formulario[i].type!="button")&&(formulario[i].type!="submit")&&(formulario[i].type!="hidden")){
                alert(formulario[i].title);
                formulario[i].focus();
                return false;
            }
        }
    }

    formulario.ok.value='true';
    formulario.submit();
}

function validarInformacao(formulario){

    for(i=0;i<=formulario.length-1;i++){
        
    if ((formulario[i].value=="")&&(formulario[i].title!="")){
        if ((formulario[i].type!="button")&&(formulario[i].type!="submit")&&(formulario[i].type!="hidden")){
                alert(formulario[i].title);
                formulario[i].focus();
                return false;
            }
        }
    }
    formulario.ok.value='true';
    formulario.processo.value='altInfo';
    formulario.submit();
}

function validarImagem(formulario){

    for(i=0;i<=formulario.length-1;i++){
        
    if ((formulario[i].value=="")&&(formulario[i].title!="")){
        if ((formulario[i].type!="button")&&(formulario[i].type!="submit")&&(formulario[i].type!="hidden")){
                alert(formulario[i].title);
                formulario[i].focus();
                return false;
            }
        }
    }
    formulario.ok.value='true';
    formulario.processo.value='altImg';
    formulario.submit();
}
