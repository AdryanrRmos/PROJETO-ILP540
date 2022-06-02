<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meubd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com sucesso"; 
} catch(PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}
?>