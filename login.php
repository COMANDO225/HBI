<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/hbi.ico">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="plugins/sweetAlert2/sweetalert2.min.css">
    <title>HBI - Iniciar Sesión</title>
</head>
<body>
    <section>
        <div class="wrapper">
            <div class="container">
                <div class="user">
                    <img src="" alt="">
                </div>
                <form id="formLogin" action="" method="post">
                    <div class="inputs" data-validate = "Usuario incorrecto">
                        <input type="text" name="usuario" id="usuario" required>
                        <label for="usuario">Usuario</label>
                        <span class="linea"></span>
                    </div>
                    <div class="inputs" data-validate="Password incorrecto">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Contraseña</label>
                        <span class="linea"></span>
                    </div>
                    <div class="boton">
                        <input type="submit" name="submit" value="Iniciar Sesión">
                        <span class="overlay"></span>
                    </div>
                    <div class="olvidar"><a href="index.php">Regresar a la pagina principal</a></div>
                </form>
            </div>
        </div>
    </section> 
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script> -->
    <script src="js/jquery.min.js"></script>
    <script src="plugins/popper/popper.min.js"></script>
    <script src="plugins/sweetAlert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>
</html>