<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/formlogin.css"> <!--Faltou o / aqui quanto está pagina estiver em PHP O COMEÇO VAI FICAR ./adimin em PHP SO FUNCIONA  COM . no começo-->
    <title>Login</title>
</head>


<body>
    <main id="container">
        <form action="../pages/login.php" method="POST" id="login_form">
            <div id="form_header">
                <h1>Login</h1>
                <i  id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <div id="social_media">
                
                <a href="#">
                    <p>Login com Google:</p><img src="../img/pnggoogle.png" alt="Google logo">                     
                </a>
                
                
            </div>

            <div id="inputs">
                <div class="input-box">
                    <label for="name">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="username" placeholder="Nome do usuário" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" id="email" name="email" placeholder="usuario@email.com" required >
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="senha" name="password" placeholder="*********" required>
                        </div>
                    </label>

                    <div id="forgot-password">
                        <a href="#">
                            Esqueceu sua senha?
                        </a>
                    </div>
                </div>

            </div>

            <button type="submit" id="login_button">
                Login
            </button>
        </form>
        <form action="../pages/cadastro.php" method="GET"> <!-- Vou criar isso aqui so pra cadastar os nossos usuarios depois so apagar kkk pra eu nao ter que cadastrar direito no banco de dados e ter acesso a senha e tals-->
            <p> Criar Conta  <button type="submit"> Cadastrar</button></p> 
        </form>
    </main>
<script type="text/javascript" src="../js/formlogin.js"></script>
</body>
</html>