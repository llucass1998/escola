<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Colegio icaro</title>
  </head>
  <body>
  <?php
    include_once ('menu.php');
  ?>
  &nbsp;
  <form>
<div class="container">
<form action="ins.alu.php" method="post">
<h1>Cadastro Aluno</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Aluno</label>
    <input type="name" class="form-control" name="nome" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Data do nascimento</label>
    <input type="date" class="form-control" name="date" placeholder="00/00/0000">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Curso</label>
    <input type="text" class="form-control" name="Curso" placeholder"Nome do Curso">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Ativo</label>
    <select class="form-control" name="ativo">
      <option>Sim</option>
      <option>Não</option>
    </select>
    <br>
    <button type="button" class="btn btn-dark">Cadastrar</button>
  </div>
</form>
  &nbsp;
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
    <!-- Include the above in your HEAD tag -->
  </body>
</html>