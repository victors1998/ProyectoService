<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row rounded-3" style="margin-right: 5px;margin-left: 50px; margin-top: 30px;margin-bottom: 30px; background:#0F1E23">
                <hr width=100%  align="right" size=0>
                <h4 class="text-white"><i class="fas fa-edit"></i> Registrar Productos</h4>
                <div class="col-lg-12">                   
                    <form method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Servicio :</label>
                            <div class="col-sm-6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Seleccione Servicio
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="text-white col-sm-4 col-form-label font-weight-bold">Nombre Producto :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Descripci??n :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="userName" placeholder="Cree nombre de usuario" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="text-white col-sm-4 col-form-label font-weight-bold">Imagen :</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="dni" placeholder="Ingrese su DNI" >
                            </div>
                        </div>                                            
                        <div class="mb-3 row">                                   
                            <div class="box-footer">
                                <center>
                                    <button class="btn btn-success" name="nuevo" type="submit">Registrar Producto</button>
                                    <button class="btn btn-danger" name="cancelar" type="reset">Cancelar</button>   
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
                    <h5 class="text-white"><a href="registrarServicios.php"> A??adir Servicios</a></h5>
                    <h5 class="text-white"><a href="registrarProductos.php"> A??adir Productos</a></h5> 
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





