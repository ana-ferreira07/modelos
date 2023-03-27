<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="modelos.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Cadastros 2 </h1>
        <p>Nome: <?php echo $_GET ["bt_name"]; ?></p>
        <p>Endereco: <?php echo $_GET ["bt_endereco"]; ?></p>
        <p>Estado:<?php echo $_GET ["bt_estado"]; ?></p>
        <p>Cidade:<?php echo $_GET ["bt_cidade"]; ?></p>
        <p>Pais:<?php echo $_GET ["bt_pais"]; ?></p>
        
        <a href="modelos.php" class="btn btn-warning">Voltar</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>