<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK DE bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- LINK DE JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
               <!-- LINK DE LAS LIBRERIAS DEL PLUGGIN PARA EL VISOR -->
        <script src="LC-Lightbox-LITE-master/js/lc_lightbox.lite.js"></script>
        <script src="LC-Lightbox-LITE-master/js/lc_lightbox.lite.min.js"></script>
        <link rel="stylesheet" href="LC-Lightbox-LITE-master/css/lc_lightbox.css">
        <link rel="stylesheet" href="LC-Lightbox-LITE-master/css/lc_lightbox.min.css">
       
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenidos/as</title>
</head>
<body>
    <h1>Manejo de imagenes con Jquery</h1>
<!-- CARDS DE bootstrap QUE LE PERMITE UTILIZAR IMAGENES NOTESE QUE LA LINEA 26 SE AGREGA UNA CLASE MYBOX -->
<div class="card conf" style="width: 18rem;">
<!-- LA CLASE MYBOX ES LA QUE PERMITE REALIZAR LA VISTA DE LAS IMAGENES 
PARA QUE FUNCIONE OCUPAMOS UN HREF DIRIGIENDO A LA UBICACION DE LA IMAGEN -->
  <a class="mybox" href="img/naruto.jpg"><img src="img/naruto.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">Imagen de prueba 1</h5>
    <p class="card-text">Texto alternativo</p>
    <!-- EN EL BOTON VER IMAGENES COLOCAMOS UN HREFF Y UNA NUEVA CLASE ESTO PARA NO DUPLICAR LA VISTA 
    EN LA GALERIA QUE MUESTRA EL VISOR PUEDE HACER PRUEBAS COLOCANDO LA MISMA 
    CLASE Y NOTAR LA DIFERENCIA. -->
    <a  href="img/naruto.jpg" class="btn btn-primary myboxv">Ver imagen</a>
  </div>
</div>

<div class="card conf" style="width: 18rem;">
  <a class="mybox" href="img/Kakashi.jpg"><img src="img/kakashi.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">Imagen de prueba 2</h5>
    <p class="card-text">Texto alternativo</p>
    <a href="img/Kakashi.jpg" class="btn btn-primary myboxv">Ver imagen</a>
  </div>
</div>

<script>
    // ACA USAMOS EL PLUGGIN LC CREANDO UNA CLASE CON UNA CONFIGURACION
    // PARA EL VISOR DE IMAGENES QUE ESTAMOS UTILIZANDO .
               lc_lightbox('.mybox',{
                gallery:true,
                skin:'dark',
                counter:true,
                fullscreen:true,
                download:true,
               });
               lc_lightbox('.myboxv',{
                gallery:true,
                skin:'dark',
                counter:true,
                fullscreen:true,
                download:true,
               });
// TENES DOS CLASES UNA PARA ZOOM EN LA IMAGEN Y OTRA PARA EL BOTON
// PODEMOS CREAR CUANTAS CLASES NECESITEMOS.
            </script>
</body>
</html>
<!-- NOTA: EN LA CARPETA LC-Lightbox-LITE-master se encuentran descargada las librerias
que se estan utilizando. -->