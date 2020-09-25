<?php

include "helper.php";
function validaemail($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    else
    return true;
}
try {

$email = $_POST["email"];


if(validaemail($email)){
    echo "Email ". $email ." salvo com sucesso";
    salvarEmailNoBanco($email);
}



else
echo "Email inválido!";



    /**
     * Aqui você deve implementar o código que deve:
     *    - Capturar informações (No caso email) de formulario html
     *    - Verificar se o email é válido. 
     *       - Se o email for válido salvar no banco de dados e mostrar a mensagem "Email "<email informado no formulário>" salvo com sucesso"
     *       - Se o email não form válido mostrar a mensagem "Email inválido!"
     */


    /**
     * Para salvar no banco de dados você pode usar a função "salvarEmailNoBanco"
     * Exemplo de uso:  
     *    $email = "meu@email.com";  
     *    salvarEmailNoBanco($email);
     */
    
} catch (\PDOException $e) {
    die($e->getMessage());
}

?>



