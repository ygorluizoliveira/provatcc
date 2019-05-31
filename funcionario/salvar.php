<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$rg = $_POST['rg'];
$nome = $_POST['nome'];

if (isset($_POST['id'])) {
//update
$id=$_POST['id'];
$sql="update cliente set rg='$rg', 
       nome='$nome'
       where id = $id"  ;
}else {
    //insert
    $sql = "insert into cliente(rg, nome) 
            values ('$rg', '$nome')";
}

$banco->executar($sql);
echo '<script>
window.location.href = "cliente.php";
</script>';

