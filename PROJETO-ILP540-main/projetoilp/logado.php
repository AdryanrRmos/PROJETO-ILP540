<?php
    include("verifica.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <header>
        <nav>
            <a class="Ouro Verde - Esportes" href="/">Ouro Verde - Esportes</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="sair.php">Sair</a></li>
                <li><a href="/">Agendar</a></li>
                <li><a href="/">Contatos</a></li>
                <li><a href="cadastro.php">Alterar Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
    <div class="card" id="telalogin">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <small id="emailHelp" class="form-text text-muted">A Ouro Verde - Esportes agradece pelo seu contato e para melhor atendermos e ter uma previa do orçamento, digite a marca, modelo e o serviço que pretende fazer.</small>
                    <label for="exampleInputEmail1">Horario</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe Marca">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Data</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Informe Modelo">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Esportes</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Informe o serviço">
                  </div>
                <a href="logado.php"><button type="button" class="btn btn-success btn-lg btn-block">Agendar</button></a>
              </form>
        </div>
      </div>
</body>
</html>