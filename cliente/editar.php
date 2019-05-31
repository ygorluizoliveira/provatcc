<!doctype html>
<html lang="en">
  <script>
  function formatar(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)
    
    if (texto.substring(0,1) != saida){
              documento.value += texto.substring(0,1);
    }
    
  }
  </script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cliente.css">

    <title>Locavia - Editar Clientes</title>
  </head>
  <body>
      <div class="container" >
        <form action=salvar.php method=post>
          <div class="form-group">
            <?php
              require "../Banco1.php";
              $cpf = $_GET['cpf'];
              $banco =new Banco1();

              $sql = "select * from cliente where cpf=$cpf";
              
              foreach ($banco->consultar($sql) as $row) {
              echo "<input type=hidden name=cpf value=".$row['cpf'].">";} 
              ?>
              <label for="cpf">CPF</label>
              <input required type="text" 
              class="form-control" name=cpf 
              id="cpf"  placeholder="CPF do cliente" 
              OnKeyPress="formatar('###.###.###-##', this)"
              maxlength="14">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input required type="text" 
            class="form-control" name=nome
            id="nome" placeholder="Nome do cliente">
          </div>
          <div class="form-group">
            <label for="endereco">Endereco</label>
            <input required type="text" 
            class="form-control" name=endereco 
            id="endereco"  placeholder="Endereco do cliente">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input required type="text" 
            class="form-control" name=telefone 
            id="telefone"  placeholder="Telefone do cliente" OnKeyPress="formatar('##-####-####', this)">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input required type="text" 
            class="form-control" name=email 
            id="email"  placeholder="Email do cliente">
          </div>
          <div class="button">
            <button type="submit" 
            class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>