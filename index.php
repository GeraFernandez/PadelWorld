<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/dashboard/');


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
    <link rel="shortcut icon" href="/img/logo-pelota.png">

   <!-- iconos -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles/estilos.php">

    
    <title>Padel World - Registro  </title>
</head>
<body >

  <!-- NAV -->
  <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #040738;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/img/logo-pelota.png" alt="" srcset="" width=" 35px"></a> <!-- modificar con css, cprregir detaslle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><!-- modif agregar links a paginas -->
            <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/jugadores.php">Jugadores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/clubes.php">Clubes</a>
        </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/profesores.php">Profesores</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/torneos.php">Torneos</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Otros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/pages/novedades.php">Novedades</a></li>
              <li><a class="dropdown-item" href="/pages/sobre-nosotros.php">Sobre nosotros</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#contacto">Contacto</a></li>

            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 flex-grow-1" type="search" placeholder="Ingrese su busqueda" aria-label="Search">
          <button class="btn btn-danger btn-enviar" type="submit"><i class="bi bi-search"></i></button>         
        </form>
        
        <!-- icono user -->
        <div class="nav-item dropdown ms-3">  <!-- modif consultar profe como hacer con el icono user   -->
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle display-6"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/pages/login.php">Iniciar sesión</a></li>
            <li><a class="dropdown-item" href="/pages/registrarse.php">Registrarse</a></li>
          </ul>
        </div>
        
        

      </div>
    </div>
  </nav>


  <div class="container-fluid mt-1">
   <!-- CARUSEL -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div><!-- modif ver transiciones -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/fondo-padel2.jpg" class="d-block w-100 " alt="carousel1"> <!-- MODIF ver aca para ajustar responsive -->
        <div class="carousel-caption ">
          <h5 class="carousel-title">Organización de torneos, Gestion y reservas de turnos, Profesores y Prestadores de Servicios de padel.</h5>
          </div>
      
      </div>
      <div class="carousel-item">
        <img src="/img/agenda-world-padel-tour-2023.jpg" class=" w-100" alt="carousel2">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-title">Organización de torneos, Gestion y reservas de turnos, Profesores y Prestadores de Servicios de padel.</h5>
        </div>
      </div>
      <div class="carousel-item">sd
        <img src="/img/pxfuel.jpg" class="d-block w-100" alt="carousel3">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="carousel-title">Organización de torneos, Gestion y reservas de turnos, Profesores y Prestadores de Servicios de padel.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<!-- CAJA BUSQUEDA -->
<section>  
<div class="container">
  <div class="caja-busqueda">
    <div class="busqueda-ubicacion">
      <form class="row gx-2 gy-2 align-items-center mt-1 mb-1">
        <div class="col-sm-3">
          <label class="visually-hidden" for="specificSizeInputName">Club</label>
          <input type="text" class="form-control" id="specificSizeInputName" placeholder="Club">
        </div>
        <div class="col-sm-2">
          <label class="visually-hidden" for="specificSizeInputGroupUsername">fecha</label>
          <div class="input-group">
            <input type="date" class="form-control" id="specificSizeInputGroupUsername" placeholder="Fecha">
          </div>
        </div>
        <div class="col-sm-3">
          <label class="visually-hidden" for="specificSizeSelect">Preferencia</label>
          <select class="form-select" id="specificSizeSelect">
            <option selected>Provincia</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
          </select>
        </div>
        <div class="col-sm-3">
          <label class="visually-hidden" for="specificSizeSelect">Preferencia</label>
          <select class="form-select" id="specificSizeSelect">
            <option selected>Ciudad</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
          </select>
        </div>
       
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>

    
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>



<!-- SECCION FUNCIONALIDADES PRINCIPALES -->
<section id="funcionalidades">
  <div class="fila">
     
      <div class="funcionalidades"> 
          <h4>CLUBES</h4> 
          <div class="circle-icon">
            <i class="bi bi-geo-alt-fill"></i>
          </div>           
          <p></p>
      </div>

      <div class="funcionalidades">
        <h4>PROFESORES</h4>    
        <div class="circle-icon">
          <i class="bi bi-mortarboard-fill"></i>
        </div>        
        <p>PADEL WORD te brinda herramientas para que puedas automatizar la gestión de tus clases de padel. Encontrá profesores de padel en todo el país y administrá tu calendario.</p>
    </div>

    <div class="funcionalidades">
      <h4>TORNEOS</h4>  
      <div class="circle-icon">
        <i class="bi bi-trophy-fill"></i>
      </div>          
      <p<p>PADEL te ayuda a centralizar la gestión de tus torneos en un solo lugar. Utilizamos los tipos de torneos más comunes pero brindamos la flexibilidad suficiente para que puedas migrar tus torneos a nuestra plataforma rápidamente.</p>
  </div>

  <div class="funcionalidades">
    <h4>MARKETPLACE</h4>  
    <div class="circle-icon">
      <i class="bi bi-shop"></i>
    </div>          
    <p>Publicá tus productos y servicios en PADEL WORD y expandí tu negocio.</p>
    </div>
    </div>
    <div class="fila">
    </section>

 
<!-- SECCTION CONTACTO -->
<section id="contacto">
  <h3 class="titulo-seccion">Contacto</h3>
  <div class="contenedor-form">
      <form action="">
          <div class="fila mitad">
              <input type="text" placeholder="Nombre Completo *" class="input-mitad">
              <input type="email" placeholder="Dirección de Email" class="input-mitad">
          </div>
          <div class="fila">
              <input type="text" placeholder="Motivo del contacto" class="input-full">
          </div>
          <div class="fila">
              <textarea name="" id="" cols="30" rows="10" placeholder="Tu Mensaje..." class="input-full"></textarea>
          </div>

          <input type="submit" value="Enviar Mensaje" class="btn-enviar">
      </form>
  </div>
</section>

<!-- SECCION FOOTER -->
<footer>
  
  <footer>
    <div class="redes" >
      <p class="footer-parrafo">© PADEL WORLD - Todos los derechos reservados 2023</p>
        <a href="https://www.linkedin.com/in/fernandez-christe/" target="_blank" style="display: inline-block;"><i class="bi bi-facebook"></i></a>
        <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/GeraFernandez" target="_blank" style="display: inline-block;"><i class="bi bi-twitter"></i></a>
    </div>
  </footer>

    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
