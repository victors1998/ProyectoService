<?php
include '../bd/autoload.php';
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
                                <li><a class="dropdown-item" href="#">vic</a></li>                                 
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true">Sobre Nosotros</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar Servicio" aria-label="Search">
                        <button class="btn btn-success me-2" type="submit">Search</button>                      
                    </form>              
                    <a class="btn btn-success me-2" <?php if (session_status() == 2) { ?> hidden="" <?php } ?> href="login.php" name="sesion">Iniciar Sesion</a>   


                    <div class="dropdown" <?php if(session_status() == 1){ ?> hidden="" <?php }?>>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo "Bienvenido: ". $_SESSION['nom']; ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="inicio.php<?php session_destroy(); ?>">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
