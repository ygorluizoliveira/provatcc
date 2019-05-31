
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
      <link rel="stylesheet" type="text/css" href="cliente.css">
      <title>Locavia</title>
</head>
   <?php
      require "../Banco1.php";
      $banco =new Banco1();
      $sql = "select * from cliente order by nome";
   ?> 
<body>
   <div class="container">
      <h1 class="title">Clientes</h1>
         <div class="new_item"> <a href=novo.php> Novo Registro</a></div>
      <div class="table">
         <table id=myTable class='display'>
            <thead> 
               <tr>
                  <th> CPF </th> 
                  <th> Nome </th>
                  <th> Endereço </th> 
                  <th> Telefone </th>
                  <th> Email </th>
               </tr>
            </thead>
      </div>
      <tbody>
         <?php 
            $existe=0;
            foreach ($banco->consultar($sql) as $row) {
               $existe=1;
               echo"<tr><td>".$row['cpf']."</td>";
               echo"<td>".$row['nome']."</td>";
               echo"<td>".$row['endereco']."</td>";
               echo"<td>".$row['telefone']."</td>";
               echo"<td>".$row['email']."</td>";
               echo "<td><a href=editar.php?cpf=".$row['cpf'].">Editar</a></td>";
               echo "<td><a href=excluir.php?cpf=".$row['cpf'].">Excluir</a></td></tr>";
            }
         ?>
      </tbody>
   </table>
   <div class="btn_voltar">
      <a href=../menu.php>Voltar ao Menu</a>
   </div>
   </div>
</body>