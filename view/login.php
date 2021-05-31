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
        <title>Login NL</title>
    </head>
    <body>

        <div class="modal-dialog">
            <div class="col-sm-8 main-section">   
                <div class="modal-content container" style="background: #0F1E23">
                    <div class="col-12 text-center user-img">
                        <img src="../img/user.png">
                    </div>
                    <div class="col-12 text-center">
                        <h4 class="text-center">Bienvenido</h4>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>                                              
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><a href="#" class="link-info">Se me Olvido la contraseña</a></label>
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


