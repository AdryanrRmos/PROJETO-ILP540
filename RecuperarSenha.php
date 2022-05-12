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
          <h1>Recuperar senha</h1> 
          <label>
          <p>Senha:</p><br>
            <input id="senha" name="senha"  type="password" placeholder="Digite sua Senha" value=""> 
          </label>
          <p>Confirmar senha:</p><br>
            <input id="senha" name="senha"  type="password" placeholder="Confirme sua Senha" value=""> 
          </label>
            <input type="submit" value="Recuperar senha">            
          <p class="link">
            <br>
            <a href="Login.php">Voltar Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="Cadastro.php">Novo Cadastro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <a href="LoginEditar.php"> Editar cadastro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            
            <br>
          </p>
        </form>
</body>
</html>