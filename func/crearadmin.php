<?php
require_once '../conexion.php';

      $nombres_usuarios=$_POST['nombres_usuarios'];
      $apellidos_usuarios=$_POST['apellidos_usuarios'];
      $edad=$_POST['edad'];
      $fechaRegistro_usuarios=$_POST['fechaRegistro_usuarios'];
      $user=$_POST['user'];
      $password='123';
      $rol=$_POST['rol'];
      $sql="CALL registro('$nombres_usuarios','$apellidos_usuarios','$edad','$fechaRegistro_usuarios','$rol','','$user', '$password')";
      $resultado=mysqli_query($conexion,$sql);
      if ($resultado) {
          echo '<p>registrado con exito</p>';
          echo '<a href="../views/homeadmin.php">regresar</a>';
      }else {
          echo 'error';
      }

?>