<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row rounded-3" style="margin-right: 5px;margin-left: 50px; margin-top: 30px;margin-bottom: 30px; background:#0F1E23">
                <hr width=100%  align="right" size=0>
                <h4 class="text-white"><i class="fas fa-house-user"></i> Publicaciones Recientes</h4>
                <?php
                $contServicios = new ControllerNegocio();
                $servicio = $contServicios->mostrarNegocioIdNegocio();
                foreach ($servicio as $ser) {
                    ?>
                    <div class="col-3">                   
                        <hr width=100%  align="right" size=0>
                        <div class="card" style="width: 15rem; height: 25rem;">
                            <img src="../img/<?php echo $ser['imagen1']; ?>" class="card-img-top" style="height: 8rem;">
                            <div class="card-body" style="height: 100px">
                                <center><p class="card-text bg-primary"><?php echo $ser['nombre']; ?></p></center>
                                <p><b>Dirección: </b><?php echo $ser['direccion']; ?></p>
                                <p><b>F.Publicación: </b><?php echo $ser['fecha_registro']; ?></p>
                                <p><b>Telefono: </b><?php echo $ser['telefono']; ?></p>
                            </div>
                            <div class="card-footer">
                                <a type="submit" href="detalleNegocios.php?idP=<?php echo $ser['idnegocio']; ?>" name="detalles" class="btn btn-primary">Mas Detalles</a>
                            </div>
                        </div>
                        <hr width=100%  align="right" size=0>
                    </div>
                <?php } ?>
            </div>           
        </div>
        <div class="col-md-2"> 
            <div class="row" style="margin-right: 2px;margin-left: 2px; margin-top: 30px;margin-bottom: 30px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Categorias</h4>
                    <?php
                    $contCategoria = new ControllerCategoria();
                    $cat = $contCategoria->mostrarCategoria();
                    foreach ($cat as $categoria) {
                        ?>
                        <a href="mostrarPorCategoria.php?idC=<?php echo $categoria['idcategoria'] ?>"
                           class="fs-4 text-white" style="text-decoration: none;">
                            <?php echo $categoria['nombre_categoria'] ?></a></br>
                        <?php } ?>
                </div>
            </div>           
        </div>
    </div>
</div>
<?php
include './footer.php';
?>

