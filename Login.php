<?php 
$login = $senha = $check = "";
 if(isset($_COOKIE["login"])){
      $login = $_COOKIE["login"];
       $check = "checked"; 
       } if(isset($_COOKIE["senha"])) 
       $senha = $_COOKIE["senha"]; ?>
       
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>OURO VERDE - ESPORTES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet"  href="css/Login.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <a class="links" id="paralogineditar"></a>
    <div class="content">      
      <div id="login">
        <form method="post" action="processocokie.php"> 
          <h1>Login</h1> 
          <label>
            <p>E-mail:</p><br>
            <input id="login" name="login" type="email" placeholder="Digite seu E-mail" value="<?=$login?>">
          </label>
          <label>
            <p>Senha:</p><br>
            <input id="senha" name="senha"  type="password" placeholder="Digite sua Senha" value="<?=$senha?>"> 
          </label>
            <input type="submit" value="Logar">            
          <p class="link">
            <br>
            
            <a href="Cadastro.php">Novo Cadastro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <a href="LoginEditar.php"> Editar cadastro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <a href="RecuperarSenha.php">Recuperar Senha</a>
            <br>
            <label>
              <input name="salvar" type="checkbox" <?=$check?>>
              Manter-me logado
            </label>

          </p>
        </form>
</body>
</html>