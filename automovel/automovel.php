
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
   <link rel="stylesheet" type="text/css" href="automovel.css">
   <link rel="stylesheet" type="text/css" href="../style.css">
   <title>Locavia</title>
</head>
   <?php
      require "../Banco1.php";
      $banco =new Banco1();
      $sql = "select * from automovel order by cod_automovel";
   ?>
<body>
   <nav class="menu">
         <ul class="active">
               <li class="current-item"><a href="#">Home</a></li>
               <li><a href=cliente/cliente.php>Cadastro de Cliente</a></li>
               <li><a href=automovel/automovel.php>Cadastro de Automóvel</a></li>
               <li><a href=locacao/locacao.php>Cadastro de Locação</a></li>
         </ul>

         <a class="toggle-nav" href="#">&#9776;</a>

         <form class="search-form">
               <input type="text">
               <button>Search</button>
         </form>
      </nav>
   <div class="container">
      <h1 class="title">Automóvel</h1>
         <div class="new_item"> <a href=novo.php> Novo Registro</a></div>
      <div class="table">  
         <table id=myTable class='display'>
            <thead>
               <tr>
                  <th> Cód </th>
                  <th> Modelo </th> 
                  <th> Tipo Combustivel </th> 
                  <th> Quilometragem </th>
                  <th> Valor Locação </th>
                  <th> cor </th>
               </tr>
            </thead>
      </div>
            <tbody>
               <?php
                  $existe=0;
                  foreach ($banco->consultar($sql) as $row) {
                     $existe=1;
                     echo"<tr><td>".$row['cod_automovel']."</td>";
                     echo"<td>".$row['cod_modelo']."</td>";
                     echo"<td>".$row['placa']."</td>";
                     echo"<td>".$row['tipo_combustivel']."</td>";
                     echo"<td>".$row['quilometragem']."</td>";
                     echo"<td>".$row['valor_locacao']."</td>";
                     echo"<td>".$row['Cor']."</td>";
                     echo "<td><a href=editar.php?id=".$row['automovel'].">Editar</a></td>";
                     echo "<td><a href=excluir.php?id=".$row['automovel'].">Excluir</a></td></tr>";
                  }
               ?>
            </tbody>
         </table>
         <div class="btn_voltar">
            <a href=../menu.php>Voltar ao Menu</a>
         </div>    
   </div>
</body>
<script>
jQuery(document).ready(function() {
	jQuery('.toggle-nav').click(function(e) {
		jQuery(this).toggleClass('active');
		jQuery('.menu ul').toggleClass('active');

		e.preventDefault();
	});
});
</script>
    
