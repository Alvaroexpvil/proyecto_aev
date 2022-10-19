<?php


    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Apellido: " . $apellido . "</p>";
        echo "<p>Edad :" . $edad . "</p>";
    }



?>
