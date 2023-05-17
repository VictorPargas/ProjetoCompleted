<?php

$host = 'localhost';
$db = 'b1softv1';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExxeption $e) {
  echo 'Erro na conexão com o banco de dados: '. $e->gerMessage();
}

//dados do login1
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tabela_usuarios WHERE (username = :username OR email = :email) AND password = :password";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user) {

  header('Location: painel.php');
  exit();
} else {

  echo 'Nome de usuário/email ou senha inválidos.';
}

?>
