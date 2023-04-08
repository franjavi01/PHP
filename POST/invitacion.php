<?php

$nombre1 =  $_POST['nombre1'];
$nombre2 =  $_POST['nombre2'];
$lugar =    $_POST['lugar'];
$frase =    $_POST['frase'];
$fecha =    $_POST['fecha'];

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de boda digital de Nombre1 & Nombre2</title>
    <link rel="stylesheet" href="bodorrio.css">
</head>
<body>
    
    <main>
        <img src="https://images.unsplash.com/photo-1564986021890-6f721f19c210?crop=entropy&cs=srgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODA2Mjc1MDk&ixlib=rb-4.0.3&q=85" alt="">
        <h1><?php echo $nombre1; ?> & <?php echo $nombre2; ?></h1>
        <h2><?php echo $frase; ?></h2>
        <p>El Próximo Día <?php echo $fecha; ?>, <?php echo $nombre1; ?> y <?php echo $nombre2; ?> celebrarán una ceremonia nupcial en <?php echo $lugar; ?></p>
     
        <p>Esperando su asistencia y regalos de los caros, muy cordianlmente:</p>
        <p><?php echo $nombre1; ?> y <?php echo $nombre2; ?></p>
    </main>

</body>
</html>