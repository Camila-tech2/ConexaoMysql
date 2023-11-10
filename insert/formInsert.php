<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <form method="POST" action="./insert.php">
    <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control" id="nomePaciente" name="nomePaciente" placeholder="Informe o nome">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Senha </label>
        <input type="text" class="form-control" id="senhaPaciente" name="senhaPaciente" placeholder="Informe a senha com no máximo 8 digitos">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Endereço</label>
        <input type="text" class="form-control" id="enderecoPaciente" name="enderecoPaciente" placeholder="Informe o endereço">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Telefone </label>
        <input type="text" class="form-control" id="telefonePaciente" name="telefonePaciente" placeholder="Informe o telefone">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Número Beneficiário </label>
        <input type="text" class="form-control" id="numeroBeneficiario" name="numeroBeneficiario" placeholder="Informe o Número Beneficiário">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Doenças Prévias </label>
        <input type="text" class="form-control" id="doencasPrevias" name="doencasPrevias" placeholder="Informe a(s) Doenças Prévias">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Remédio de Uso Contínuo </label>
        <input type="text" class="form-control" id="remedioDeUsoContinuo" name="remedioDeUsoContinuo" placeholder="Informe o(s) Remédio de Uso Contínuo">
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

