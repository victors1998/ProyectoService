<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <hr width=100%  align="right" size=0>
            <center><h3 class="text-light">¿No sabes Donde Buscar el Producto o Servicio que desees en tu localidad?</h3>
                <h4 class="text-light">Estas en el lugar correcto</h4></center>
            <hr width=100%  align="right" size=0>
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
<div class="container rounded-3">
    <div class="row">      
        <div class="col-12">
            <hr width=100%  align="right" size=0>
            <div class="card" style="width: 18rem;">
                <img src="../img/segundoNegocio.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Zapateria Lopez</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form method="POST">
                        <button name="detalle" type="submit" class="btn btn-primary">Mas Detalles</button>
                    </form>
                    <?php
                    if (isset($_POST['detalle'])) {
                        header("Location: ../view/detalleNegocios.php");
                    }
                    ?>
                </div>
            </div>
            <hr width=100%  align="right" size=0>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>
