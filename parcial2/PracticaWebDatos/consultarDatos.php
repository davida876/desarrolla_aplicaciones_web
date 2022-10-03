<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Práctica Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registar</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Inicio</a>
                <a class="dropdown-item" href="#">Registrar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Consultar</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
    </nav><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Domicilio</th>
                            <th>Fecha de nacimiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan López</td>
                            <td>21</td>
                            <td>Masculino</td>
                            <td>Calle X col Y #1325 int. 8</td>
                            <td>12/02/2001</td>
                            <td>
                                <a href="" class="btn btn-primary">Editar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>