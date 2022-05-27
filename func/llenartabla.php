<?php
require_once '../conexion.php';


      $sql="SELECT * FROM usuarios  ORDER BY nombres_usuarios ASC";

      $cantidaduroladmin="SELECT * FROM usuarios  WHERE rol_usuarios='admin'";
      $cantidadurolestandar="SELECT * FROM usuarios  WHERE rol_usuarios='estandar'";
      
      $resultado=mysqli_query($conexion,$sql);

    //cantidad de admins y standars
      $resultadoadmin=mysqli_query($conexion,$cantidaduroladmin);
      $resultadoestandar=mysqli_query($conexion,$cantidadurolestandar);
      $resultadoadmin=mysqli_num_rows( $resultadoadmin);
      $resultadoestandar=mysqli_num_rows($resultadoestandar);

      

?>