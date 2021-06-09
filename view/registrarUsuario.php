<?php
include '../bd/autoload.php';
if (isset($_POST['nuevo'])) {
    $GrabarUsuario = new ControllerUsuarios();
    $GrabarUsuario->guardarUsuario($_POST);
    header("Location: ../view/login.php");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
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
        <title>Buscando Servicio</title>
    </head>
    <body>
        <div class="container ">
            <div class="row">                
                <div class="col-3">

                </div>
                <div class="col-6 border border-dark rounded" style="margin-top: 100px">
                    <div class="box boxmx-auto-info">
                        <div class="box-header with-border">
                            <center> <h3 class="box-title">Registro de Usuario</h3></center>
                            <form method="POST">
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold">Nombres:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nombres" placeholder="Ingrese su nombre" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label font-weight-bold">Apellidos:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold">Nombre Usuario:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="userName" placeholder="Cree nombre de usuario" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold">Dni:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="dni" placeholder="Ingrese su DNI" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold">Telefono:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="telefono" placeholder="Ingrese su número de celular" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold">Contraseña:</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password" placeholder="Cree una contraseña" >
                                    </div>
                                </div> 
                                <div class="mb-3 row">                                   
                                    <div class="box-footer">
                                        <center>
                                            <button class="btn btn-success" name="nuevo" type="submit">Registrarse</button>
                                            <button class="btn btn-danger" name="cancelar" type="submit">Cancelar</button>   
                                        </center>                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">                    
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['cancelar'])) {
            header("Location: ../view/inicio.php");
        }
        ?>      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
        ></script>
    </body>
</html>



