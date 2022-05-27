<?php
require_once '../conexion.php';

    $id_usuario=$_GET['idusuario'];
     $sql="DELETE FROM usuarios WHERE id_usuarios='$id_usuario'";
      $resultado=mysqli_query($conexion,$sql);
      if ($resultado) {
          echo '<p>eliminado con exito</p>';
          echo '<a href="../views/homeadmin.php">regresar</a>';
      }else {
          echo 'error';
      }

?>