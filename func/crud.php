<?php
require_once '../conexion.php';


  
      $sql="SELECT id_usuarios, nombres_usuarios, apellidos_usuarios, edad, fechaRegistro_usuarios, rol_usuarios FROM usuarios";
      $resultado=mysqli_query($conexion,$sql);

     while($rows=mysqli_fetch_array($resultado)){

        }




?>