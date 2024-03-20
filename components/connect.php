<?php
   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $db = "blog_db";
   $puerto = "3307";

   $conn = new PDO("mysql:host=" . $servidor . ";dbname=" . $db . ";port=" . $puerto, $usuario, $clave);

?>