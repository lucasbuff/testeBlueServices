<?php include_once("lib/include.php"); $testeblue = new testeblue($db);?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Teste blue services</title>
</head>
<body>
    <div id="menu">
      <nav class="navbar navbar-expand-lg nav-menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pedidos.php">Lista de pedidos</a>
            </li>
          </ul>
          <ul>
            <li class="car">
              <a href="cart.php"><i class="fas fa-cart-arrow-down"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <form style="padding: 12px;" method="GET">
      <input type="text" name="nome" size="50" placeholder="Digite aqui oque deseja assistir">
      <button style="width: 100px">Buscar</button>
    </form>
    <div class="row">
        <div class="col-sm-3">
          <div id="list-categorias"> 
            <div class="title"><span>CATEGORIAS</span></div>
              <div class="content">
                <ul>
                  <?php $testeblue->listaCategorias(); ?>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div id="sort-by">
            <div id="list-produtos">
              <div class="row">
                <?php 
                  $testeblue->listaProdutos();
                ?>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>