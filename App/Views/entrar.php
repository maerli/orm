<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMDE- Login</title>

  <!-- Custom fonts for this template-->
  <link href="/spu/sistema/painel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/spu/sistema/painel/css/sb-admin-2.css" rel="stylesheet"/>
</head>

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bem vindo de volta!</h1>
                  </div>
                  <form class="user" id="form" method="post" osubmit="event.preventDefault();">
                    <div id="feedback"></div>
                    <div class="form-group">
                      <input type="email" value="maerli.pereira@gmail.com" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu email...">
                    </div>
                    <div class="form-group">
                      <input type="password" value="expires5" class="form-control form-control-user" id="senha" name="senha" placeholder="Sua senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                        <label class="custom-control-label" for="customCheck">Manter conectado.</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Entrar">



                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="novasenha.html">Esqueceu a senha?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="cadastrar.html">Solicitar acesso!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
	<!-- Bootstrap core JavaScript-->
<script src="/spu/sistema/painel/vendor/jquery/jquery.min.js"></script>
<script src="/spu/sistema/painel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/spu/sistema/painel/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/spu/sistema/painel/js/sb-admin-2.min.js"></script>

<script src="login.js"> </script>

</body>

</html>
