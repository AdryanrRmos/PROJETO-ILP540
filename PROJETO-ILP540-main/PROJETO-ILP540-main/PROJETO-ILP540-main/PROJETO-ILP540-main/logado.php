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
            <a class="OURO VERDE - ESPORTES"></a>
             <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                <div class="line4"></div>
            </div>
            <ul class="nav-list">
                <li><a href="index.php">Login</a></li>
                <li><a href="https://www.google.com/maps/place/Ouro+Verde+Hotel/@-22.1392794,-51.1780792,17z/data=!3m1!4b1!4m8!3m7!1s0x94946d155f7b116d:0x100ec73ebe8cf37f!5m2!4m1!1i2!8m2!3d-22.1392794!4d-51.1758905">Localização</a></li>
                <li><a href="https://www.martinopolisempresas.com.br/busca/martinopolis/ouro+verde+ho">Contatos</a></li>
                <li><a href="altcadastro.php">Alterar Cadastro</a></li>
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
                  <label for="exampleInputEmail1">Horario de Inicio</label>
                  <input type="time" class="form-control" id="exampleInputEmail1" placeholder="00:00">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Horario Final</label>
                  <input type="time" class="form-control" id="exampleInputEmail1" placeholder="00:00">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quadra</label>
                    <br>
                    <input type="checkbox" name="Esporte" value="Beach Tenis"> Beach Tenis - R$80,00 p/Hora <br/> 
                    <input type="checkbox" name="Esporte" value="Tenis"> Futebol- R$60,00 p/Hora<br/> 
                    <input type="checkbox" name="Esporte" value="Futebol"> Tenis- R$100,00 p/Hora<br/>
                    <input type="checkbox" name="Esporte" value="Futebol"> Futvolei- R$50,00 p/Hora<br/>
                </div>      
                <a href="logado.php"><button type="button" class="btn btn-success btn-lg btn-block">Agendar </button></a>
                <br>
                <a href="sair.php"><button type="button" class="btn btn-danger btn-lg btn-block">Sair</button></div>
                </br>
              </form>
        </div>
      </div>
</body>
</html>
