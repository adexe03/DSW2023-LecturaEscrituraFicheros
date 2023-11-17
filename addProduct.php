<?php
$filename = 'productos.csv';
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$file = fopen($filename, 'a');
fwrite($file, $nombre . ';' . $precio . ';' . $stock . "\n");
fclose($file);

include "products.php";
