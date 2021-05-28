<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <center><h3 class="text-light">¿No sabes Donde Buscar el Producto o Servicio que desees en tu localidad?</h3>
                <h4 class="text-light">Estas en el lugar correcto</h4></center>
        </div>    
    </div>
</div>
<div class="container rounded-3">
    <div class="row">      
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/thumb-1920-136344.jpg" class="d-block w-100" style="height: 350px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/images.jpg" class="d-block w-100" style="height: 350px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/descarga.jpg" class="d-block w-100" style="height: 350px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
$controllerServicio = new ControladorServicio();
$servicio = $controllerServicio->mostrarServicio();
?>
<div>
    <div class="container rounded-2" style="background: #0F1E23">
        <h4 class="text-light">Negocios Recientes</h4>
        <div class="row">
            <?php
            foreach ($servicio as $servi) {
                ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../img/logo.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $servi['idServicio']; ?></h5>
                            <p class="card-text"><?php echo $servi['titulo']; ?></p>
                            <p class="card-text"><?php echo $servi['descripcion']; ?></p>
                            <p class="card-text"><?php echo $servi['fecha_registro']; ?></p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>                 
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php
    include './footer.php';
    ?>
