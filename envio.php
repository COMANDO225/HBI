<?php

if(isset($_POST['enviar'])) {
    if(!isEmpty($_POST['names']) && !isEmpty($_POST['phone']) && !isEmpty($_POST['email']) && !isEmpty($_POST['mensaje'])){
        $nombre = $_POST['names'];
        $correo = $_POST['phone'];
        $telefono = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $carta = "De: $nombre \n";
        $carta .= "Correo: $correo \n";
        $carta .= "Teléfono: $telefono \n";
        $carta .= "Mensaje: $mensaje";

        $mail = mail($destinatario, $asunto, $carta);
        if ($mail) {
            echo "<h4>Mail enviado de forma exitosa</h4>";
            header('Location:comercial.php');
        }
    }
}

?>
