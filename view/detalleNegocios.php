<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-3" style="margin-top: 30px;">
            <img src="../img/images.jpg" style="height: 300px; width: 250px"> 
        </div>
        <div class="col-9" style="margin-top: 30px; margin-bottom: 30px; background:#0F1E23;">          
            <?php
            $contNegocioId = new ControllerNegocio();
            $NegocioId = $contNegocioId->mostrarNegocioIdP($_GET['idP']);
            foreach ($NegocioId as $idNeg) {
                ?>
            <center><h1 class="text-white" style="margin-top: 20px"><?php echo $idNeg['nombre']; ?></h1></center></br>
            <h3 class="text-white" style="margin-bottom: 30px;"><i class="fa fa-folder-open"></i> Datos del Negocio:</h3>
                <p class="text-white">Ruc: <?php echo $idNeg['ruc']; ?></p>
                <p class="text-white">Ubicación: <?php echo $idNeg['direccion']; ?></p>
                <p class="text-white">Fecha de Registro: <?php echo $idNeg['fecha_registro']; ?></p> 
                <p class="text-white">Telefono: <?php echo $idNeg['telefono']; ?></p> 
                </br>           
                <?php
            }
            if (isset($_GET['idP']) > 0) {
                $contServicioPorId = new ControladorServicio();
                $servicioNegocio = $contServicioPorId->mostrarServicioPorIdNegocio($_GET['idP']);
                ?>  
                <h3 class="text-white"><i class="fa fa-th-list"></i> Lista de Servicios</h3>
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id Servicio</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Productos</th>
                        </tr>
                    </thead>                    
                    <tbody>
                        <?php
                        foreach ($servicioNegocio as $negId) {
                            ?>
                            <tr>
                                <td><?php echo $negId['idServicio']; ?></td>
                                <td><?php echo $negId['titulo']; ?></td>
                                <td><?php echo $negId['descripcion']; ?></td>
                                <td><?php echo $negId['nombre_categoria']; ?></td>
                                <td><a class="btn btn-success" href="detalleNegocios.php?idP="<?php echo $negId['idServicio'];?> >Ver Productos</a></td>
                            </tr>
                        <?php } ?>   
                    </tbody>
                </table>
                <?php
            } else {
                ?>
                <center><p class="text-white">No tiene Servicios..</p></center>
                <?php } ?>
        </div>     
    </div>
</div>
<?php
include './footer.php';
?>

