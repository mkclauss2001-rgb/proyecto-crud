<?php include("conexion.php"); ?>
<?php
$id = $_GET['id'];
$usuario = $conexion->query("SELECT * FROM usuarios WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Editar Usuario</title></head>
<body>
  <h2>Editar Usuario</h2>
  <form method="POST">
    Nombre: <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>"><br>
    Correo: <input type="email" name="correo" value="<?= $usuario['correo'] ?>"><br>
    Edad: <input type="number" name="edad" value="<?= $usuario['edad'] ?>"><br>
    <input type="submit" value="Actualizar">
  </form>

  <?php
  if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $conexion->query("UPDATE usuarios SET nombre='$nombre', correo='$correo', edad='$edad' WHERE id=$id");
    echo "Usuario actualizado. <a href='index.php'>Volver</a>";
  }
  ?>
</body>
</html>
