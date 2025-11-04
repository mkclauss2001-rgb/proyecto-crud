<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <h1>Usuarios Registrados</h1>
  <a href="crear.php">Agregar nuevo usuario</a>
  <table>
    <tr><th>Nombre</th><th>Correo</th><th>Edad</th><th>Acciones</th></tr>
    <?php
    $resultado = $conexion->query("SELECT * FROM usuarios");
    while ($fila = $resultado->fetch_assoc()) {
      echo "<tr>
        <td>{$fila['nombre']}</td>
        <td>{$fila['correo']}</td>
        <td>{$fila['edad']}</td>
        <td>
          <a href='editar.php?id={$fila['id']}'>Editar</a> |
          <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
