<?php  include("cabecera.php"); ?>
<?php  include("conexion.php"); ?>
<?php
$objConexion= new conexion();
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `Descripcion`) VALUES (NULL, 'Proyecto 1', 'imagen.jpg', 'Proyecto nuevo');";
$objConexion->ejecutar($sql);

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">
    <form action="portafolio.php" method="post">
<br/>
Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
<br/>
Imagen del Proyecto: <input class="form-control" type="file" name="archivo" id="">
<br/>
<input class="btn btn-success" type="submit" value="Enviar Proyecto">


</form>
    </div>
    
</div>
        </div>
        <div class="col-md-6">
            
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>3</td>
            <td>Aplicacion web</td>
            <td>imagen.jpg</td>
        </tr>
        
    </tbody>
</table>

        </div>
        
    </div>
</div>

















<?php  include("pie.php"); ?>
