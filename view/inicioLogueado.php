<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row" style="margin-right: 5px;margin-left: 50px; margin-top: 30px;margin-bottom: 30px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <hr width=100%  align="right" size=0>
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Mis Negocios/Servicios</h4>
                    <hr width=100%  align="right" size=0>
                    <div class="card" style="width: 15rem;">
                        <img src="../img/primerNegocio.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Panaderia Victor & Familia</h5>
                            <p class="card-text">Ventas de tortas, panes, helados y otros por mayor y menor.</p>
                            <a href="#" class="btn btn-primary">Mas Detalles</a>
                        </div>
                    </div>
                    <hr width=100%  align="right" size=0>
                </div>
            </div>
            <div class="row" style="margin-right: 5px;margin-left: 50px; margin-top: 20px;margin-bottom: 30px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">   
                    <hr width=100%  align="right" size=0>
                    <h4 class="text-white">Publicaciones Recientes</h4>
                    <hr width=100%  align="right" size=0>
                    <div class="card" style="width: 18rem;">
                        <img src="../img/segundoNegocio.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Panaderia Victor & Familia</h5>
                            <p class="card-text">Ventas de tortas, panes, helados y otros por mayor y menor.</p>
                            <a href="#" class="btn btn-primary">Mas Detalles</a>
                        </div>
                    </div>
                    <hr width=100%  align="right" size=0>
                </div>
            </div> 
        </div>
        <div class="col-md-2">
            <div class="row" style="margin-right: 2px;margin-left: 2px; margin-top: 30px;margin-bottom: 10px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Mis Acciones</h4>
                    <h5>Crear Nuevo Negocio</h5>
                    <h5>esto es una prueba</h5>
                    <h5>romeo y julieta</h5>
                    <h5>Todo o nada</h5>
                </div>
            </div> 
            <div class="row" style="margin-right: 2px;margin-left: 2px; margin-top: 10px;margin-bottom: 30px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Categorias</h4>
                    <?php
                    $contCategoria = new ControllerCategoria();
                    $cat = $contCategoria->mostrarCategoria();
                    foreach ($cat as $categoria){
                    ?>
                    <p class="text-white border-bottom"><?php echo $categoria['nombre_categoria'] ?></p>
                    <?php } ?>
                </div>
            </div>           
        </div>
    </div>
</div>
<?php
include './footer.php';
?>

