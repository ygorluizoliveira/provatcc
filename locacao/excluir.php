<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$id=$_GET['id'];

$sql = "delete from aluguel
        where id=$id";

$banco->executar($sql);
echo '<script>
window.location.href = "aluguel.php";
</script>';

