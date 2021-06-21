<?php
session_start();
include "../bd/autoload.php";
include './header.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row rounded-3" style="margin-right: 5px;margin-left: 50px; margin-top: 30px;margin-bottom: 30px; background:#0F1E23">
                <hr width=100%  align="right" size=0>
                <h4 class="text-white"><i class="fas fa-house-user"></i> Mis Negocios/Servicios</h4>
                <?php                
                $contNegocio = new ControllerNegocio();
                $negocio = $contNegocio->mostrarNegocioId($_SESSION['idUs']);
                foreach ($negocio as $neg) {
                    ?>
                    <div class="col-3">                   
                        <hr width=100%  align="right" size=0>
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="../img/primerNegocio.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="height: 100px">
                                <h5 class="card-title"><?php echo $neg['idnegocio'] ?></h5>
                                <h5 class="card-title"><?php echo $neg['nombre'] ?></h5>
                                <p class="card-text"><b>Dirección :</b><?php echo $neg['direccion'] ?></p>                           
                            </div>
                            <div class="card-footer">
                                <a type="submit" href="inicioLogueado.php" name="detalles" class="btn btn-primary">Mas Detalles</a>
                            </div>
                        </div>
                        <hr width=100%  align="right" size=0>
                    </div>
                <?php } ?>
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
                    <h5 class="text-white"><a href="registrarNegocio.php"> Crear Nuevo Negocio</a></h5>
                    <h5 class="text-white"><a href="registrarServicios.php"> Añadir Servicios</a></h5>
                    <h5 class="text-white"><a href="registrarProductos.php"> Añadir Productos</a></h5> 
                </div>
            </div> 
            <div class="row" style="margin-right: 2px;margin-left: 2px; margin-top: 10px;margin-bottom: 30px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Categorias</h4>
                    <?php
                    $contCategoria = new ControllerCategoria();
                    $cat = $contCategoria->mostrarCategoria();
                    foreach ($cat as $categoria) {
                        ?>
                    <a href="mostrarPorCategoria.php?idC=<?php echo $categoria['idcategoria'] ?>"
                       class="text-white border-bottom"><?php echo $categoria['nombre_categoria'] ?></a></br>
                    <?php } ?>
                </div>
            </div>           
        </div>
    </div>
</div>
<?php
include './footer.php';
?>

