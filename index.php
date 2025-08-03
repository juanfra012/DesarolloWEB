<?php
include 'conexion.php';

// Aquí puedes realizar consultas a la base de datos utilizando $conn

?>
<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda - productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
<seccion class="section">
    <div class="container">
        <h1 class="title">Productos</h1>
        <a class="button is-primary" href="crear.php">Crear producto</a>
<table class="table is-fullwidth is-striped-is-hoverable">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Acciones</th>
</tr>
</thead>
</tbody>
<?php
// Realizar una consulta a la base de datos para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($producto = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $producto['id'] . "</td>";
        echo "<td>" . $producto['nombre'] . "</td>";
        echo "<td>" . $producto['precio'] . "</td>";
        echo "<td>" . $producto['cantidad'] . "</td>";
        echo "<td>";
        echo "<a class='button is-info' href='editar.php?id=" . $producto['id'] . "'>Editar</a>";
        echo "<a class='button is-danger' href='eliminar.php?id=" . $producto['id'] . "'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron productos</td></tr>";
}
?>
</tbody>
</table>
    </div>
</seccion>
 </body>
 <<footer class="footer">
   <div class="content has-text-centered">
     <p>
       <strong>Echo </strong> by <a href="https://jgthms.com">juanito polla</a>. The source code is licensed
       <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
       is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
     </p>
   </div>
 </footer>
</html>