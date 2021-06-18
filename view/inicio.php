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
                $contServicios = new ControladorServicio();
                $servicio = $contServicios->mostrarServicio();
                foreach ($servicio as $ser) {
                    ?>
                    <div class="col-3">                   
                        <hr width=100%  align="right" size=0>
                        <div class="card" style="width: 15rem; height: 22rem;">
                            <img src="../img/<?php echo $ser['imagen1'];?>" class="card-img-top" alt="...">
                            <div class="card-body" style="height: 100px">
                                <center><h6 class="card-text"><?php echo $ser['titulo'] ?></h6></center>
                                <p><b>Descripción:</b> <?php echo $ser['descripcion'] ?></p>
                                <p><b>F.Publicación: </b><?php echo $ser['fecha_registro'] ?></p>                           
                            </div>
                            <div class="card-footer">
                                <a type="submit" href="detalleNegocios.php?idP=<?php echo $ser['idServicio']; ?>" name="detalles" class="btn btn-primary">Mas Detalles</a>
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

