<?php

function obtener_servicios() {
  try {
    // 1. Importar las
    require 'database.php';

    // 2. Consulta SQL
    $sql = "SELECT * FROM servicios;";

    // 3. Realizar la consulta
    $consulta = mysqli_query($db, $sql);

    // 4. Acceder a los resultados
    echo "<pre>";
    var_dump(mysqli_fetch_assoc($consulta));
    echo "</pre>";

    // 5. Cerrar la conecion (opcional)
    // $resultado = mysqli_close($db);
    // echo $resultado;
    
  } catch (\Throwable $th) {
    var_dump($th);
  }
}

obtener_servicios();