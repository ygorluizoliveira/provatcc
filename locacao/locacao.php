
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
  echo "<h1>Cadastro de Locação</h1>";
   require "../Banco1.php";

    $banco =new Banco1();

    echo '<a href=novo.php> Novo Registro</a><br><br>';

    $sql = "select * from locacao order by cod_locacao";
   
    echo "<table id=myTable class='display'>";
   
   echo "<thead>
   <tr>
      <th> Cód Locação </th> 
      <th> CPF </th> 
      <th> Cód Automóvel </th> 
      <th> Quilometragem </th>
      <th> valor Calção </th>
      <th> Valor Locação </th>
      <th> Data locação </th> 
      <th> Data Devolução </th> 
   </tr>
   </thead>";
   
   echo "<tbody>";
    foreach ($banco->consultar($sql) as $row) {

      echo"
      <tr>
         <td>".$row['cod_locacao']."</td>";
         echo"<td>".$row['cpf']."</td>";
         echo"<td>".$row['cod_automovel']."</td>";
         echo"<td>".$row['quilometragem']."</td>";
         echo"<td>".$row['valor_calcao']."</td>";
         echo"<td>".$row['valor_locacao']."</td>";
         echo"<td>".$row['dt_locacao']."</td>";
         echo"<td>".$row['dt_devolucao']."</td></tr>";


         
      
    }
    echo "</tbody>";
 echo "</table>";

 echo "<a href=../menu.php>Voltar ao Menu</a>";

    ?>
    
