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
            <a class="OURO VERDE - ESPORTES" href="/"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="/">Localização</a></li>
                <li><a href="/">Contatos</a></li>
                <li><a href="cadastro.php">Alterar Cadastro</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
    <div class="card" id="telalogin">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Data</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd/mm/nnnn">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Horario</label>
                  <input type="time" class="form-control" id="exampleInputEmail1" placeholder="00:00">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quadra</label>
                    <div>
                    <input type="checkbox" name="Esporte" value="Beach Tenis"> Beach Tenis <br/> 
                    <input type="checkbox" name="Esporte" value="Tenis"> Futebol<br/> 
                    <input type="checkbox" name="Esporte" value="Futebol"> Tenis<br/>
                    <input type="checkbox" name="Esporte" value="Futebol"> Futvolei<br/>
                </div>      
                <a href="logado.php"><button type="button" class="btn btn-success btn-lg btn-block">Agendar </button></a>
              </form>
        </div>
      </div>
</body>
</html>