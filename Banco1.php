<?php

class Banco1{
private $pdo, $dsn;
function __construct(){
 $this->dsn = 'mysql:dbname=tcc;host=127.0.0.1';
 $this->conecta();
}
function conecta(){
      $user = 'root';
      $password = '';
      try {
$this->pdo = new PDO($this->dsn, $user, $password);
      } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
      }//fim try
}//fim conecta
function executar($sql) {
 return $this->pdo->exec($sql);
}//fim executar
function consultar($sql){
   return  $this->pdo->query($sql);
}//fim consultar
}//fim classe