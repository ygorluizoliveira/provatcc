<?php
session_start();
class Auth{

function conectado(){
    $_SESSION['entrou']=1;
}//fim conecta

function desconectar() {
    session_destroy();
}//fim executar

function verifica(){
    if (! isset($_SESSION['entrou'])) {
        session_destroy();
        echo '<script>
           window.location.href = "index.html";
        </script>';
    }
}//fim consultar
}//fim classe
