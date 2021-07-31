<?php include_once("lib/include.php"); $testeblue = new testeblue($db);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Lista de pedidos</h1>
            <ul class="list-group" style="padding: 100px;">
                <?php $testeblue->listarPedidos(); ?>
            </ul>
            <button type="button" class="btn btn-dark" style="width: 70px; height: 50px; margin: 10px;"><a href="index.php">Home</a></button>
        </div>
    </div>
</body>
</html>