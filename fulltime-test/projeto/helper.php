<?php

function salvarEmailNoBanco($email){
    $conexao = new PDO('sqlite:base.db');
    $sql = sprintf( "INSERT INTO newsletter (email) VALUES (\"%s\")", $email);
    $count  = $conexao->exec( $sql );

    return $count > 0;
}

?>