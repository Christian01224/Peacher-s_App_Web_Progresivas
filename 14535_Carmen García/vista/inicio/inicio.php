<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PWA | UTSC <?php echo date("Y"); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="background-color:#BC98F3;">
    <!-- Aqui inicia el menú -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://youtu.be/nnmb1GXqz60"> ♡♡♡ </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Buscar">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Aqui termina el menú -->


    <!-- CONTENIDO  -->
    <br>
    <center>
        <div style=" font-size:30px; font-family: Georgia, 'Times New Roman', serif;">Inicio de Sesión</div>
    </center>
    
    <div class="container-lg p-3 mt-5" style="text-align: center; background-color: #AA77C3;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card" style="background-color: #F79AE5;">
                    <center>
                        <img src="configuracion/imagenes/usuario.jpg" style="width: 25%;" class="card-img-top"
                            alt="...">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title"> [ Usuario ] </h5><br>
                        <p class="card-text"><button data-bs-toggle="modal" data-bs-target="#modal_login_usuario"
                                class="btn btn-primary">Ingresar</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="background-color: #F79AE5;">
                    <center>
                        <img src="configuracion/imagenes/administrador.jpg" style="width: 25%;" class="card-img-top"
                            alt="...">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title"> [ Administrador ] </h5><br>
                        <p class="card-text"><button data-bs-toggle="modal" data-bs-target="#modal_login_admin"
                                class="btn btn-primary">Ingresar</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN CONTENIDO -->

    <!-- Inicio Modal:  Login Usuario -->
    <div class="modal fade" id="modal_login_usuario">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login -> Usuario</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su usuario" id="user">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="user_pass">Contraseña:</label><br>
                        <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="user_pass">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                    <button type="button" onclick="login_usuario()" class="btn btn-primary">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_login_admin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login -> Administrador</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_admin">Usuario:</label><br>
                        <input type="text" class="form-control" placeholder="Ingrese su usuario" id="user_admin">
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="admin_pass">Contraseña:</label><br>
                        <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="admin_pass">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="text-align: center; display: inline;">
                    <button type="button" onclick="login_admin()" class="btn btn-primary">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Fin Modal -> Login -->

    <div id="show_alert"></div>

    <!-- ALERTAS PARA LOGIN -->
    <div class="alert alert-success alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;"
        id="alerta_login_correcto">
        <p id="texto_bienvenida"></p>
    </div>
    <div class="alert alert-danger alert-dismissible fade" style="position: fixed; top: 8%; right: 0; z-index: 10000;"
        id="alerta_login_error">
        <p id="texto_error"></p>
    </div>
    <!-- FIN DE ALERTAS PARA LOGIN-->

    <!-- Llamar al archivo login.js de la carpeta jss -->
    <script src="configuracion/js/login_usuario.js"></script>
    <script src="configuracion/js/login_admin.js"></script>
</body>

</html>