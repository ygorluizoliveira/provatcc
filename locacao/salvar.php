<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$cod_locacao = $_POST['cod_locacao'];
$cpf = $_POST['cpf'];
$cod_automovel = $_POST['cod_automovel'];
$quilometragem = $_POST['quilometragem'];
$valor_calcao = $_POST['valor_calcao'];
$valor_locacao = $_POST['valor_locacao'];
$dt_locacao = $_POST['dt_locacao'];
$dt_devolucao = $_POST['dt_devolucao'];


if (isset($_POST['id'])) {
//update
$id=$_POST['id'];     
$sql="
        update locacao set 
            cpf='$cpf', 
            cod_automovel='$cod_automovel', 
            quilometragem='$quilometragem',
            valor_calcao='$valor_calcao',
            valor_locacao='$valor_locacao',
            dt_locacao='$dt_locacao',
            dt_devolucao='$dt_devolucao',

        where cod_locacao = '$cod_locacao'" ;

}else {
    //insert
    $sql = "insert into locacao(cod_locacao, cpf, cod_automovel, quilometragem, valor_calcao, valor_locacao, dt_locacao, dt_devolucao) 
            values ('$cod_locacao', '$cpf', '$cod_automovel', '$quilometragem', '$valor_calcao', '$valor_locacao', '$dt_locacao', '$dt_devolucao' )";
}

$banco->executar($sql);
echo '
    <script>
        window.location.href = "locacao.php";
    </script>';

