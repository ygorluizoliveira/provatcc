<?php
require "../Auth.php";
require "../Banco1.php";
$auth = new Auth();

$auth->verifica();

$banco = new Banco1();

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];            
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


if (isset($_POST['id'])) {
//update
$id=$_POST['id'];
$sql="update cliente set 
       nome='$nome',
       endereco='$endereco',
       telefone='$telefone',
       email='$email'
       where cpf = '$cpf'" ;
       
}else {
    //insert
    $sql = "insert into cliente(cpf, nome, endereco, telefone, email) 
            values ('$cpf', '$nome', '$endereco', '$telefone', '$email')";
}

$banco->executar($sql);
echo '
       <script>
              alert("Cadastro realizado com sucesso");
              window.location.href = "cliente.php";
       </script>';

