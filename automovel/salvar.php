<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$cod_automovel = $_POST['cod_automovel'];
$cod_modelo = $_POST['cod_modelo'];
$placa = $_POST['placa'];
$tipo_combustivel = $_POST['tipo_combustivel'];
$quilometragem = $_POST['quilometragem'];
$valor_locacao = $_POST['valor_locacao'];
$Cor = $_POST['Cor'];

if (isset($_POST['id'])) {
//update
$id=$_POST['id'];
$sql="update veiculo set cod_automovel='$cod_automovel', 
       cod_modelo='$cod_modelo' 
       where id = $id"  ;
}else {
    //insert
    $sql = "insert into veiculo(marca, modelo) 
            values ('$marca', '$modelo')";
}
//echo $sql;die();
$banco->executar($sql);
echo '<script>
window.location.href = "veiculo.php";
</script>';

