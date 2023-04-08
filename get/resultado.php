<style>
   .bonito{
    font-family:"Comic Sans MS";
    color:coral;
    animation: anim1 2s infinite alternate;
    display:inline-block;
   } 

@keyframes anim1{
    0%{ rotate:-30deg;}
    100%{rotate:30deg;}
}

.noalumno, .alumno{
    padding:20px;
    border-radius:20px;
    text-align: center;
}

.noalumno{ background: lightseagreen;}
.alumno{ background: tomato;}

</style>


<?php
$nombre = $_GET["nombre"];
$nombreAnim =  "<div class='bonito'>".$nombre."</div>";
$telefono = $_GET["telefono"];
?>

<h1>Bienvenid@ <?php echo $nombreAnim;?></h1>


<p>Tu teléféfono es el <?php echo $telefono ?> </p>
<p>Hola <?php echo $nombreAnim;?>, bienvenid@.</p>
<p>Estamos encantados de tenerte aquí.</p>
<p>Esta semana <?php echo $nombreAnim;?> hemos preprado unas ofertas especiales para ti.</p>


<?php

    if(($nombre != 'Alejandro') && ($nombre != 'Bea') && ($nombre != 'Richard')){
        echo "<p class='noalumno'>Vente pal curso ho! a aprender PHP y comer bizcocho</p>";
    }
    else{
        echo "<p class='alumno'> dejad de comer bizcocho y practicar PHP</p>";
    }



?>
