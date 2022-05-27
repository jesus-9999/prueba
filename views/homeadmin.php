<?php require_once 'header.php';

?>
<a class="btn btn-danger" href="../func/logout.php" >cerrar sesion</a><br>
<?php
if (session_start()) {
?>
    <h1><?php echo $_SESSION['user'];
        include_once '../func/llenartabla.php';

        ?></h1>
   <p>cantidad de admins<?php echo '-'.$resultadoadmin;?></p>
   <p>cantidad de admins<?php echo '-'.$resultadoestandar;?></p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombres y apellidos</th>
                <th scope="col">edad</th>
                <th scope="col">fecha</th>
                <th scope="col">user</th>
                <th scope="col">rol</th>
                <th scope="col">accion</th>                
            </tr>
        </thead>
        <tbody>
            <?php
 
            while ($rows = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $rows[0];?></th>
                    <td><?php echo $rows[1].' '.$rows[2];?></td>
                    <td><?php echo $rows[3];?></td>
                    <td><?php echo $rows[4];?></td>
                    <td><?php echo $rows[5];?></td>
                    <td><?php echo $rows[6];?></td>
                    <td><a class="btn btn-danger" href="../func/eliminarTabla.php?idusuario=<?php echo $rows[0];?>" >eliminar</a></td>
                </tr>
        
            <?php  } ?>
        </tbody>
    </table>
    <div class="container col-6">
    <h1>Registro</h1>
    <form action="../func/crearadmin.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">nombres</label>
            <input type="text" class="form-control" id="nombres_usuarios" name="nombres_usuarios" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">apellidos</label>
            <input type="text" class="form-control"  id="apellidos_usuarios" name="apellidos_usuarios" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">edad</label>
            <input type="number" class="form-control"  id="edad" name="edad" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">fecha</label>
            <input type="text" class="form-control"  id="fechaRegistro_usuarios" name="fechaRegistro_usuarios" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">nombre usuario</label>
            <input type="text" class="form-control"  id="user" name="user" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">password</label>
            <input type="password" class="form-control"  id="password" name="password" aria-describedby="textHelp">

        </div>
        <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">rol</label>
        <select class="form-select" id="rol" name="rol" aria-label="Default select example">
            <option selected>rol</option>
            <option value="admin">admin</option>
            <option value="estandar">estandar</option>
        </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>

</div>


<?php require_once 'footer.php';
} else {
    echo "<p>usuarion no registrado</p>";
}
?>