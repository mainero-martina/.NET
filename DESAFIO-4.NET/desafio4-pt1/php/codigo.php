<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = htmlspecialchars($_POST['usuario']);
        $contrasena = htmlspecialchars($_POST['contrasena']);
        echo "Hola, tu nombre es " . $usuario . " y tu contraseña es " . $contrasena;
    } else {
        echo "Por favor, envía el formulario.";
    }
?>