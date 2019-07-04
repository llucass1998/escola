<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Colegio icaro</title>
  </head>
  <body>
  <?php
    include_once ('menu.php');
  ?>
  &nbsp;
<form>
<div class="container">
<form action="ins.fun.php" method="post">
<h1>Cadastro Funcionario</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Funcionario</label>
    <input type="text" class="form-control" name="Funcionario" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Função</label>
    <select class="form-control" name="Funcao">
      <option>Professor</option>
      <option>cordenador</option>
      <option>tia da cantina</option>
      <option>inspetor</option>
      <option>Tia da limpeza</option>
    </select>
    &nbsp;
    <div class="input-group"> 
    <label for="text">Salario</label>
    <div class="input-group"> 
    &nbsp;
    <span class="input-group-text" name="Salario">$</span>
        <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
  </div>
  &nbsp;
  </div>
  <button type="button" class="btn btn-dark">Cadastrar</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>