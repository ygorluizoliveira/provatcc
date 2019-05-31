
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="automovel.css">

    <title>Locavia - Cadastro de Automóvel</title>
  </head>
  <body>
    <div class="container-fluid">
      <h1 class="title">Cadastro de Automóvel</h1>
          <form action=salvar.php method=post>
        <div class="form-group">
          <label for="cod_automovel">Código</label>
          <input required type="text" 
          class="form-control" name=cod_automovel 
          id="cod_automovel"  placeholder="Código Automóvel">
        </div>

        <div class="form-group">
          <label for="modelo">Modelo</label>
          <input required type="text" 
          class="form-control" name=cod_modelo
           id="cod_modelo" placeholder="Modelo do Automóvel">
        </div>

        <div class="form-group">
          <label for="modelo">Placa</label>
          <input required type="text" 
          class="form-control" name=placa
           id="placa" placeholder="Placa do Automóvel">
        </div>

        <div class="form-group">
          <label for="modelo">Combustível</label>
          <input required type="text" 
          class="form-control" name=tipo_combustivel
           id="tipo_combustivel" placeholder="Tipo de combustível">
        </div>

        <div class="form-group">
          <label for="modelo">Quilometragem</label>
          <input required type="text" 
          class="form-control" name=quilometragem
           id="quilometragem" placeholder="Quilometragem">
        </div>

        <div class="form-group">
          <label for="modelo">Valor Locação</label>
          <input required type="text" 
          class="form-control" name=valor_locacao
           id="valor_locacao" placeholder="Valor Locação">
        </div>

        <div class="form-group">
          <label for="modelo">Cor</label>
          <input required type="text" 
          class="form-control" name=Cor
           id="Cor" placeholder="Cor do Automóvel">
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