<?php

$db = mysqli_connect('localhost', 'root', 'roro123', 'appsalon');

if(!$db) {
  echo "Fallo de Conexion";
  exit;
} else {
  echo "Conexion Exitosa";
}