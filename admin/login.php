<?php include_once './config/config.php';?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?= TITLE ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="./css/login.css">

    <!-- Bootstrap CSS v5.0.2 -->
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="screen-login">
      <section class="container">        
        <div class="row">
          <div class="col-md-6 offset-md-3">            
            <div class="card">
                <div id="div-error" class="row" style="display:none;">
                  <div class="col-sm-12">
                    <div id="error-message" class="alert alert-danger" align="center"></div>
                  </div>
                </div>
              <div class="screen-card-header">
                <h3><?= TITLE; ?></h3>
              </div>
              <div class="card-body">
                <form id="form-login" method="post">
                  <div class="screen-input form-group">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      required
                    />
                  </div>
                  <div class="screen-input form-group">
                    <label for="senha">Senha</label>
                    <input
                      type="password"
                      name="password"
                      id="senha"
                      class="form-control"
                      required
                    />
                  </div>
                  <div class="btn-screen form-group">
                    <button type="submit" class="btn btn-primary">
                      Entrar
                    </button>
                    <a id="recuperar-senha" href="#">Recuperar senha</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="./js/login.js"></script>
  </body>
</html>