/*validação do botão de busca */

function validacao1(){
    if(document.form1.busca.value==""){
        alert("Por favor, preencha o campo!");
        document.form1.busca.focus();
        return false;
    }
}



/*validação da senha */
function validacao() { 
    var senha = document.getElementById('senha');
    if(senha.value.length < 6 || senha.value.length > 15){
        alert('Informe uma senha com no mínimo 6 caracteres e no máximo 15 caracteres');
        return false;
    }

/*verificar se os emails estão iguais */
    if (document.formu.email.value != document.formu.confirmaEmail.value || document.formu.senha.value != document.formu.confirmaSenha.value){
        alert("Os dados devem coincidir-se!");
        return false;
    }
}


function acao1() { document.frm.action = "pagina1";}function acao2() { document.frm.action = "pagina2";}