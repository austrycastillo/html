<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$comentarios=$_POST['comentarios'];
//a quien le envìo el correo
$para="castilloaustry@gmail.com";
$asunto="Contacto desde web";
//cuerpo
$cuerpo="<h1 style=color:red>Contacto web</h1>Nombre: ".$nombre."<br>Correo: 
        ".$correo."<br>Comentarios: ".$comentarios."<br><br>Chaito";
//termina cuerpo
$cabecera = "From:" . $para . "\r\n";
    $cabecera.= "MIME-Version: 1.0\r\n";
    $cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
if(mail($para,$asunto,$cuerpo,$cabecera)){
    echo "Correo enviado correctamente";
}else{
    echo "Error, no puedo enviar el correo";
}

?>
