<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center><h2>¿No sabes Donde Buscar el Producto o Servicio que desees en tu localidad?</h2>
                    <h2>Estas en el lugar correcto</h2></center>
            </div>
            <div class="col-12">
                <img src="../img/mecanica.jpg">
            </div>
        </div>
    </div>
    <?php
    $controllerServicio = new ControladorServicio();
    $servicio = $controllerServicio->mostrarServicio();
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($servicio as $servi) {
            ?>
            <div class="col-4">
                <h4><?php echo $servi['idServicio']; ?></h4>  
                <h4><?php echo $servi['titulo']; ?></h4>
                <h4><?php echo $servi['descripcion']; ?></h4>
                <h4><?php echo $servi['fecha_registro']; ?></h4> 
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>
