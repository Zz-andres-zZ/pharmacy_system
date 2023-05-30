

<?php

include("conexion.php");

   @$name = trim($_POST['name']);
   @$email = trim($_POST['email']);
   @$direction = trim($_POST['direction']);
   @$phone = trim($_POST['phone']);
   @$password = trim($_POST['password']);
   @$P = password_hash($password,PASSWORD_BCRYPT);
   @$fecha = date("d/m/y");

   if(empty($name) || empty($email) || empty($direction) || empty($phone) || empty($password))
   {
    echo "Rellene todos los campos";
     
    exit();
   }


     $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
             VALUES('$name', '$email', '$direction', '$phone', '$P',CURDATE())";
    $resultado = mysqli_query($conex, $consulta);
  
    if("$resultado")
    {
        header("location:login/index.php");

    }




?>