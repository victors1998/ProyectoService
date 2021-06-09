<?php
session_start();
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
    <body style="background: #203A44">
        <!--inicio de nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light border border-dark" style="background:#0F1E23 ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../img/logo.png" class="img-fluid" width="100px" height="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  text-light" aria-current="page" href="#">Inicio</a>
                        </li>                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-light" href="#">Mecanica</a></li>
                                <li><a class="dropdown-item text-light" href="#">todo</a></li>
                                <li><hr class="dropdown-divider text-light"></li>
                                <li><a class="dropdown-item text-light" href="#">nada</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true">Sobre Nosotros</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar Servicio" aria-label="Search">
                        <button class="btn btn-outline-success me-2" type="submit">Search</button>                      
                    </form>
                    <form class="d-flex" method="POST">
                        <button class="btn btn-outline-success me-2" name="sesion" type="submit">Iniciar Sesion</button>                      
                    </form>
                    <?php
                    if (isset($_POST['sesion'])) {
                        header("Location: ../view/login.php");
                    }
                    ?>
                    <div class="btn-group me-5">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <?php echo $_SESSION['idUs']; ?> <img src="../img/user.png" class="img-fluid" width="28px" height="28px">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                            <li><button class="dropdown-item" type="button">Action</button></li>
                            <li><button class="dropdown-item" type="button">Another action</button></li>
                            <li><button class="dropdown-item" type="button">Something else here</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


