<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="scroll_1f4dc.png">
    <title>Inscrição</title>
</head>
<body>
<form action="recebidos.php" method="get">
<h1 class="inscr">Tela de Inscrição</h1>
    <div class="container">
    <div class="mb-3">
    <label for="exampleInputCidade1" class="form-label">Nome Completo</label>
    <input type="text" name="nome" class="form-control" id="exampleInputCidade1" placeholder="Seu nome não será compartilhado com ninguém">
  </div>
  <div class="mb-3">
    <label for="exampleInputCidade1" class="form-label">Data de Nascimento</label>
    <input name="data" type="text" class="form-control" id="exampleInputNomee1">
  </div>
<div class="mb-3">
    <label for="exampleInputCidade1" class="form-label">Telefone</label>
    <input name="cell" type="text" class="form-control" id="exampleInputNomee1">
  </div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">País</label>
<select name="pais" class="form-select" aria-label="Default select example">
  <option selected>Selecione seu país</option>
  <option value="1">Brasil</option>
  <option value="2">Estados Unidos</option>
  <option value="3">Canadá</option>
  <option value="4">Angola</option>
  <option value="5">Acre</option>
  <option value="6">Inglaterra</option>
</select>
</div>
<div class="mb-3">
    <label for="exampleEstado1" class="form-label">Estado</label>
    <select name="estado" class="form-select" aria-label="Default select example">
  <option selected>Selecione seu Estado</option>
  <option value="1">Paraná</option>
  <option value="2">Bahia</option>
  <option value="3">Minas Gerais</option>
  <option value="4">São Paulo</option>
  <option value="5">Rio de Janeiro</option>
  <option value="6">Santa Catarina</option>
</select>
  </div>
<div class="mb-3">
    <label for="exampleInputCidade1" class="form-label">Cidade</label>
    <input name="cidade" type="text" class="form-control" id="exampleInputCidade1">
  </div>
<div class="mb-3">
    <label for="exampleInputendereco1" class="form-label">Endereço</label>
    <input name="endereço" type="text" class="form-control" id="exampleInputendereco1">
  </div>
  <div class="mb-3">
    <label for="exampleInputendereco1" class="form-label">CPF</label>
    <input name="cpf" type="text" class="form-control" id="exampleInputendereco1">
  </div>
  <div class="mb-3">
    <label for="exampleInputendereco1" class="form-label">Endereço de E-mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputendereco1">
  </div>
  <div class="mb-3">
    <label for="exampleInputendereco1" class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" id="exampleInputendereco1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
</form>
</body>
</html>