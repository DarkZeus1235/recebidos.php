<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebidos</title>
</head>
<body>
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