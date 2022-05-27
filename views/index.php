<?php
if (isset($_SESSION['user'])) {
    header("Location: ../views/homeadmin.php");
}else{ 
    require_once 'header.php';
?>
 <div class="content contentindex">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">iniciar sesion</h5>
                        <p class="card-text"></p>
                        <a href="login.php" class="btn btn-primary col-12">ir</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registro</h5>
                        <p class="card-text"></p>
                        <a href="registro.php" class="btn btn-primary col-12">ir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once 'footer.php';
}?>