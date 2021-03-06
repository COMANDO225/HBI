<?php
    include_once './database/conexion.php';
    $consulta = "SELECT * FROM noticias";
    $statement = $conexion->prepare($consulta);
    $statement->execute();
    $resultado = $statement->fetchAll();
    $length = 5;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/hbi.ico">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Hidrobombeo Ingenieros SAC</title>
</head>

<body>
    <section class="header">
        <div class="hero-carousel-container">
            <div class="hero-carousel owl-carousel">
                <div class="hero-item" style="background-image: url(images/slider_1.jpg);">
                    <div class="hero-leyenda-container">
                        <div class="hero-leyenda">
                            <div class="leyenda-titulo">
                                <h2>PENSAMOS Y AYUDAMOS EN EL ÉXITO DE TU PRODUCTIVIDAD</h2>
                            </div>
                            <div class="leyenda-contenido">
                                <p>Desde 1997 Hidrobombeo Ingenieros S.A.C. ha proporcionado soluciones</p>
                            </div>
                            <div class="hero-leyenda-btn">
                                <a href="#">Entérate más <span class="fi-rs-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item" style="background-image: url(images/slider_6.jpg);">
                    <div class="hero-leyenda-container">
                        <div class="hero-leyenda">
                            <div class="leyenda-titulo">
                                <h2>AHORA QUE HAGO :( ? </h2>
                            </div>
                            <div class="leyenda-contenido">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ratione ex quo,
                                    neque quas voluptates porro sit</p>
                            </div>
                            <div class="hero-leyenda-btn">
                                <a href="#">Entérate más <span class="fi-rs-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item" style="background-image: url(images/slider_5.jpg);">
                    <div class="hero-leyenda-container">
                        <div class="hero-leyenda">
                            <div class="leyenda-titulo">
                                <h2>A MIMIRR</h2>
                            </div>
                            <div class="leyenda-contenido">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ratione ex quo,
                                    neque quas voluptates porro sit</p>
                            </div>
                            <div class="hero-leyenda-btn">
                                <a href="#">Entérate más <span class="fi-rs-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-item" style="background-image: url(images/slider_4.jpg);">
                    <div class="hero-leyenda-container">
                        <div class="hero-leyenda">
                            <div class="leyenda-titulo">
                                <h2>Industrias</h2>
                            </div>
                            <div class="leyenda-contenido">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ratione ex quo,
                                    neque quas voluptates porro sit</p>
                            </div>
                            <div class="hero-leyenda-btn">
                                <a href="#">Entérate más <span class="fi-rs-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="nav-container">
                <div class="btn-menu"><span class="fas fa-bars"></span></div>
                <div class="logo-container">
                    <a href="index.php" class="logo"><svg id="Capa_1" width="160" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1006.48 209.08"><defs><style>.cls-1{fill:#fff;}</style></defs><title>hbi-blanco</title><path class="cls-1" d="M221.25,218.36a23.34,23.34,0,0,0,2.61.35c3,0,5.93,0,8.9,0,1.85,0,2,.18,2.16,2,.19,2.58.41,5.17.41,7.76q0,72.09,0,144.2c0,15.5.09,31,.12,46.5a33,33,0,0,1-.18,4.22c-.25,1.92-1.19,3.38-3.29,3.65a29.42,29.42,0,0,1-4.19.3c-7.26-.1-14.52-.32-21.79-.37-3.78,0-7.55.28-11.33.35a23,23,0,0,1-4-.36,2.71,2.71,0,0,1-2.29-2.42,24.11,24.11,0,0,1-.43-4q.09-25.25.25-50.5c0-.74,0-1.48,0-2.23V224.15a15.67,15.67,0,0,0-.09-2.66,13.27,13.27,0,0,0-.79-2.24c.18-.28-.44-.93.44-.9,1.19,0,2.38,0,3.56,0Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M371.4,218.93c1.08-.09,1.87-.2,2.67-.2q37.28,0,74.55,0a15.85,15.85,0,0,1,3.92.61c4,1.05,8,2.09,12,3.31,11.78,3.64,21.29,10.61,29,20.07a62.43,62.43,0,0,1,13.71,31.39A60.11,60.11,0,0,1,501.63,310c-2.19,4.38-1.79,7.85,1.52,11.5,8.38,9.22,13.92,20,15.6,32.39,3.55,26.09-5.24,47.23-26.66,62.78a57.45,57.45,0,0,1-24.45,10.07,32.54,32.54,0,0,1-5.32.28q-33.6,0-67.21.07c-4.74,0-9.49.2-14.23.24a46.1,46.1,0,0,1-5.76-.27c-2.64-.31-3.59-1.4-3.68-4.09-.06-1.78.07-3.56.08-5.34q0-13.23,0-26.47c0-1.93-.12-3.85-.09-5.78.06-3,1.23-4.33,4.18-4.34,9-.05,18.09.09,27.14.1q17.91,0,35.82-.07c5.41,0,10.83-.08,16.24-.06a20.67,20.67,0,0,0,7.39-1.35c6.55-2.48,10.81-8.45,10.43-16.44-.5-10.61-8.37-15.36-15.51-15.94-3.31-.27-6.65-.4-10-.4q-35.16,0-70.32.06c-.74,0-1.49,0-2.23,0-2-.12-2.78-.85-3.08-2.8a12.16,12.16,0,0,1-.06-2c.07-9.27.17-18.54.2-27.81,0-3-.16-6.08-.2-9.12a9.79,9.79,0,0,1,.22-2.42,2.73,2.73,0,0,1,2.79-2.39c1-.09,2.08-.08,3.11-.08,20.92,0,41.84.06,62.76,0a37,37,0,0,0,7.92-.88c10.67-2.4,18-16.58,8.21-27.23a19.09,19.09,0,0,0-7-5,12.32,12.32,0,0,0-4.32-.71q-26.14-.11-52.29-.09c-4.23,0-8.45.2-12.68.24a34.68,34.68,0,0,1-5.09-.29c-2.58-.36-3.6-1.51-3.68-4.16s0-5.49,0-8.23v-35Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M302.67,218.85c16.17.08,31.91-.31,47.87,0,0,1.66,0,3.05,0,4.43-.07,2.37-.24,4.74-.24,7.11q0,78.56-.06,157.11c0,10.23,0,20.47,0,30.71,0,1.55.21,3.1.31,4.65a8.93,8.93,0,0,1,.06,1.55c-.19,1.85-1,2.6-2.87,2.6-6,0-12,0-18,0-5.34,0-10.68,0-16,.11-1.93,0-3.85.21-5.77.28a9,9,0,0,1-2.21-.12c-1.81-.38-2.35-1.06-2.43-2.91,0-.81,0-1.63,0-2.44l.09-67.21c0-.81,0-1.63-.07-2.44-.26-3.48-2-5.26-5.56-5.37-2.81-.09-5.63.07-8.45.07-9.86,0-19.72,0-29.57,0-2.63,0-3.22-.64-3.19-3.38.09-8.6.24-17.2.34-25.8.06-4.67.08-9.35.11-14,0-3.43.65-4,4.16-3.94,3.26.07,6.52.13,9.79.13q13.13,0,26.25,0c.67,0,1.34,0,2,0,2.53-.12,3.67-1.19,3.71-3.72,0-3.7,0-7.41,0-11.12l-.12-33.6q-.06-14.81-.11-29.6C302.66,221.05,302.67,220.18,302.67,218.85Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M540.09,357.18V292.87c0-.59,0-1.18,0-1.78.11-2.81,1.1-3.9,4-3.95,2.59-.05,5.19.21,7.78.19,9.49,0,19-.15,28.46-.2a36.06,36.06,0,0,1,4.64.33,2.48,2.48,0,0,1,2.17,2.22,14.73,14.73,0,0,1,.3,2.64c0,4.23-.17,8.45-.18,12.68,0,9.12,0,18.24,0,27.37q0,36.15,0,72.31c0,5.41.13,10.82.2,16.23.06,4.87-.47,6.62-6.64,6.51-10.23-.18-20.46-.19-30.69-.23-1.7,0-3.4.2-5.1.23a15.21,15.21,0,0,1-2.42-.28,2.79,2.79,0,0,1-2.42-2.77,21.59,21.59,0,0,1-.07-2.67Q540.09,389.44,540.09,357.18Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M586.54,218.88c.18,1.85.46,3.38.47,4.92.09,9.34.12,18.67.16,28,0,3.49,0,7,0,10.45,0,.52,0,1.05,0,1.56-.15,1.49-.58,2-2,2.13a21.94,21.94,0,0,1-2.44.08c-9.11,0-18.23,0-27.35,0-3.63,0-7.25.15-10.88.19a11.58,11.58,0,0,1-2.19-.25,2.43,2.43,0,0,1-2.07-2.3,14.93,14.93,0,0,1-.07-2.22q-.09-20-.16-40v-1.11c0-1,.42-1.54,1.45-1.56.44,0,.88,0,1.33,0h41.14C584.68,218.73,585.48,218.82,586.54,218.88Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1012.89,285.26V282.7q0-8.9-.07-17.79c0-4.74,1.15-5.92,5.87-6,5.22,0,6.44,1.17,6.42,6.37,0,11-.09,21.95-.08,32.93a57,57,0,0,0,.45,6.39c.26,2.4-.29,3.23-2.67,3.6-1.61.26-3.22.54-4.84.71a8,8,0,0,1-7.87-3.5c-5.16-7.15-10.43-14.23-15.65-21.34-.18-.24-.36-.47-.55-.7-.42-.52-.79-1-1.64-.8s-1.11.85-1.11,1.66c0,5.92,0,11.85,0,17.78a36.55,36.55,0,0,1,0,3.77c-.19,2-1.1,2.74-3,2.78q-3.23,0-6.45,0c-2.09,0-3-.85-3.06-3-.07-3,0-6.07,0-9.11q0-14.91,0-29.82a36.64,36.64,0,0,0-.31-3.76c-.23-2.43.38-3.2,2.79-3.53,1.32-.18,2.64-.37,4-.61a7.78,7.78,0,0,1,8.46,3.49,206.48,206.48,0,0,0,16.91,21.2c.5.55,1,1.06,1.56,1.58C1012.1,285.16,1012.29,285.14,1012.89,285.26Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M699.85,361.1c-.05.7-.14,1.41-.14,2.11q0,10.46.08,20.92c0,.52,0,1,0,1.55-.17,2.08-1,3-3,3.09-2.3.1-4.6.07-6.9,0a2.69,2.69,0,0,1-2.77-2.63,19.8,19.8,0,0,1-.07-2.67c0-12,.09-24,.09-36.05a27.81,27.81,0,0,0-.4-4c-.37-2.62.23-3.51,2.84-3.92,1.9-.3,3.8-.64,5.71-.75a7.14,7.14,0,0,1,6.48,3.19q8,11,16,21.92c.81,1.12,1.68,2.08,3.53,1.86a16.27,16.27,0,0,0,.29-2.25c0-5.86-.13-11.72-.15-17.58a28,28,0,0,1,.32-4,2.9,2.9,0,0,1,2.06-2.41,11.47,11.47,0,0,1,7.41-.17,3.27,3.27,0,0,1,2.23,2.82,11,11,0,0,1,.08,2q0,18.14-.07,36.28c0,1.63.16,3.26.23,4.89.09,2.38-.31,2.94-2.59,3.3-1.75.27-3.52.44-5.29.58a7.41,7.41,0,0,1-7-3.46c-4.21-5.84-8.48-11.63-12.74-17.43q-2.24-3-4.52-6.06c-.34-.46-.76-.86-1.15-1.29Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M800.69,361a27.34,27.34,0,0,0-1.22,8.4c-.06,4.37.17,8.74.22,13.11a20.45,20.45,0,0,1-.26,3.75,2.69,2.69,0,0,1-2.72,2.46c-2.22.07-4.45.06-6.67,0a2.5,2.5,0,0,1-2.41-2,12.64,12.64,0,0,1-.39-3.06c.09-11.94.23-23.88.3-35.82,0-1.62-.35-3.24-.48-4.86-.22-2.57.18-3.07,2.77-3.53,1.46-.26,2.92-.52,4.39-.68a8.33,8.33,0,0,1,8.22,3.74c5,7.06,10.23,14,15.36,21a8.88,8.88,0,0,0,1.12,1.38,1.42,1.42,0,0,0,2.39-.76,5.27,5.27,0,0,0,.08-1.32q-.09-9.69-.18-19.36a9.44,9.44,0,0,1,.2-2,2.49,2.49,0,0,1,2.57-2.3c2.3-.1,4.6-.11,6.9-.05a2.6,2.6,0,0,1,2.75,2.38,16.26,16.26,0,0,1,.16,2.88c0,12.09-.1,24.19-.11,36.28,0,1.62.35,3.23.42,4.86.07,2-.45,2.71-2.43,3s-4,.49-6,.64c-2.93.22-5.09-1.12-6.79-3.45q-8.11-11.16-16.3-22.26C802.11,362.79,801.55,362.12,800.69,361Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M958.56,360.94a16.6,16.6,0,0,0-.2,1.85q0,10.68.07,21.35c0,.52,0,1,0,1.56-.14,2.25-.91,3-3.18,3.09-2.07.06-4.15.06-6.22,0-1.91-.06-2.63-.73-3-2.6a10.18,10.18,0,0,1-.22-2c.08-10.23.21-20.46.24-30.69,0-3.18-.23-6.35-.35-9.53,0-.81,0-1.63,0-2.44a1.91,1.91,0,0,1,1.61-1.88,59.58,59.58,0,0,1,5.92-.9,8.37,8.37,0,0,1,8,3.9c3.9,5.5,7.89,10.94,11.86,16.39,1.71,2.33,3.46,4.63,5.21,6.93.39.52.84,1,1.54,1.81a8.6,8.6,0,0,0,.47-1.83q0-11.11-.15-22.23c0-.45-.06-.89,0-1.33.13-2.51,1-3.29,3.43-3.29,1.85,0,3.71,0,5.56,0,2.14,0,3,.76,3.08,2.89s0,4.3,0,6.45q0,18.69,0,37.37c0,2.5-.31,2.81-2.76,2.9a36.47,36.47,0,0,0-3.76.34,7.63,7.63,0,0,1-7.91-3.28c-5.67-7.79-11.46-15.5-17.21-23.23-.45-.62-1-1.19-1.47-1.77Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1115.59,388c-3.82,1.05-7.23,1.41-10.69.49a11.62,11.62,0,0,1-6.42-4.16c-1.12-1.46-1.94-3.14-3-4.68-1.14-1.73-2.27-3.46-3.54-5.08a4.24,4.24,0,0,0-3.79-1.47c-2.37.16-3.37,1.09-3.4,3.48,0,2.59,0,5.19.09,7.78.11,3.14-.76,4.15-3.88,4.37-1,.07-2.06.23-3.1.32-3.35.32-4.94-.95-5-4.29s.08-6.82.07-10.23c0-9.94-.08-19.88-.1-29.81a20.13,20.13,0,0,1,.16-3.11,2.78,2.78,0,0,1,2.7-2.5h.22c6.9.08,13.79.12,20.68.27a27.43,27.43,0,0,1,5.72.68,14.73,14.73,0,0,1,10.53,8.76,20,20,0,0,1,1.78,7.74,14.34,14.34,0,0,1-5.49,11.86c-.63.53-1.3,1-1.91,1.53-1.94,1.75-2.12,3.09-.74,5.26.4.62.87,1.2,1.3,1.8Zm-24.07-25.72v.08c1.84-.17,3.69-.27,5.51-.54,3.12-.46,4.59-2.1,4.78-5.17s-1.2-5.42-4.15-5.92a53.07,53.07,0,0,0-9.26-.64c-2.17,0-3.22,1.27-3.76,3.44a11.46,11.46,0,0,0,.21,5.93,3.56,3.56,0,0,0,3.77,2.81C1089.59,362.33,1090.55,362.31,1091.52,362.31Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M970.61,283.72c0,10.52-7,20.35-17.44,24.37-15.85,6.1-33.67-4.87-35.84-21.07-1.16-8.6,1.95-15.89,8.29-21.76a25.58,25.58,0,0,1,17.34-7c13.68-.21,24.7,8.81,27.1,20.86C970.37,280.61,970.43,282.17,970.61,283.72Zm-12.91.72a14.57,14.57,0,0,0-3.92-10.71,12.73,12.73,0,0,0-10.45-4.57,14.9,14.9,0,0,0-13,19.29c2.19,6.63,8.15,10.55,14.4,10A13.91,13.91,0,0,0,957.7,284.44Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M737.88,283.9c.07,10.87-7.6,21.09-18.51,24.59-15.65,5-31.73-5.49-34.39-20.39-1.7-9.57,1.74-17.52,9.13-23.71a25.75,25.75,0,0,1,18.51-6.21c12.71.73,23.59,10,25.24,23.05A19.81,19.81,0,0,1,737.88,283.9Zm-12.64.21c0-7.81-5.7-15-13.94-14.95s-14.15,7.48-14.21,14.59a14.37,14.37,0,0,0,14.19,14.72C720.08,298.52,725.1,291.22,725.24,284.11Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M917.85,388.84H902.94a17.63,17.63,0,0,1-1.78,0c-1.77-.19-2.51-.91-2.71-2.64a13.3,13.3,0,0,1-.06-1.55c0-7.79.14-15.58,0-23.37-.06-3.55-.65-7.08-.89-10.63a33.87,33.87,0,0,1,.07-5.33c.37-3.71,2.52-5.91,6.15-6.59,3.1-.59,6.18-.27,9.29-.11,6.22.34,12.45.4,18.67.57.89,0,1.78-.05,2.67,0a2.83,2.83,0,0,1,3,2.7,22,22,0,0,1,0,4.87,3.49,3.49,0,0,1-3.42,3.22,26.39,26.39,0,0,1-2.67,0l-15.79-.05a18.32,18.32,0,0,0-2.22.09,2.85,2.85,0,0,0-2.52,2.19,7,7,0,0,0-.26,2c0,2.57,1.09,3.67,3.65,3.68,4.75,0,9.5,0,14.24,0,1,0,1.94-.06,2.9,0,1.9.13,3.15,1,3.41,2.89a19.86,19.86,0,0,1,.05,5.28c-.27,2.18-1.43,3.08-3.63,3.11-3.41,0-6.82,0-10.23,0-2.23,0-4.46,0-6.68,0-2.47,0-3.46,1-3.74,3.47-.36,3.25,1,5.1,4.24,5.12,6.15.06,12.31,0,18.46-.21,3-.09,4.26.86,4.27,3.92,0,1.55,0,3.12,0,4.67-.08,1.73-.86,2.51-2.61,2.7a19,19,0,0,1-2,0H917.85Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1045.26,339.12c5.27,0,10.53,0,15.8,0,2.19,0,3.19.8,3.44,3a20.49,20.49,0,0,1-.09,5.07c-.27,1.88-1.27,2.64-3.19,2.78-.88.07-1.78,0-2.67,0l-12.44,0c-1.26,0-2.51-.11-3.77-.11a17.94,17.94,0,0,0-2.43.18,2.58,2.58,0,0,0-2.28,2.13,8.59,8.59,0,0,0-.25,2.42c.12,2.35,1.11,3.32,3.52,3.33,5.34,0,10.68,0,16,0,.66,0,1.33-.05,2,0,1.86.11,2.65.87,2.74,2.78s.13,3.56.06,5.34c-.09,2.3-1,3.17-3.35,3.18-5.19,0-10.38,0-15.57,0h-1.12c-1.51,0-3.1-.05-3.85,1.57a6,6,0,0,0,.12,5.57c.73,1.35,2.16,1.49,3.5,1.53,1.85.06,3.7,0,5.56,0,4.44-.08,8.89-.15,13.33-.27,2.73-.08,4.11.95,4.25,3.65a26.23,26.23,0,0,1-.25,5.31c-.25,1.68-1,2.21-2.72,2.38a10.31,10.31,0,0,1-1.11.05c-6.08,0-12.16-.15-18.24-.09-2.44,0-4.86.5-7.3.62a23.25,23.25,0,0,1-5.28-.18,5.4,5.4,0,0,1-4.75-5.36,34.53,34.53,0,0,1,.08-6.43,71.75,71.75,0,0,0,.47-10.87c-.15-3.47.1-7,.1-10.45s-.13-7.26-.17-10.89a19,19,0,0,1,.13-3.11c.35-2.09,1.34-2.93,3.48-3s4.15,0,6.23,0h10Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1035,287c.13-4.18.33-7.81.32-11.44,0-2.89-.27-5.77-.39-8.66a18.9,18.9,0,0,1,0-3.53c.44-2.86,2-4.3,5-4.38s5.78.07,8.67.08q8.22,0,16.44,0c1.93,0,3.86-.12,5.78-.08,2.27.05,3.22,1,3.29,3.28.06,1.77,0,3.56-.08,5.33a2.51,2.51,0,0,1-2.64,2.68c-.44,0-.89,0-1.33,0-5.19,0-10.37,0-15.55,0-1.11,0-2.22-.12-3.33-.17a2.88,2.88,0,0,0-3.37,2.74,8.46,8.46,0,0,0-.06,1.33c.06,2.69,1.22,3.78,3.86,3.68,1.56-.06,3.11-.1,4.67-.11,3.7,0,7.4-.06,11.1-.05,3.51,0,4.79,1.28,4.91,4.82,0,.59,0,1.18,0,1.78-.11,4.11-2.08,4.55-4.89,4.57-4.66,0-9.33-.15-14-.24l-.66,0c-5-.19-5.42,2.52-4.85,6.31a2.79,2.79,0,0,0,2.53,2.46,18.16,18.16,0,0,0,2.42.23c5.12,0,10.24,0,15.35-.06.59,0,1.19,0,1.78,0,3.14.13,4.24,1.16,4.43,4.31a13.13,13.13,0,0,1-.24,3.31c-.46,2.36-1.54,3.31-4,3.37-2.81.06-5.63-.05-8.45-.06h-15.33c-2.07,0-4.15.09-6.22.08-3.93,0-5.21-1.34-5.19-5.2C1035.06,297.75,1035,292.11,1035,287Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M639.67,364.07V343.82c0-.3,0-.6,0-.89.12-2.95,1-3.81,3.94-3.81,8,0,16,0,24,.06,2.52,0,5-.07,7.57-.05s3.46.89,3.52,3.46c0,1.33,0,2.67,0,4-.08,2.47-1,3.37-3.39,3.37-2.07,0-4.14-.22-6.22-.23-4.37,0-8.74,0-13.11.08-3.59,0-5.36,2.52-4.29,6a2.64,2.64,0,0,0,2.6,2q6.45.11,12.89.13c1.71,0,3.41-.16,5.12-.13,2,0,3,.76,3.38,2.8a20.41,20.41,0,0,1,.24,5.29c-.23,2.32-1.48,3.23-4,3.24-5.12,0-10.24,0-15.35,0-.6,0-1.19,0-1.78,0-1.89.07-2.92.91-3.18,2.74a11.64,11.64,0,0,0,0,2.89,3,3,0,0,0,3.19,3.05c6.52,0,13-.05,19.56-.27,3.06-.1,4.34.81,4.38,3.8,0,1.41,0,2.82,0,4.23-.08,2.22-.82,3.05-3,3.42a8,8,0,0,1-1.55.09l-28.47-.21c-1.11,0-2.23,0-3.33-.07a2.48,2.48,0,0,1-2.61-2.48,14.81,14.81,0,0,1-.1-2q0-10.12,0-20.24Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M877.89,360.36h6.89a14.88,14.88,0,0,1,1.77.07c1.64.22,2.69,1.09,2.74,2.7.14,5.56.18,11.14-1.93,16.44-2.48,6.23-7.37,9.3-13.82,10a33.4,33.4,0,0,1-11-.68,26.88,26.88,0,0,1-20.45-23.1,21,21,0,0,1,1.82-10.86c4.3-9.56,11.64-15,22.14-16.27a29.73,29.73,0,0,1,15.4,2.24,17.89,17.89,0,0,1,6.17,4.28c1.35,1.44,1.22,2.22-.27,3.47a23.31,23.31,0,0,0-2.8,2.82c-2.31,2.77-3.56,3.06-6.67,1.3a25.29,25.29,0,0,0-7.17-2.9,11.38,11.38,0,0,0-9.48,2,15.81,15.81,0,0,0-6.46,10.76,11,11,0,0,0,.32,4.39c1.53,5.3,4.78,9.17,10.1,11a12.71,12.71,0,0,0,9.91-.95,4.1,4.1,0,0,0,2.4-3c.59-3.31-1.28-4.56-3.44-4.41a34.06,34.06,0,0,1-3.78,0,3.15,3.15,0,0,1-3.35-3.13,13.48,13.48,0,0,1,0-1.56c0-3.87,1.17-4.7,4.6-4.45,2.14.15,4.3,0,6.45,0Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1142.26,388.26c.24-.76.39-1.32.6-1.85Q1150.42,367,1158,347.7a33,33,0,0,1,2.69-5.34,7.5,7.5,0,0,1,6.92-3.7c1.85.07,3.69.27,5.53.43a3.74,3.74,0,0,1,3.28,2.61q8.43,20.69,16.9,41.36c.77,1.87.48,3.78.36,6-1.2,0-2.35.09-3.5.05-2.15-.06-4.29-.21-6.44-.29-2.32-.1-2.88-.5-3.69-2.77-.25-.7-.45-1.41-.73-2.1a3.42,3.42,0,0,0-3.43-2.33q-7.56,0-15.13,0a4.32,4.32,0,0,0-3,1.28c-1.44,1.28-2.87,2.58-4.38,3.78C1150.07,389.34,1146.29,389,1142.26,388.26Zm26.17-29.56c-1.61,2.78-3,5-4.14,7.27a7.43,7.43,0,0,0-.65,3.43c.07,2,1,2.92,3.06,3.09a21.51,21.51,0,0,0,3.11,0c2.54-.15,3.39-1.07,3.37-3.67a4.89,4.89,0,0,0-.34-2.17C1171.53,364.14,1170.09,361.66,1168.43,358.7Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M788.94,274.88V263.31a13.38,13.38,0,0,1,.07-2,2.34,2.34,0,0,1,2.49-2.3c2.45-.05,4.89-.05,7.34,0a2.58,2.58,0,0,1,2.74,2.62,26.39,26.39,0,0,1,0,2.67c0,7.19-.09,14.38.06,21.57a19.63,19.63,0,0,0,1.26,6.48,8.84,8.84,0,0,0,8.16,5.88c4.5.32,8-1.24,10.16-5.31a13.9,13.9,0,0,0,1.54-6.65c0-7.26.09-14.52,0-21.78-.06-3.83.5-5.7,5.39-5.48,1.25.06,2.52,0,3.78,0,2.48.14,3.54,1.18,3.51,3.61-.11,8.59-.12,17.17-.45,25.75-.41,10.76-7.09,18.65-17.62,20.82-8.44,1.73-16.08,0-22.27-6.32a19.52,19.52,0,0,1-5.7-12.26c-.44-5.24-.54-10.51-.79-15.76Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M658.22,310.13A38.62,38.62,0,0,1,638,303.06c-1.72-1.18-1.72-2.05-.37-3.63a21.13,21.13,0,0,0,2-2.68c1.94-3.18,3-3.49,6.3-1.58a27.67,27.67,0,0,0,9.24,3.68,17.06,17.06,0,0,0,7.72-.18c2.11-.61,3.15-1.88,3.19-3.75s-.8-3-2.94-3.68c-3.1-1-6.28-1.74-9.38-2.7a76.4,76.4,0,0,1-7.53-2.66,18.43,18.43,0,0,1-4.28-2.74,9.88,9.88,0,0,1-3.54-6.94c-.79-8.66,3.84-15.09,12.48-17.08A32.06,32.06,0,0,1,673.1,262c3.69,1.87,4.07,3.45,1.8,6.86a25.31,25.31,0,0,1-1.86,2.5c-1.66,2-2.58,2.15-4.75.76a20.21,20.21,0,0,0-6.46-2.85,17.52,17.52,0,0,0-7.28-.21,3.92,3.92,0,0,0-3.45,3.54,3.36,3.36,0,0,0,2.51,3.95c2.43.86,5,1.4,7.47,2.09s4.72,1.25,7,2a22.39,22.39,0,0,1,3.67,1.57c5.38,2.84,7.67,7.45,6.84,13.47-.89,6.47-4.37,10.78-10.67,12.54C664.79,309,661.48,309.49,658.22,310.13Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1101.54,258c4.42.37,8.31.71,11.88,2.65a40.36,40.36,0,0,0,3.92,1.54c2.2.94,2.81,2.23,1.89,4.42a24.23,24.23,0,0,1-2.39,4.5c-1.41,2.06-3.22,2.39-5.43,1.26a7.47,7.47,0,0,1-1.5-.95c-3.77-3.28-8.21-3-12.66-2.29a3.72,3.72,0,0,0-3.1,3.38,3.66,3.66,0,0,0,2.23,3.76,27.59,27.59,0,0,0,4.2,1.4c3.35.92,6.76,1.66,10.07,2.71a28.31,28.31,0,0,1,6,2.75,10.44,10.44,0,0,1,5.11,8.87,18.5,18.5,0,0,1-.88,7.23,14.25,14.25,0,0,1-9.53,8.93,31,31,0,0,1-21.51-.65,68.36,68.36,0,0,1-8-3.91c-2.18-1.19-2.31-2.33-.85-4.3.84-1.13,1.6-2.32,2.41-3.46,1.59-2.23,2.94-2.51,5.29-1.12a53,53,0,0,0,5,2.88,19.45,19.45,0,0,0,11.51,1.4,6.07,6.07,0,0,0,3.08-1.55,3.58,3.58,0,0,0-1.48-6.09c-2.7-1-5.56-1.53-8.31-2.38-3.31-1-6.67-2-9.86-3.34a10.33,10.33,0,0,1-6.68-8.28c-1.34-9.63,3.2-16.05,11.68-18.15C1096.4,258.55,1099.24,258.35,1101.54,258Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M869.49,309.62c-12.57.26-23.72-9.53-26-20.88a25.79,25.79,0,0,1,14.2-27.84c10.13-4.81,19.73-3.1,28.74,3.07,2.15,1.48,2.25,3.08.43,5a45.46,45.46,0,0,1-4.12,3.73,3.46,3.46,0,0,1-4.33.2c-1.27-.76-2.5-1.61-3.82-2.25a11.51,11.51,0,0,0-13.25,1.68c-8.13,6.73-7.43,18.63,1.42,24.19a11.53,11.53,0,0,0,13,.07c1-.62,2-1.36,3-1.88,2.15-1.07,4.07-.83,5.65,1a44,44,0,0,1,3.59,5.06,2,2,0,0,1-.51,2.78,3.78,3.78,0,0,1-.9.64c-4.21,2-8.2,4.51-12.95,5.09C872.3,309.43,870.89,309.5,869.49,309.62Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M746.23,285.68c0-4.59,0-9.19,0-13.79,0-2.44-.14-4.89-.3-7.33-.24-3.82,1.11-5.4,4.88-5.55.89,0,1.78,0,2.67,0,3.29.06,4.5,1.28,4.57,4.62,0,1.34,0,2.67,0,4q0,12.12-.08,24.25a13.3,13.3,0,0,0,.06,1.55c.28,2.57,1.74,4.22,4.3,4.25,4.59.06,9.18-.15,13.77-.21a21,21,0,0,1,3.07.18,3.17,3.17,0,0,1,2.73,2.6,12.19,12.19,0,0,1,.18,5.94,2.76,2.76,0,0,1-2.8,2.39c-1.11.07-2.22,0-3.34,0-8.3,0-16.61-.07-24.91.06-4.72.07-5-1.74-5-4.94,0-6,0-12,0-18Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M777.3,363.93V384.6c0,.44,0,.89,0,1.33-.17,2.18-1.08,3.06-3.24,3.09s-4.28,0-6.42,0c-1.94,0-2.94-1-3.08-3.06-.1-1.55,0-3.11,0-4.66q0-18.68,0-37.33a12.27,12.27,0,0,1,.17-2.65,2.39,2.39,0,0,1,2.63-2.19c2.52-.05,5-.06,7.55,0,1.46,0,2.11.69,2.34,2.16a13.14,13.14,0,0,1,.1,2Q777.31,353.61,777.3,363.93Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1136.05,364.15v20.67a10.46,10.46,0,0,1-.12,1.77,2.28,2.28,0,0,1-2.36,2.2c-2.51.09-5,.11-7.55,0-1.69-.08-2.49-1-2.71-2.67a18.23,18.23,0,0,1-.07-2.22v-40c0-.22,0-.44,0-.66-.07-2.66.49-4.42,4.21-4.14,1.84.14,3.7,0,5.55,0s2.87.88,3,2.82c.09,1.47,0,3,0,4.44q0,8.88,0,17.78Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M896.53,283.91q0-10.44,0-20.9a10.46,10.46,0,0,1,.11-1.77,2.29,2.29,0,0,1,2.37-2.19c2.44-.09,4.89-.09,7.34,0a2.43,2.43,0,0,1,2.53,2.32,21.32,21.32,0,0,1,.15,3.1q0,19.46,0,38.92a24.65,24.65,0,0,1-.12,3.1c-.2,1.52-.83,2.15-2.3,2.18-2.59.05-5.19.05-7.78,0-1.39,0-1.94-.62-2.16-2a10,10,0,0,1-.09-1.55q0-10.56,0-21.13Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1014.92,364q0,10.33,0,20.66a13.13,13.13,0,0,1-.06,1.78,2.4,2.4,0,0,1-2.48,2.35c-2.29.1-4.59.09-6.88,0a2.23,2.23,0,0,1-2.4-2.14,16.63,16.63,0,0,1-.15-2.65c0-13.4,0-26.81,0-40.21,0-5,1.48-4.8,4.73-4.63,1.48.08,3-.05,4.44,0,1.94,0,2.64.71,2.78,2.65,0,.52,0,1,0,1.56V364Z" transform="translate(-187.37 -218.35)"/><path class="cls-1" d="M1143,326.27c-2.72,2.44-4.88,5.38-8.06,7.21a8.55,8.55,0,0,1-8.23.57c1.66-3.09,3.13-6.13,5.46-8.64a4.51,4.51,0,0,1,3.55-1.5A15.44,15.44,0,0,1,1143,326.27Z" transform="translate(-187.37 -218.35)"/></svg></a>
                </div>
                <div class="nav-items">
                    
                    <li><a href="">Servicios</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="">Nosotros</a></li>
                </div>
                
                <!-- <div class="btn-adjust"><span class="fas fa-adjust"></span></div> -->
                <div class="assets-container">
                    <div class="btn-buscar"><span class="fas fa-search"></span></div>
                    <form action="#">
                        <input type="search" class="buscar" placeholder="Buscar" required>
                        <button type="submit" class="fas fa-search"></button>
                    </form>
                    <button class="switch" id="switch">
                        <span>
                            <!-- <i class="fas fa-sun"></i> -->
                        </span>
                        <span>
                            <!-- <i class="fas fa-moon"></i> -->
                        </span>
                        <div></div>
                    </button>
                </div>
            </div>
        </nav>
    </section>
    <section id="servicios" class="servicios">
        <div class="titulo-container">
            <h1 class="titulocards">nuestros servicios</h1>
        </div>
        <div class="grid-cards">

            <div class="cards-item">
                <div class="card">
                    <img class="card-img" src="images/1.png" alt="division de servicio">
                    <div class="card-contenido">
                        <h1 class="card-titulo">División de Servicio</h1>
                        <!-- <button class="card-btn">Saber Más <span>&rarr;</span></button> -->
                    </div>
                </div>
            </div>

            <div class="cards-item">
                <div class="card">
                    <img class="card-img" src="images/2.png" alt="División Comercial">
                    <div class="card-contenido">
                        <h1 class="card-titulo">División Comercial</h1>
                        <!-- <button class="card-btn">Saber Más <span>&rarr;</span></button> -->
                    </div>
                </div>
            </div>

            <div class="cards-item">
                <div class="card">
                    <img class="card-img" src="images/3.png" alt="División de Proyectos">
                    <div class="card-contenido">
                        <h1 class="card-titulo">División de Proyectos</h1>
                        <!-- <button class="card-btn">Saber Más <span>&rarr;</span></button> -->
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="equipo" class="equipo">

        <div class="equipo-container">
            <div class="card-equipo">
                <div class="contenido">
                    <h2>Nuestro Equipo</h2>
                    <p>Nuestro equipo de ingenieros, técnicos y colaboradores están altamente capacitados en cada una de
                        sus funciones con el objetivo principal de poder suministrar a nuestros clientes soluciones de
                        calidad.
                    </p>
                    <a href="#">Ver más <span>&rarr;</span></button></a>
                </div>
                <img src="images/equipo.png" alt="">
            </div>
        </div>

    </section>

    <section id="industrias" class="industrias">
        <div class="industrias-container">
            <div class="industrias-leyenda">

                <div class="leyenda-titulo">
                    <h2>Industrias</h2>
                </div>
                <div class="leyenda-contenido">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ratione ex quo, neque quas
                        voluptates porro sit</p>
                </div>
                <div class="leyenda-btn">
                    <a href="#">Ver industrias <span>&rarr;</span></button></a>
                </div>
            </div>
            <div class="carousel2 owl-carousel">
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_alimentos.png" height="380" alt="Rock and Roll Hall of Fame">
                        <div class="industrias-hover">
                            <span>Área de Alimentos</span>
                        </div>
                        <!-- <p>Área Alimentos</p> -->
                    </a>
                </div>
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_alimentos2.png" height="380" alt="Constitution Square - Tower I">
                        <div class="industrias-hover">
                            <span>Área de Alimentos</span>
                        </div>
                        <!-- <p>Área Alimentos</p> -->
                    </a>
                </div>
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_manufacturas.png" height="380" alt="Empire State Building">
                        <div class="industrias-hover">
                            <span>Área de Manufacturas</span>
                        </div>
                        <!-- <p>Área Manufacturas</p> -->
                    </a>
                </div>
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_mineria.png" height="380" alt="Harmony Tower">
                        <div class="industrias-hover">
                            <span>Área de Minería</span>
                        </div>
                        <!-- <p>Área Minería</p> -->
                    </a>
                </div>
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_saneamiento2.png" height="380" alt="Harmony Tower">
                        <div class="industrias-hover">
                            <span>Área de Saneamiento</span>
                        </div>
                        <!-- <p>Área Saneamiento 2</p> -->
                    </a>
                </div>
                <div class="industrias-item">
                    <a href="">
                        <img src="images/industrias_saneamiento.png" height="380" alt="Empire State Building">
                        <div class="industrias-hover">
                            <span>Área de Saneamiento 2</span>
                        </div>
                        <!-- <p>Área Saneamiento</p> -->
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias" class="noticias">
        <div class="noticias-container">
            <div class="noticias-titulo">
                <h2>Noticias</h2>
            </div>
            <div class="direcciones owl-nav">
                <svg class="arrowleft noticialeft" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M492,236H68.442l70.164-69.824c7.829-7.792,7.859-20.455,0.067-28.284c-7.792-7.83-20.456-7.859-28.285-0.068
			l-104.504,104c-0.007,0.006-0.012,0.013-0.018,0.019c-7.809,7.792-7.834,20.496-0.002,28.314c0.007,0.006,0.012,0.013,0.018,0.019
			l104.504,104c7.828,7.79,20.492,7.763,28.285-0.068c7.792-7.829,7.762-20.492-0.067-28.284L68.442,276H492
			c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
                <svg class="arrowright noticiaright" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="noticias-carousel-container">
            <div class="noticias-carousel owl-carousel">
                <!-- <div class="noticias-item">
                    <a href="">
                        <div class="noticia">
                            <div class="noticia-content">
                                <div class="noticia-header">
                                    <h2>20/04/21</h2>
                                    <h1>Hbi Noticias</h1>
                                </div>
                                <div class="noticia-titulo">
                                    <h1>MINERIA EN TIEMPOS DE PANDEMIA</h1>
                                </div>
                                <div class="noticia-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas odio quos sunt nemo
                                        soluta? Unde nisi sed odio, incidunt modi minima</p>
                                </div>
                                <div class="noticia-imagen">
                                    <img src="images/industrias_mineria.png" alt="imagen-noticia">
                                </div>
                                <div class="noticia-alert">
                                    <h2>Click para ver más</h2>
                                </div>
                                <div class="noticia-footer">
                                    <div class="barcode"></div>
                                    <h2>#123456789</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <?php 
                    #Creando el ciclo de las noticias
                    foreach($resultado as $noticia):
                ?>
                <div class="noticias-item">
                    <a href="">
                        <div class="noticia">
                            <div class="noticia-content">
                                <div class="noticia-header">
                                    <h2><?php echo $noticia['fecha']?></h2>
                                    <h1>Hbi Noticias</h1>
                                </div>
                                <div class="noticia-titulo">
                                    <h1><?php echo $noticia['titulo']?></h1>
                                </div>
                                <div class="noticia-body">
                                    <p><?php echo $noticia['resumen']?></p>
                                </div>
                                <div class="noticia-imagen">
                                    <img src="./dashboard/uploads/<?php echo $noticia['imagen']?>" alt="imagen-noticia">
                                </div>
                                <div class="noticia-alert">
                                    <h2>Click para ver más</h2>
                                </div>
                                <div class="noticia-footer">
                                    <div class="barcode"></div>
                                    <h2>#<?php echo $string = substr(str_repeat(0, $length).$noticia['id'], - $length); ?></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section id="marcas" class="marcas">
        <div class="marcas-container">
            <div class="marcas-leyenda">
                <div class="leyenda-titulo">
                    <h2>Marcas</h2>
                </div>
                <div class="leyenda-contenido">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fuga similique corporis
                        aperiam. Deserunt, mollitia natus obcaeca</p>
                </div>
                <div class="leyenda-btn">
                    <a href="#">Ver todas las Marcas <span>&rarr;</span></button></a>
                </div>
            </div>
            <div class="marcas-carousel-container">
                <div id="marcas-carousel" class="marcas-carousel owl-carousel">
                    <div class="marcas-item" data-slide-index="0">
                        <img src="images/marca_cara.png" alt="1">
                    </div>
                    <div class="marcas-item" data-slide-index="1">
                        <img src="images/marca_fareco.png" alt="2">
                    </div>
                    <div class="marcas-item" data-slide-index="2">
                        <img src="images/marca_intradevco.png" alt="3">
                    </div>
                    <div class="marcas-item" data-slide-index="3">
                        <img src="images/marca_marcobre.png" alt="4">
                    </div>
                    <div class="marcas-item" data-slide-index="4">
                        <img src="images/marca_otass.png" alt="5">
                    </div>
                    <div class="marcas-item" data-slide-index="5">
                        <img src="images/marca_puno.png" alt="6">
                    </div>
                    <div class="marcas-item" data-slide-index="6">
                        <img src="images/marca_randon.png" alt="7">
                    </div>
                    <div class="marcas-item" data-slide-index="7">
                        <img src="images/marca_sedapal.png" alt="8">
                    </div>
                    <div class="marcas-item" data-slide-index="8">
                        <img src="images/marca_surco.png" alt="9">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clientes" class="clientes">
        <div class="clientes-container">
            <div class="clientes-titulo">
                <h2>Nuestros Clientes</h2>
            </div>
            <div class="direcciones owl-nav">
                <svg class="arrowleft clientesleft" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M492,236H68.442l70.164-69.824c7.829-7.792,7.859-20.455,0.067-28.284c-7.792-7.83-20.456-7.859-28.285-0.068
			l-104.504,104c-0.007,0.006-0.012,0.013-0.018,0.019c-7.809,7.792-7.834,20.496-0.002,28.314c0.007,0.006,0.012,0.013,0.018,0.019
			l104.504,104c7.828,7.79,20.492,7.763,28.285-0.068c7.792-7.829,7.762-20.492-0.067-28.284L68.442,276H492
			c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
                <svg class="arrowright clientesright" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="clientes-carousel-container">
            <div class="clientes-carousel owl-carousel">
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
                <div class="clientes-item">
                    <img src="images/marca_cara.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="contactos">
        <div class="heading title-cards contacto">
            <h2>Ponte en contacto con <span>nosotros</span></h2>
        </div>
        <div class="contactos-container">
            <div class="contactos-items">
                <div class="contacto-item">
                    <div class="icon">
                        <!-- <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNFREVERUQ7IiBkPSJNMCw1MTJsMzUuMzEtMTI4QzEyLjM1OSwzNDQuMjc2LDAsMzAwLjEzOCwwLDI1NC4yMzRDMCwxMTQuNzU5LDExNC43NTksMCwyNTUuMTE3LDANCglTNTEyLDExNC43NTksNTEyLDI1NC4yMzRTMzk1LjQ3Niw1MTIsMjU1LjExNyw1MTJjLTQ0LjEzOCwwLTg2LjUxLTE0LjEyNC0xMjQuNDY5LTM1LjMxTDAsNTEyeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzU1Q0Q2QzsiIGQ9Ik0xMzcuNzEsNDMwLjc4Nmw3Ljk0NSw0LjQxNGMzMi42NjIsMjAuMzAzLDcwLjYyMSwzMi42NjIsMTEwLjM0NSwzMi42NjINCgljMTE1LjY0MSwwLDIxMS44NjItOTYuMjIxLDIxMS44NjItMjEzLjYyOFMzNzEuNjQxLDQ0LjEzOCwyNTUuMTE3LDQ0LjEzOFM0NC4xMzgsMTM3LjcxLDQ0LjEzOCwyNTQuMjM0DQoJYzAsNDAuNjA3LDExLjQ3Niw4MC4zMzEsMzIuNjYyLDExMy44NzZsNS4yOTcsNy45NDVsLTIwLjMwMyw3NC4xNTJMMTM3LjcxLDQzMC43ODZ6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRkVGRUZFOyIgZD0iTTE4Ny4xNDUsMTM1Ljk0NWwtMTYuNzcyLTAuODgzYy01LjI5NywwLTEwLjU5MywxLjc2Ni0xNC4xMjQsNS4yOTcNCgljLTcuOTQ1LDcuMDYyLTIxLjE4NiwyMC4zMDMtMjQuNzE3LDM3Ljk1OWMtNi4xNzksMjYuNDgzLDMuNTMxLDU4LjI2MiwyNi40ODMsOTAuMDQxczY3LjA5LDgyLjk3OSwxNDQuNzcyLDEwNS4wNDgNCgljMjQuNzE3LDcuMDYyLDQ0LjEzOCwyLjY0OCw2MC4wMjgtNy4wNjJjMTIuMzU5LTcuOTQ1LDIwLjMwMy0yMC4zMDMsMjIuOTUyLTMzLjU0NWwyLjY0OC0xMi4zNTkNCgljMC44ODMtMy41MzEtMC44ODMtNy45NDUtNC40MTQtOS43MWwtNTUuNjE0LTI1LjZjLTMuNTMxLTEuNzY2LTcuOTQ1LTAuODgzLTEwLjU5MywyLjY0OGwtMjIuMDY5LDI4LjI0OA0KCWMtMS43NjYsMS43NjYtNC40MTQsMi42NDgtNy4wNjIsMS43NjZjLTE1LjAwNy01LjI5Ny02NS4zMjQtMjYuNDgzLTkyLjY5LTc5LjQ0OGMtMC44ODMtMi42NDgtMC44ODMtNS4yOTcsMC44ODMtNy4wNjINCglsMjEuMTg2LTIzLjgzNGMxLjc2Ni0yLjY0OCwyLjY0OC02LjE3OSwxLjc2Ni04LjgyOGwtMjUuNi01Ny4zNzlDMTkzLjMyNCwxMzguNTkzLDE5MC42NzYsMTM1Ljk0NSwxODcuMTQ1LDEzNS45NDUiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" /> -->
                        <img
                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ1NS43MzEgNDU1LjczMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDU1LjczMSA0NTUuNzMxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cmVjdCB4PSIwIiB5PSIwIiBzdHlsZT0iZmlsbDojMUJENzQxOyIgd2lkdGg9IjQ1NS43MzEiIGhlaWdodD0iNDU1LjczMSIvPg0KCTxnPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTY4LjQ5NCwzODcuNDFsMjIuMzIzLTc5LjI4NGMtMTQuMzU1LTI0LjM4Ny0yMS45MTMtNTIuMTM0LTIxLjkxMy04MC42MzgNCgkJCWMwLTg3Ljc2NSw3MS40MDItMTU5LjE2NywxNTkuMTY3LTE1OS4xNjdzMTU5LjE2Niw3MS40MDIsMTU5LjE2NiwxNTkuMTY3YzAsODcuNzY1LTcxLjQwMSwxNTkuMTY3LTE1OS4xNjYsMTU5LjE2Nw0KCQkJYy0yNy4zNDcsMC01NC4xMjUtNy03Ny44MTQtMjAuMjkyTDY4LjQ5NCwzODcuNDF6IE0xNTQuNDM3LDMzNy40MDZsNC44NzIsMi45NzVjMjAuNjU0LDEyLjYwOSw0NC40MzIsMTkuMjc0LDY4Ljc2MiwxOS4yNzQNCgkJCWM3Mi44NzcsMCwxMzIuMTY2LTU5LjI5LDEzMi4xNjYtMTMyLjE2N1MzMDAuOTQ4LDk1LjMyMSwyMjguMDcxLDk1LjMyMVM5NS45MDQsMTU0LjYxMSw5NS45MDQsMjI3LjQ4OA0KCQkJYzAsMjUuMzkzLDcuMjE3LDUwLjA1MiwyMC44NjksNzEuMzExbDMuMjgxLDUuMTA5bC0xMi44NTUsNDUuNjU4TDE1NC40MzcsMzM3LjQwNnoiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0xODMuMzU5LDE1My40MDdsLTEwLjMyOC0wLjU2M2MtMy4yNDQtMC4xNzctNi40MjYsMC45MDctOC44NzgsMy4wMzcNCgkJCWMtNS4wMDcsNC4zNDgtMTMuMDEzLDEyLjc1NC0xNS40NzIsMjMuNzA4Yy0zLjY2NywxNi4zMzMsMiwzNi4zMzMsMTYuNjY3LDU2LjMzM2MxNC42NjcsMjAsNDIsNTIsOTAuMzMzLDY1LjY2Nw0KCQkJYzE1LjU3NSw0LjQwNCwyNy44MjcsMS40MzUsMzcuMjgtNC42MTJjNy40ODctNC43ODksMTIuNjQ4LTEyLjQ3NiwxNC41MDgtMjEuMTY2bDEuNjQ5LTcuNzAyYzAuNTI0LTIuNDQ4LTAuNzE5LTQuOTMyLTIuOTkzLTUuOTgNCgkJCWwtMzQuOTA1LTE2LjA4OWMtMi4yNjYtMS4wNDQtNC45NTMtMC4zODQtNi40NzcsMS41OTFsLTEzLjcwMywxNy43NjRjLTEuMDM1LDEuMzQyLTIuODA3LDEuODc0LTQuNDA3LDEuMzEyDQoJCQljLTkuMzg0LTMuMjk4LTQwLjgxOC0xNi40NjMtNTguMDY2LTQ5LjY4N2MtMC43NDgtMS40NDEtMC41NjItMy4xOSwwLjQ5OS00LjQxOWwxMy4wOTYtMTUuMTUNCgkJCWMxLjMzOC0xLjU0NywxLjY3Ni0zLjcyMiwwLjg3Mi01LjYwMmwtMTUuMDQ2LTM1LjIwMUMxODcuMTg3LDE1NC43NzQsMTg1LjM5MiwxNTMuNTE4LDE4My4zNTksMTUzLjQwN3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                    </div>
                    <div class="contacto-info">
                        <h2>Teléfono: </h2>
                        <h3>+51 974 809 238</h3>
                        <h3>(01) 432 4376</h3>
                    </div>
                </div>
                <div class="contacto-item">
                    <div class="icon">
                        <!-- <img
                  src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyLjAwMDY5IDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMTYgMzc2aC0xMjBjLTIuODIwMzEyIDMuNTU0Njg4LTk3LjE3OTY4OCAxMjIuNDQ5MjE5LTEwMCAxMjZoMzIwYy0yLjgyMDMxMi0zLjU1NDY4OC05Ny4xNzk2ODgtMTIyLjQ0NTMxMi0xMDAtMTI2em0wIDAiIGZpbGw9IiNlYWZhZmYiLz48cGF0aCBkPSJtNDAyIDM3NmgtODZjMi44MjAzMTIgMy41NTQ2ODggOTcuMTc5Njg4IDEyMi40NDkyMTkgMTAwIDEyNmg4NmMtMi44MjAzMTItMy41NTQ2ODgtOTcuMTc5Njg4LTEyMi40NDUzMTItMTAwLTEyNnptMCAwIiBmaWxsPSIjOTZjOGVmIi8+PHBhdGggZD0ibTI1NiA0MzljLS40NDkyMTktLjcwMzEyNS0xMjQuNzQ2MDk0LTE5NS42NTYyNS0xMjQuODA4NTk0LTE5NS43NTc4MTItMTUuOTEwMTU2LTIzLjgyMDMxMy0yNS4xOTE0MDYtNTIuNDUzMTI2LTI1LjE5MTQwNi04My4yNDIxODggMC04Mi44Mzk4NDQgNjcuMTYwMTU2LTE1MCAxNTAtMTUwczE1MCA2Ny4xNjAxNTYgMTUwIDE1MGMwIDMwLjc4OTA2Mi05LjI4MTI1IDU5LjQyMTg3NS0yNS4xOTE0MDYgODMuMjQyMTg4LS4wNjI1LjA5NzY1Ni0xMjQuMzcxMDk0IDE5NS4wNzAzMTItMTI0LjgwODU5NCAxOTUuNzU3ODEyem03NC45MjE4NzUtMjI5LjEyMTA5NGM5Ljg2NzE4Ny0xNC43MzgyODEgMTUuMDc4MTI1LTMyIDE1LjA3ODEyNS00OS44Nzg5MDYgMC00OS42Mjg5MDYtNDAuMzcxMDk0LTkwLTkwLTkwcy05MCA0MC4zNzEwOTQtOTAgOTBjMCAxNy44Nzg5MDYgNS4yMTA5MzggMzUuMTQwNjI1IDE1LjA4OTg0NCA0OS44OTg0MzggMTYuNzgxMjUgMjUuMTEzMjgxIDQ0Ljc2OTUzMSA0MC4xMDE1NjIgNzQuOTEwMTU2IDQwLjEwMTU2MnM1OC4xMjg5MDYtMTQuOTg4MjgxIDc0LjkyMTg3NS00MC4xMjEwOTR6bTAgMCIgZmlsbD0iI2ZmNTIzZCIvPjxwYXRoIGQ9Im0xMTAgMzc2Yy0yLjgyMDMxMiAzLjU1NDY4OC05Ny4xNzk2ODggMTIyLjQ0OTIxOS0xMDAgMTI2aDg2YzIuODIwMzEyLTMuNTU0Njg4IDk3LjE3OTY4OC0xMjIuNDQ1MzEyIDEwMC0xMjZ6bTAgMCIgZmlsbD0iIzk2YzhlZiIvPjxwYXRoIGQ9Im0zMTYgMjYwYy01LjUxOTUzMSAwLTEwIDQuNDgwNDY5LTEwIDEwczQuNDgwNDY5IDEwIDEwIDEwIDEwLTQuNDgwNDY5IDEwLTEwLTQuNDgwNDY5LTEwLTEwLTEwem0wIDAiLz48cGF0aCBkPSJtMTAyLjE2Nzk2OSAzNjkuNzg1MTU2LTEwMCAxMjZjLTIuMzg2NzE5IDMuMDAzOTA2LTIuODM5ODQ0IDcuMTA5Mzc1LTEuMTcxODc1IDEwLjU2MjUgMS42Njc5NjggMy40NTcwMzIgNS4xNjc5NjggNS42NTIzNDQgOS4wMDM5MDYgNS42NTIzNDRoNDkyYzMuODM1OTM4IDAgNy4zMzU5MzgtMi4xOTUzMTIgOS4wMDM5MDYtNS42NTIzNDQgMS42NzE4NzUtMy40NTMxMjUgMS4yMTQ4NDQtNy41NTg1OTQtMS4xNzE4NzUtMTAuNTYyNWwtMTAwLTEyNmMtMS44OTQ1MzEtMi4zOTA2MjUtNC43ODEyNS0zLjc4NTE1Ni03LjgzMjAzMS0zLjc4NTE1NmgtODcuNTk3NjU2bDc0Ljc4NTE1Ni0xMTcuMjk2ODc1YzE3LjU0Mjk2OS0yNi4zMDA3ODEgMjYuODEyNS01Ni45NzI2NTYgMjYuODEyNS04OC43MDMxMjUgMC04OC4yMjI2NTYtNzEuNzczNDM4LTE2MC0xNjAtMTYwcy0xNjAgNzEuNzc3MzQ0LTE2MCAxNjBjMCAzMS43MzA0NjkgOS4yNjk1MzEgNjIuMzk4NDM4IDI2LjgxMjUgODguNzAzMTI1bDc0Ljc4NTE1NiAxMTcuMjk2ODc1aC04Ny41OTc2NTZjLTMuMDUwNzgxIDAtNS45MzM1OTQgMS4zOTQ1MzEtNy44MzIwMzEgMy43ODUxNTZ6bS0zNy4zMzU5MzggNzkuMjE0ODQ0aDYwLjQ2NDg0NGwtMzQuMTI1IDQzaC02MC40Njg3NXptMTQ1LjUxOTUzMS02MyAyNy40MTQwNjMgNDNoLTcxLjA2MjVsMzQuMTI4OTA2LTQzem05MS4zMDA3ODIgMGg5LjUxOTUzMWwzNC4xMjUgNDNoLTcxLjA1ODU5NHptNTkuNTE5NTMxIDYzIDM0LjEyNSA0M2gtMjc4LjU5Mzc1bDM0LjEyODkwNi00M3ptNTkuNjYwMTU2IDQzLTM0LjEyODkwNi00M2g2MC40Njg3NWwzNC4xMjUgNDN6bTEwLjQ2NDg0NC02M2gtNjAuNDY0ODQ0bC0zNC4xMjg5MDYtNDNoNjAuNDY4NzV6bS0yOTEuNzg5MDYzLTE5MS4zMTI1Yy0xNS4zNzg5MDYtMjMuMDIzNDM4LTIzLjUwNzgxMi00OS44ODY3MTktMjMuNTA3ODEyLTc3LjY4NzUgMC03Ny4xOTUzMTIgNjIuODA0Njg4LTE0MCAxNDAtMTQwczE0MCA2Mi44MDQ2ODggMTQwIDE0MGMwIDI3LjgwMDc4MS04LjEyODkwNiA1NC42NjQwNjItMjMuNTAzOTA2IDc3LjY4NzUtLjA0Mjk2OS4wNTg1OTQtLjA3ODEyNS4xMTcxODgtLjExNzE4OC4xNzU3ODEtNi41NjY0MDYgMTAuMzAwNzgxLTExMS4zMjAzMTIgMTc0LjYwNTQ2OS0xMTYuMzc4OTA2IDE4Mi41MzUxNTctMTIuNzIyNjU2LTE5Ljk1NzAzMi0xMDMuNDIxODc1LTE2Mi4yMTQ4NDQtMTE2LjM3ODkwNi0xODIuNTM1MTU3LS4wMzUxNTYtLjA1ODU5My0uMDc0MjE5LS4xMTcxODctLjExMzI4Mi0uMTc1Nzgxem0zNS43ODkwNjMgMTQ4LjMxMjUtMzQuMTI1IDQzaC02MC40Njg3NWwzNC4xMjg5MDYtNDN6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMjYwYzU0Ljg5ODQzOCAwIDEwMC00NC40NTcwMzEgMTAwLTEwMCAwLTU1LjE0MDYyNS00NC44NTkzNzUtMTAwLTEwMC0xMDBzLTEwMCA0NC44NTkzNzUtMTAwIDEwMGMwIDU1LjU1ODU5NCA0NS4xMTcxODggMTAwIDEwMCAxMDB6bTAtMTgwYzQ0LjExMzI4MSAwIDgwIDM1Ljg4NjcxOSA4MCA4MCAwIDQ0LjUyMzQzOC0zNi4xNzU3ODEgODAtODAgODAtNDMuODM1OTM4IDAtODAtMzUuNDc2NTYyLTgwLTgwIDAtNDQuMTEzMjgxIDM1Ljg4NjcxOS04MCA4MC04MHptMCAwIi8+PHBhdGggZD0ibTI5OC4xMjEwOTQgMjk0LjEyNWMtNC43MjY1NjMtMi44NTE1NjItMTAuODc1LTEuMzI4MTI1LTEzLjcyNjU2MyAzLjQwMjM0NGwtMzYuOTYwOTM3IDYxLjMyMDMxMmMtMi44NTE1NjMgNC43MzA0NjktMS4zMjgxMjUgMTAuODc1IDMuNDAyMzQ0IDEzLjcyNjU2MyA0Ljc1IDIuODYzMjgxIDEwLjg4NjcxOCAxLjMwODU5MyAxMy43MjY1NjItMy40MDIzNDRsMzYuOTYwOTM4LTYxLjMyMDMxM2MyLjg1MTU2Mi00LjczMDQ2OCAxLjMyODEyNC0xMC44NzUtMy40MDIzNDQtMTMuNzI2NTYyem0wIDAiLz48L3N2Zz4="
                /> -->
                        <img
                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0E4RUVGQzsiIGQ9Ik01MTEuMzQyLDUwMS41NzRsLTczLjc4LTE3OC42MDdjLTEuMTYtMi44MDgtMy44ODItNC42MzctNi45MDEtNC42MzdIODEuMzM5DQoJYy0zLjAxOSwwLTUuNzQyLDEuODMtNi45MDEsNC42MzdMMC42NTcsNTAxLjU3NGMtMC45NjEsMi4zMjQtMC43MDUsNC45NzksMC42ODMsNy4wNzNDMi43MjcsNTEwLjc0Miw1LjA2LDUxMiw3LjU1OSw1MTJoNDk2Ljg4Mg0KCWMyLjQ5OCwwLDQuODMyLTEuMjU5LDYuMjE5LTMuMzUzQzUxMi4wNDcsNTA2LjU1NCw1MTIuMzAyLDUwMy44OTksNTExLjM0Miw1MDEuNTc0eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzdFRTVGMjsiIGQ9Ik00ODAuNjQxLDUxMmgyMy44YzIuNDk4LDAsNC44MzItMS4yNTksNi4yMTktMy4zNTNjMS4zODctMi4wOTMsMS42NDMtNC43NDgsMC42ODMtNy4wNzMNCglsLTczLjc4LTE3OC42MDdjLTEuMTYtMi44MDgtMy44ODItNC42MzctNi45MDEtNC42MzdoLTMwLjAyM0w0ODAuNjQxLDUxMnoiLz4NCjxnPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiM0Q0UxNjY7IiBkPSJNMTIzLjE2NiwzODUuNjkxbDI1LjQ1OS02Ny41MjhIODAuODY2Yy0zLjAxOSwwLTUuNzQyLDEuODMtNi45MDEsNC42MzdsLTI1Ljk4LDYyLjg5MUgxMjMuMTY2eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiM0Q0UxNjY7IiBkPSJNNDMwLjE4OCwzMTguMTYzSDE5NC45MTJsNjguNjIzLDU5LjgzOWgxOTYuMzU4bC0yMi44MDMtNTUuMjAxDQoJCUM0MzUuOTI5LDMxOS45OTQsNDMzLjIwNywzMTguMTYzLDQzMC4xODgsMzE4LjE2M3oiLz4NCgk8cG9seWdvbiBzdHlsZT0iZmlsbDojNENFMTY2OyIgcG9pbnRzPSI0NjEuNjU1LDM4Mi4yNjkgNDYzLjA2OSwzODUuNjkxIDQ2My4wNjksMzg1LjY5MSAJIi8+DQo8L2c+DQo8cG9seWdvbiBzdHlsZT0iZmlsbDojRkZEQjU2OyIgcG9pbnRzPSI0ODIuNTgxLDQzMi45MjggNDU5Ljg5MywzNzguMDAyIDI2My41MzQsMzc4LjAwMiAxOTQuOTEyLDMxOC4xNjMgMTQ4Ljg3OCwzMTguMTYzIA0KCTE0My4wMiwzMTguMTYzIDExOC4xOCwzNzcuOTg3IDUxLjE2OSwzNzcuOTg3IDM2LjExNyw0MTQuNDIzIDI4LjQ3Myw0MzIuOTI4IDk1LjU1NSw0MzIuOTI4IDYyLjk2Miw1MTEuODMzIDEyMy45NDEsNTExLjgzMyANCgkxNzYuMjkxLDM4My42NTggMzI3LjI1Nyw1MTEuODMzIDQxNi4zODUsNTExLjgzMyAzMjYuMTYxLDQzMi45MjggIi8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRkY0QTRBOyIgZD0iTTI1NS41MjcsMEMxNjYuNDk1LDAsOTQuMDYzLDcyLjk3Nyw5NC4wNjMsMTYyLjY3OGMwLDMwLjkyNCw4LjM1Miw2My43MzMsMjQuODI3LDk3LjUxNQ0KCWMxMy4wMzYsMjYuNzM0LDMxLjE3NSw1NC4xNjEsNTMuOTEsODEuNTJjMzguNTcyLDQ2LjQxNSw3Ni41NTMsNzYuMjE0LDc4LjE1Miw3Ny40NjFjMS4zNDgsMS4wNTEsMi45NjEsMS41NzQsNC41NzUsMS41NzQNCglzMy4yMjgtMC41MjUsNC41NzUtMS41NzRjMS41OTgtMS4yNDcsMzkuNTc5LTMxLjA0Niw3OC4xNTItNzcuNDYxYzIyLjczNi0yNy4zNTksNDAuODc1LTU0Ljc4Niw1My45MS04MS41Mg0KCWMxNi40NzUtMzMuNzgzLDI0LjgyNy02Ni41OTEsMjQuODI3LTk3LjUxNUM0MTYuOTkxLDcyLjk3NywzNDQuNTU5LDAsMjU1LjUyNywweiBNMjU1LjUyNywxMDAuNzk4DQoJYzMzLjkyLDAsNjEuNDE4LDI3LjcwNSw2MS40MTgsNjEuODhzLTI3LjQ5OCw2MS44OC02MS40MTgsNjEuODhzLTYxLjQxOC0yNy43MDUtNjEuNDE4LTYxLjg4DQoJQzE5NC4xMDksMTI4LjUwMywyMjEuNjA3LDEwMC43OTgsMjU1LjUyNywxMDAuNzk4eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0U3MzQzRjsiIGQ9Ik0yNTUuNTI3LDBjLTUuMzEzLDAtMTAuNTY2LDAuMjY4LTE1Ljc0OSwwLjc3NWM4MS42NjgsOC4wMDIsMTQ1LjcxNSw3Ny41NTUsMTQ1LjcxNSwxNjEuOTAzDQoJYzAsMzAuOTI0LTguMzUyLDYzLjczMy0yNC44MjcsOTcuNTE1Yy0xMy4wMzYsMjYuNzM0LTMxLjE3NSw1NC4xNjEtNTMuOTEsODEuNTJjLTI2LjQ1NCwzMS44MzMtNTIuNjI2LDU1Ljg0Ni02Ni45NzgsNjguMTk3DQoJYzYuNTc1LDUuNjU4LDEwLjY3Miw4Ljg3MiwxMS4xNzMsOS4yNjNjMS4zNDgsMS4wNTEsMi45NjEsMS41NzQsNC41NzUsMS41NzRzMy4yMjgtMC41MjUsNC41NzUtMS41NzQNCgljMS41OTgtMS4yNDcsMzkuNTc5LTMxLjA0Niw3OC4xNTItNzcuNDYxYzIyLjczNi0yNy4zNTksNDAuODc1LTU0Ljc4Niw1My45MS04MS41MmMxNi40NzUtMzMuNzgzLDI0LjgyNy02Ni41OTEsMjQuODI3LTk3LjUxNQ0KCUM0MTYuOTkxLDcyLjk3NywzNDQuNTU5LDAsMjU1LjUyNywweiIvPg0KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzRDRTE2NjsiIHBvaW50cz0iMTIzLjk0MSw1MTEuODMzIDMyNy4yNTcsNTExLjgzMyAxNzYuMjkxLDM4My42NTggIi8+DQo8cG9seWdvbiBzdHlsZT0iZmlsbDojRkZCQjI0OyIgcG9pbnRzPSI0MjQuODg0LDM3OC4wMDIgNDQ3LjU3Myw0MzIuOTI4IDQ4Mi41ODEsNDMyLjkyOCA0NTkuODkzLDM3OC4wMDIgIi8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNDRDODY4OyIgZD0iTTQyNC44ODQsMzc4LjAwMmgzNS4wMDlsLTIyLjgwMy01NS4yMDFjLTEuMTYtMi44MDgtMy44ODItNC42MzctNi45MDEtNC42MzdoLTMwLjAyMw0KCUw0MjQuODg0LDM3OC4wMDJ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                    </div>
                    <div class="contacto-info">
                        <h2>Dirección: </h2>
                        <h3>Av Los Sauces 253, Ate 15022</h3>
                    </div>
                </div>
                <div class="contacto-item">
                    <div class="icon">
                        <img
                            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHJlY3QgeD0iNjQiIHk9IjY0IiBzdHlsZT0iZmlsbDojRUNFRkYxOyIgd2lkdGg9IjM4NCIgaGVpZ2h0PSIzODQiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNDRkQ4REM7IiBwb2ludHM9IjI1NiwyOTYuMzg0IDQ0OCw0NDggNDQ4LDE0OC42NzIgIi8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRjQ0MzM2OyIgZD0iTTQ2NCw2NGgtMTZMMjU2LDIxNS42MTZMNjQsNjRINDhDMjEuNTA0LDY0LDAsODUuNTA0LDAsMTEydjI4OGMwLDI2LjQ5NiwyMS41MDQsNDgsNDgsNDhoMTZWMTQ4LjY3Mg0KCWwxOTIsMTQ3LjY4TDQ0OCwxNDguNjRWNDQ4aDE2YzI2LjQ5NiwwLDQ4LTIxLjUwNCw0OC00OFYxMTJDNTEyLDg1LjUwNCw0OTAuNDk2LDY0LDQ2NCw2NHoiLz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                    </div>
                    <div class="contacto-info">
                        <h2>Correo:</h2>
                        <h3>informes@<span>hbisac</span>.com.pe</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="colum footer-leyenda">
                <a class="imagen-logo" href="login.php">
                    <img src="images/hbi-blanco.svg" height="50px" style="margin: 2px 0px 20px 0px;" alt="">
                </a>
                <p>Somos una empresa familiar de éxito nacional y tecnología innovadora, cuya sede está ubicada en la
                    ciudad de lima.</p>
                <ul class="social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="colum quicklinks">
                <h2>Enlace Útil</h2>
                <ul>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Productos</a></li>
                    <li><a href="">Industrias</a></li>
                    <li><a href="">Marcas</a></li>
                    <li><a href="">Noticias</a></li>
                    <li><a href="">Contactanos</a></li>
                </ul>
            </div>
            <div class="colum footer-contacto">
                <h2>Contacto</h2>
                <ul class="informacion">
                    <li>
                        <span class="fi-rs-building"></span>
                        <p><a href="tel: 01432 4376">Oficina Principal: <br>(01)432 4376</a></p>
                    </li>
                    <li>
                        <span class="fi-rs-smartphone"></span>
                        <p><a href="tel:+51 974 609 238">+51 974 609 238</a></p>
                    </li>
                    <li>
                        <span class="fi-rs-envelope"></span>
                        <p><a href="mailto:informes@hbisac.com.pe">informes@hbisac.com.pe</a></p>
                    </li>
                    <li>
                        <span class="fi-rs-marker"></span>
                        <span id="">Oficina Principal: <br>Av. Los Sauces 253,<br> Ate 15022</span>
                        <span class="copybtn-container">
                            <button id="copybtn" class="copybtn" data-clipboard-text="Av. Los Sauces 253, Ate 15022"
                                aria-label="copied">
                                <span class="fi-rs-duplicate"></span>
                            </button>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="action" onclick="giraToggle();">
        <span class="container-setting">
            <svg enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m22.683 9.394-1.88-.239c-.155-.477-.346-.937-.569-1.374l1.161-1.495c.47-.605.415-1.459-.122-1.979l-1.575-1.575c-.525-.542-1.379-.596-1.985-.127l-1.493 1.161c-.437-.223-.897-.414-1.375-.569l-.239-1.877c-.09-.753-.729-1.32-1.486-1.32h-2.24c-.757 0-1.396.567-1.486 1.317l-.239 1.88c-.478.155-.938.345-1.375.569l-1.494-1.161c-.604-.469-1.458-.415-1.979.122l-1.575 1.574c-.542.526-.597 1.38-.127 1.986l1.161 1.494c-.224.437-.414.897-.569 1.374l-1.877.239c-.753.09-1.32.729-1.32 1.486v2.24c0 .757.567 1.396 1.317 1.486l1.88.239c.155.477.346.937.569 1.374l-1.161 1.495c-.47.605-.415 1.459.122 1.979l1.575 1.575c.526.541 1.379.595 1.985.126l1.494-1.161c.437.224.897.415 1.374.569l.239 1.876c.09.755.729 1.322 1.486 1.322h2.24c.757 0 1.396-.567 1.486-1.317l.239-1.88c.477-.155.937-.346 1.374-.569l1.495 1.161c.605.47 1.459.415 1.979-.122l1.575-1.575c.542-.526.597-1.379.127-1.985l-1.161-1.494c.224-.437.415-.897.569-1.374l1.876-.239c.753-.09 1.32-.729 1.32-1.486v-2.24c.001-.757-.566-1.396-1.316-1.486zm-10.683 7.606c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
            </svg>
        </span>
        <div class="icons">
            <div class="icon-wsp">
                <a href="https://api.whatsapp.com/send?phone=51974609238&text=Hola,%20Hidrobombeo%20Ingenieros%20S.A.C.%20%20Quisiera%20información%20sobre%20sus%20servicios"
                    target="_blank"><img src="images/whatsapp.svg" width="" alt=""></a>
            </div>
            <div class="icon-msg">
                <a href="https://www.messenger.com/t/241313089327179" target="_blank"><img src="images/messenger.svg"
                        width="" alt="">
                </a>
            </div>
        </div>
    </div>
    
    <div class="superoverlay">
        <div class="mensaje">
            <h3 class="titulo-mensaje">HBI S.A.C.</h3>
            <h3 class="designed">Designed by Almeyda</h3>
        </div>
    </div>

    <div class="byAlmeyda">
        <h3>Powered by Almeyda </h3>
        <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItOTEgMCA1MTIgNTEyLjAwMTQxIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTMxNSAyMTFoLTEyNC4xNDQ1MzFsMTA3LjE2Nzk2OS0xODguNTU4NTk0YzIuNjUyMzQzLTQuNjQ0NTMxIDIuNjM2NzE4LTEwLjM0Mzc1LS4wNDI5NjktMTQuOTcyNjU2LTIuNjk1MzEzLTQuNjI1LTcuNjMyODEzLTcuNDY4NzUtMTIuOTgwNDY5LTcuNDY4NzVoLTE4MGMtNi40NTcwMzEgMC0xMi4xODc1IDQuMTMyODEyLTE0LjIyMjY1NiAxMC4yNTM5MDZsLTkwIDI3MWMtMS41MzkwNjMgNC41NzAzMTMtLjc2MTcxOSA5LjYwOTM3NSAyLjA1MDc4MSAxMy41MTk1MzIgMi44MjgxMjUgMy45MTQwNjIgNy4zNTU0NjkgNi4yMjY1NjIgMTIuMTcxODc1IDYuMjI2NTYyaDEyNy4yNTM5MDZsLTgxLjAzNTE1NiAxOTAuMDk3NjU2Yy0yLjkwMjM0NCA2Ljc1MzkwNi0uNDY4NzUgMTQuNjIxMDk0IDUuNzQyMTg4IDE4LjU1ODU5NCA2LjEwOTM3NCAzLjkwNjI1IDE0LjMxNjQwNiAyLjg3ODkwNiAxOS4yNDYwOTMtMi42OTE0MDZsMjQwLTI3MWMzLjkyNTc4MS00LjQxMDE1NiA0Ljg5NDUzMS0xMC43MjY1NjMgMi40NzY1NjMtMTYuMTAxNTYzLTIuNDE3OTY5LTUuMzkwNjI1LTcuNzc3MzQ0LTguODYzMjgxLTEzLjY4MzU5NC04Ljg2MzI4MXptMCAwIi8+PC9zdmc+" />
        <h3>@COMANDODESIGN </h3>
    </div>

    <div class="peliculon">
        <p>Copyright ©2021 <span>Hidrobombeo Ingenieros SAC</span> . Todos los derechos reservados.
        </p>
    </div>

    <a href="data/brochure.pdf" target="_blank" class="descargar_brochure" download="data/brochure.pdf">
        <img src="images/menu.svg" alt="" width="">
        <h2>Brochure</h2>
        <p>Descarga nuestro brochure</p>
    </a>

    <script src="js/jquery.min.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/actives.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/carouselDoble.js"></script>
</body>

</html>