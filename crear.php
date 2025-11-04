<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head><title>Agregar Usuario</title></head>
<body>
  <h2>Nuevo Usuario</h2>
  <form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Correo: <input type="email" name="correo"><br>
    Edad: <input type="number" name="edad"><br>
    <input type="submit" value="Guardar">
  </form>

  <?php
  if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $conexion->query("INSERT INTO usuarios (nombre, correo, edad) VALUES ('$nombre', '$correo', '$edad')");
    echo "Usuario agregado. <a href='index.php'>Volver</a>";
  }
  ?>
</body>
</html>
