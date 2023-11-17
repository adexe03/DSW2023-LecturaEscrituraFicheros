<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Lista de Productos</h1>
  <table border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $filename = 'productos.csv';
      if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
          echo '<tr>';
          foreach ($data as $value) {
            echo '<td>' . $value . '</td>';
          }
          echo '</tr>';
        }
        fclose($handle);
      }
      ?>
    </tbody>
  </table>

  <h2>Agregar Producto</h2>
  <form action="addProduct.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" required><br><br>
    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" required><br><br>
    <input type="submit" value="Agregar Producto">
  </form>
</body>

</html>