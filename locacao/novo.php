
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Locavia - Cadastro de Locação</title>
  </head>
  <body>
      <div class="container" >
    <form action=salvar.php method=post>

        <div class="form-group">
          <label for="cod_locacao">Código Locação</label>
          <input required type="text" 
          class="form-control" name=cod_locacao
           id="cod_locacao" placeholder="Código Locação">
        </div>
        
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input required type="varchar" 
          class="form-control" name=cpf
           id="cpf" placeholder="CPF">
        </div>

        <div class="form-group">
          <label for="cod_automovel">Código Automóvel</label>
          <input required type="text" 
          class="form-control" name=cod_automovel 
          id="cod_automovel"  placeholder="Código Automóvel">
        </div>

        <div class="form-group">
          <label for="quilometragem">Quilometragem</label>
          <input required type="text" 
          class="form-control" name=quilometragem
           id="quilometragem" placeholder="Quilometragem">
        </div>

        <div class="form-group">
          <label for="valor_calcao">Valor Calção</label>
          <input required type="text" 
          class="form-control" name=valor_calcao
           id="valor_calcao" placeholder="Valor Calção">
        </div>

        <div class="form-group">
          <label for="valor_locacao">Valor Locação</label>
          <input required type="text" 
          class="form-control" name=valor_locacao
           id="valor_locacao" placeholder="Valor Locação">
        </div>

        <div class="form-group">
          <label for="dt_locacao">Data Locação</label>
          <input required type="date" 
          class="form-control" name=dt_locacao
           id="dt_locacao" placeholder="Data Locação">
        </div>

        <div class="form-group">
          <label for="dt_devolucao">Data Devolução</label>
          <input required type="date" 
          class="form-control" name=dt_devolucao
           id="dt_devolucao" placeholder="Data Devolução">
        </div>
        
        <button type="submit" 
        class="btn btn-primary">Salvar</button>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>