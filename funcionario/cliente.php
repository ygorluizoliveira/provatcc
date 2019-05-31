
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</head>
   <?php
   require "../Banco1.php";

    $banco =new Banco1();
	echo "<h1>Cadastro de Clientes</h1>";
    echo '<a href=novo.php> Novo Registro</a><br><br>';

    $sql = "select * from cliente order by nome";
    
   echo "<table id=myTable class='display'>";
   echo "<thead><tr><th> RG </th><th> Nome </th> 
   <th> </th> <th> </th></tr></thead>";
   echo "<tbody>";
   $existe=0;
    foreach ($banco->consultar($sql) as $row) {
	   $existe=1;
      echo"<tr><td>".$row['rg']."</td>";
      echo"<td>".$row['nome']."</td>";
      echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
      echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td></tr>";
    }
    echo "</tbody>";
 echo "</table>";


 echo "<a href=../menu.php>Voltar ao Menu</a>";
    ?>
    
