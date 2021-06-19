<?php
session_start();
if (isset($_POST['ingresar'])) {
    include '../model/Usuarios.php';
    $empleado = new Usuarios();
    $empleado->setUserName($_POST['user']);
    $empleado->setPassword($_POST['pass']);
    if ($empleado->ValidarUsuario()) {
        $_SESSION['idUs'] = $empleado->getIdUsuario();
        $_SESSION['nom'] = $empleado->getNombres();
        $_SESSION['ape'] = $empleado->getApellidos();
        $_SESSION['tipUs'] = $empleado->getTipoUsuario();
        $_SESSION['est'] = $empleado->getEstado();
        $_SESSION['dni'] = $empleado->getDni();
        $_SESSION['fechReg'] = $empleado->getFechaRegistro();
        header("Location: ../view/inicioLogueado.php");
    } else {
        header("Location: ../view/login.php");
    }
}
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link REL=StyleSheet HREF="../css/login.css" TYPE="text/css" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
            />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
            rel="stylesheet"
            />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Iniciar sesión</title>
    </head>
    <body>
        <div class="modal-dialog">
            <div class="col-sm-8 main-section">   
                <div class="modal-content container" style="background: #0F1E23">
                    <div class="col-12 text-center user-img">
                        <img src="../img/user.png">
                    </div>
                    <div class="col-12 text-center" >
                        <h3 class="text-center" style="color: white">Bienvenido</h3>
                    </div>
                    <form method="POST">
                        <div class="mb-3">
                            <FONT COLOR="white">Correo electronico </FONT>
                            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="mb-3">
                        <FONT COLOR="white">Contraseña </FONT>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                        </div>                                              
                        <div class="mb-3">
                            <button name="ingresar" type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><a href="#" class="link-info">¿Se te olvido la contraseña?</a></label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><a href="registrarUsuario.php" class="link-success">Registrarse</a></label>
                        </div>
                    </form>

                </div>                                                              
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
        ></script>
    </body>
</html>


