<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
  <div class="row">
    <div class="col-4">
    </div>
    <!--  -->
    <div class="col-4 card card-body" style="margin: 20% 0;" >
        <h1>Login PHP</h1>
        <div class="container" >
                <form action="login.php" method="POST">
                    <input type="text" placeholder="Login" name="usuario" class="form-control"><br>
                    <input type="password" placeholder="Senha" name="senha" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
        </div>
    </div>
        <!--  -->
    <div class="col-4">
    </div>
  </div>
</div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>