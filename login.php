<?php
require "Auth.php";
require "Banco1.php";
$auth = new Auth();
$banco = new Banco1();
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "SELECT * 
        FROM funcionario
        where login='$login' and
        senha = '$senha' ";

if ($res = $banco->consultar($sql) ) {
        if ($res->fetchColumn() > 0) {
         $auth->conectado();
        echo '<script>
           window.location.href = "menu.php";
         </script>';
        
        }else {
         echo '<script>
                  alert("Login Incorreto");
               </script>';
         echo '<script>
                  window.location.href = "http://localhost/index.html";
               </script>';
       }
}
?>
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

