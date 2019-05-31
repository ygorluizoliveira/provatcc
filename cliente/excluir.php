<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$cpf=$_GET['cpf'];

$sql = "delete from cliente
        where cpf=$cpf";

$banco->executar($sql);
echo '
        <script>
                alert("Excluído com sucesso");
                window.location.href = "cliente.php";
        </script>';

