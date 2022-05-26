<?php require_once 'header.php'; ?>
<div class="container col-6">
    <h1>Registro</h1>
    <form action="../func/crear.php" method="POST">
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
        <a href="index.php" class="btn btn-danger">ir al inicio</a>
    </form>

</div>

<?php require_once 'footer.php'; ?>