<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produto Altera</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="../../static/css/style.css" rel="stylesheet">
</head>

<body>
  <main>
    <?php
      include "../../static/include/body-svg.html";
      include "../../static/include/body-header-produto.html";
    
      include "../../static/include/testa_banco.php";

      $produto = $_POST['produto'];
      $valor = $_POST['valor'];
      $descricao = $_POST['descricao'];
      $quantidade = $_POST['quantidade'];

      $sql = "UPDATE tb_Cliente
      SET valor = '$valor', descricao = '$descricao', quantidade = '$quantidade'
      WHERE produto = '$produto'";

      $result = mysqli_query($con, $sql);
      if ($result == false) 
      {
        $mensagem = "Erro ao executar a alteração: " . mysqli_error($con);
      } 
      else 
      {
        $mensagem = "Alteração concluída com sucesso!";
      }
      mysqli_close($con);
    ?>
  </main>

  <main class="container">
    <div class="bg-light p-5 rounded">
      <a class="btn btn-lg btn-primary" href="../view/alterar.html" role="button">Realizar nova alteração &raquo;</a>
    </div>
  </main>
  
  <?php
    include "../../static/include/body-footer.html";
  ?>

</body>
</html>