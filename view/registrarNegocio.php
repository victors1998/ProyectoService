<?php
include "../bd/autoload.php";
include './header.php';
if (isset($_POST['nuevo'])) {
    $GrabarNegocio = new ControllerNegocio();
    $GrabarNegocio->guardarNegocio($_POST);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row rounded-3" style="margin-right: 5px;margin-left: 50px; margin-top: 30px;margin-bottom: 30px; background:#0F1E23">
                <hr width=100%  align="right" size=0>
                <h4 class="text-white"><i class="fas fa-edit"></i> Registra tu Negocio</h4>
                <div class="col-lg-12">                   
                    <form method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Nombres de Negocio :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Negocio" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="text-white col-sm-4 col-form-label font-weight-bold">RUC :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ruc" placeholder="Ruc">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Dirección :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="direccion" placeholder="Dirección" >
                            </div>
                        </div>
                        <div class="mb-3 row" hidden="">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Negocio :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="2" name="usuario" placeholder="Cree nombre de usuario" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Telefono :</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="telefono" placeholder="Telefono" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Foto Portada :</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto1">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Foto Vista :</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto2">
                            </div>
                        </div>                       
                        <div class="mb-3 row">                                   
                            <div class="box-footer">
                                <center>
                                    <button class="btn btn-success" name="nuevo" type="submit">Registrar Negocio</button>
                                    <button class="btn btn-danger" name="cancelar" type="submit">Cancelar</button>   
                                </center>                                      
                            </div>
                        </div>
                    </form>                              
                </div>
            </div>             
        </div>
        <div class="col-md-2">
            <div class="row" style="margin-right: 2px;margin-left: 2px; margin-top: 30px;margin-bottom: 10px">
                <div class="col col-lg-12 rounded-3" style="background:#0F1E23">
                    <h4 class="text-white"><i class="fas fa-house-user"></i> Mis Acciones</h4>
                    <h5 class="text-white"><a href="registrarNegocio.php"> Crear Nuevo </a></h5>
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



