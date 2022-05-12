<?php
    include("verifica.php");
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>OURO VERDE - ESPORTES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet"  href="Agendar.css" />
</head>
<body>
    <div class="container" >
    <form method="post" action="Logar"> 
      <h1>Agendar </h1> 
      <p>Confirmar senha:</p><br>
            <input id="agendar" name="agendar"  type="text" placeholder="Agendar" value=""> 
          </label>
            <input type="submit" value="Agendar">            
          <p class="link">
            <br>
            
            <a href="Login.php">Voltar Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <a href="LoginEditar.php"> Editar cadastro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <a href="RecuperarSenha.php">Recuperar Senha</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


 
      
    </form>
  </div>
</div>
</div>  
</body>
</html>