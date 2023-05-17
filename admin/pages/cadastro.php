<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Conexão com o banco de dados
  $host = 'localhost';
  $db   = 'b1softv1';
  $user = 'root';
  $pass = '';
  $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

  try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    exit();
  }

  // Obtenção dos dados do formulário
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Inserção do novo usuário no banco de dados
  $sql = "INSERT INTO tabela_usuarios (username, email, password) VALUES (:username, :email, :password)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  
  if ($stmt->execute()) {
    echo 'Usuário cadastrado com sucesso!';
  } else {
    echo 'Erro ao cadastrar o usuário.';
  }
}
?>

<h2>Cadastro de Usuário</h2>

<form action="cadastro.php" method="POST">
  <label for="username">Nome de usuário:</label>
  <input type="text" id="username" name="username" required>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password" required>
  <button type="submit">Cadastrar</button>
</form>