<?php
  $conn = mysqli_connect('localhost', 'root', 'root', 'GuaridaPerruna');

  if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  //echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;
  //echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

  //mysqli_close($conn);
  return $conn;
?>
