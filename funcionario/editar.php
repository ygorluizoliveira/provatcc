<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
      <div class="container" >
    <form action=salvar.php method=post>
        <?php
        require "../Banco1.php";
        $id = $_GET['id'];
        $banco =new Banco1();

        $sql = "select * from cliente where id=$id";
        
        foreach ($banco->consultar($sql) as $row) {
echo "<input type=hidden name=id value=".$row['id'].">";
echo '<div class="form-group">
<div class="form-group">
          <label for="rg">RG</label>
          <input required type="text" 
          class="form-control" name=rg 
          id="rg"  placeholder="rg do cliente"
          value='.$row['rg'].'>
        </div>
</div>';
echo ' <div class="form-group">
<label for="nome">Nome</label>
          <input required type="text" 
          class="form-control" name=nome
           id="nome" placeholder="nome do cliente"
 value='.$row['nome'].'
 >
</div>';
          
          }
        
        ?>
        
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
