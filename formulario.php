<?php

$nombre=$_POST['Nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$headers="from: ".$correo."\r\n";
$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";
mail('gerevera724@gmail.com','contacto desde mi formulario',$mensaje,$headers);
echo'
<head>
<style>
body {
    font-family: Arial, sans-serif;
}
.mensaje {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
}
</style>
</head>
<body>
    <div class="mensaje">
        El correo ha sido enviado con éxito.
    </div>
</body>

';
?>