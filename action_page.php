<HTML>
<HEAD>

</HEAD>
<BODY>

<?php
$nombre = $_POST["uname"];
$mail= $_POST["mail"];
$texto= $_POST["texto"];


if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $mail)){
    echo'<script type="text/javascript"> alert("Mensaje no enviado porque el mail contiene caracteres invalidos");</script>';
    echo'<script type="text/javascript"> window.location.href = "contacto.html";</script>';
}else{
    
}


if (empty($nombre) or empty($mail) or empty($texto) ){
    
    echo'<script type="text/javascript"> alert("Mensaje no enviado");</script>';
}  else{
    echo'<script type="text/javascript"> alert("Mensaje  enviado");</script>';
    echo'<script type="text/javascript"> window.location.href = "index.html";</script>';
} 


?>



</BODY>
</HTML>