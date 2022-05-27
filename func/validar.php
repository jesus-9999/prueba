<?php
require_once '../conexion.php';

      $user=$_POST['user'];
      $password=$_POST['password'];
      $sql="SELECT * FROM usuarios WHERE user='$user' AND password='$password'";
      $resultado=mysqli_query($conexion,$sql);
      if (mysqli_num_rows($resultado)==0) {
          echo '<p>usuario o contraseña incorrectos</p>';
          echo '<a href="../views/login.php">regresar</a>';

      }else {
        $rows=mysqli_fetch_array($resultado);
        echo $rows[7];

         if ($rows[7]=='admin') {
        
            session_start();
            $_SESSION['user'] = $rows[5];

            header("Location: ../views/homeadmin.php");
           
         }else {
           
            header("Location: ../views/homeuser.php");
         }
       
      }

?>