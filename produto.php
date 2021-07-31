<?php include_once("lib/include.php"); $testeblue = new testeblue($db);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class="col-sm-3">
          <div id="list-produtosIndividuais">
            <div class="title"><span>PRODUTO</span></div>
              <div class="content">
                <ul>
                  <?php $testeblue->listaProdutoIndivial(); ?>
                </ul>
              </div>
              <button type="button" class="btn btn-dark btn-produto"><a href="/testeBlueServices/">Home</a></button>
          </div>
        </div>
    </div>
</body>
</html>