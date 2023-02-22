<?php
if (isset($_GET['mensaje'])) {
  $mensaje = $_GET['mensaje'];
  // Aquí puede hacer algo con el mensaje recibido, como guardarlo en una base de datos o mostrarlo en la página web.
  echo "Mensaje recibido: $mensaje";
} else {
  echo "No se ha recibido ningún mensaje.";
}
?>