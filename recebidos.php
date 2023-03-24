<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Recebidos</title>
</head>
<body>
    <?php
        include("menu.php");
    ?>
    <h1>Os dados recebidos foram:</h1>
    <p><b>Nome recebido foi: </b><?php echo $_GET["nome"]; ?> </p>
    <p><b>Telefone recebido foi: </b> <?php echo $_GET["data"]; ?> </p>
    <p><b>Telefone recebido foi: </b> <?php echo $_GET["cell"]; ?> </p>
    <p><b>País recebido foi: </b> <?php echo $_GET["pais"]; ?> </p>
    <p><b>Estado recebido foi: </b> <?php echo $_GET["estado"]; ?> </p>
    <p><b>Cidade recebida foi: </b> <?php echo $_GET["cidade"]; ?> </p>
    <p><b>Endereço recebido foi: </b> <?php echo $_GET["endereço"]; ?> </p>
    <p><b>CPF recebido foi: </b> <?php echo $_GET["cpf"]; ?> </p>
    <p><b>Email recebido foi: </b> <?php echo $_GET["email"]; ?> </p>
    <p><b>Senha recebida foi: </b> <?php echo $_GET["senha"]; ?> </p>
    <a href="index.php">Voltar para Inscrição</a>
</body>
</html>