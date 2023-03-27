<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="modelos.css">
        <title>Modelo - Cadastrar Clientes</title>
    </head>
    <body>
        <div class="container">
            <h1>modelos</h1>
        </div>
        <div class=container>
            <form action="modelos-clientes">
            <div class="mb-3">
                <label for="bt_name">Nome: </label>
                <input type="text" name="bt_name">
            </div>
            <div class="mb-3">
                <label for="">Endereco: </label>
                <input type="text" name="bt_endereco">
            </div>
            <div class="mb-3">
                <label for="">Estado: </label>
                <input type="text" name="bt_estado">
            </div>
            <div class="mb-3">
                <label for="">Cidade: </label>
                <input type="text" name="bt_cidade">
            </div>
            <div class="mb-3">
                <label for="">Pais: </label>
                <input type="text" name="bt_pais">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
                <button type="button" class="btn btn-danger">Danger</button>
        </div>
    </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>